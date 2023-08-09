import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';

class ShowLayanan extends StatefulWidget {
  final String id;

  ShowLayanan({required this.id});

  @override
  _ShowLayananState createState() => _ShowLayananState();
}

class _ShowLayananState extends State<ShowLayanan> {
  String name = '';
  String email = '';
  String? bearerToken;

  final String apiUrl = 'http://robert-lycos.gl.at.ply.gg:12448/api/show-layanan';

  Future<Map<String, dynamic>> fetchData() async {
    SharedPreferences preferences = await SharedPreferences.getInstance();
    bearerToken = preferences.getString('token');

    if (bearerToken != null) {
      final response = await http.get(
        Uri.parse('$apiUrl/${widget.id}'), // Access 'id' from the widget
        headers: {
          'Authorization': 'Bearer $bearerToken',
        },
      );

      if (response.statusCode == 200) {
        final data = json.decode(response.body);
        if (data is Map<String, dynamic>) {
          return data;
        } else {
          throw Exception('Invalid API response: $data');
        }
      } else {
        throw Exception('Failed to load data: ${response.statusCode}');
      }
    } else {
      throw Exception('Bearer token is missing');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('ShowLayanan Page'),
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
            final layanan = data['layanan'];
            final List<dynamic> siswaList = layanan['siswa'];
            final guru = layanan['guru'];
            final walas = layanan['walas'];
            final judul = layanan['judul'];
            final alasan = layanan['alasan'];
            final jenisLayanan = layanan['layanan'];

            return Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text('Guru BK: $guru'),
                  Text('Wali Kelas: $walas'),
                  Text('Judul: $judul'),
                  Text('Alasan: $alasan'),
                  Text('Jenis Layanan: $jenisLayanan'),
                  Text('Siswa:'),
                  Column(
                    children: siswaList.map((siswa) => Text(siswa)).toList(),
                  ),
                ],
              ),
            );
          }
        },
      ),
    );
  }
}
