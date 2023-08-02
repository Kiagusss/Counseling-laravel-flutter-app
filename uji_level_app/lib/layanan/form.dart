import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';

class FormLayanan extends StatefulWidget {
  @override
  _FormLayananState createState() => _FormLayananState();
}

class _FormLayananState extends State<FormLayanan> {
  String name = '';
  String email = '';
  String? bearerToken; // Change the type to String?

  final String apiUrl = 'http://metal-knife.gl.at.ply.gg:7437/api/user';

  Future<Map<String, dynamic>> fetchData() async {
    // Get the shared preferences instance
    SharedPreferences preferences = await SharedPreferences.getInstance();

    // Fetch the bearer token, which can be nullable
    bearerToken = preferences.getString('token');

    // Check if the bearer token is not null before making the request
    if (bearerToken != null) {
      final response = await http.get(Uri.parse(apiUrl), headers: {
        'Authorization': 'Bearer $bearerToken',
      });

      if (response.statusCode == 200) {
        final data = json.decode(response.body);
        return data['user'];
      } else {
        throw Exception('Failed to load data');
      }
    } else {
      throw Exception('Bearer token is missing');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('FormLayanan Page'),
      ),
      body: FutureBuilder<Map<String, dynamic>>(
        future: fetchData(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(
              child: CircularProgressIndicator(),
            );
          } else if (snapshot.hasError) {
            return Center(
              child: Text('Error: ${snapshot.error}'),
            );
          } else {
            final data = snapshot.data!;
            return Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text('Name: ${data['nama']}'),
                  Text('Email: ${data['email']}'),
                  Text('TTL: ${data['ttl']}'),
                  Text('Jenis Kelamin: ${data['jenis_kelamin']}'),
                  Text('Kelas: ${data['nama_kelas']}'),

                ],
              ),
            );
          }
        },
      ),
    );
  }
}
