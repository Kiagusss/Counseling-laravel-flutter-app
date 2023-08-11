import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:uji_level_app/layanan/form.dart';
import 'package:uji_level_app/layanan/show.dart';
// Replace 'your_project_name' with your actual project name

class IndexLayanan extends StatefulWidget {
  @override
  _IndexLayananState createState() => _IndexLayananState();
}

class _IndexLayananState extends State<IndexLayanan> {
  List<dynamic> layananList = [];

  final String apiUrl = 'http://robert-lycos.gl.at.ply.gg:12448/api/index-layanan';

  Future<void> fetchData() async {
    SharedPreferences preferences = await SharedPreferences.getInstance();
    String? bearerToken = preferences.getString('token');

    if (bearerToken != null) {
      final response = await http.get(
        Uri.parse(apiUrl),
        headers: {
          'Authorization': 'Bearer $bearerToken',
        },
      );

      if (response.statusCode == 200) {
        final data = json.decode(response.body);
        setState(() {
          layananList = data['layanan'];
        });
      } else {
        throw Exception('Failed to load data');
      }
    } else {
      throw Exception('Bearer token is missing');
    }
  }

  @override
  void initState() {
    super.initState();
    fetchData();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('IndexLayanan Page'),
      ),
      body: ListView.builder(
        itemCount: layananList.length,
        itemBuilder: (context, index) {
          final layanan = layananList[index];
          final guru = layanan['guru'];
          final walas = layanan['walas'];
          final judul = layanan['judul'];
          final alasan = layanan['alasan'];
          final jenisLayanan = layanan['jenis_layanan'];
          final jadwal = layanan['jadwal'];

          return Card(
            child: ListTile(
              title: Text('Judul: $judul'),
              subtitle: Text('Guru BK: $guru\nWali Kelas: $walas\nJadwal Konseling: $jadwal'),
              trailing: ElevatedButton(
                onPressed: () {
                  Navigator.push(
                    context,
                    MaterialPageRoute(
                      builder: (context) => ShowLayanan(id: layanan['id'].toString()),
                    ),
                  );
                },
                child: Text('View Details'),
              ),
            ),
          );
        },
      ),
      
    );
  }
}
