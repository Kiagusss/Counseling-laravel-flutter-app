import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'model/archive.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;


class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {

  //   String _nama = '';
  // String _nisn = '';
  // String _kelas = '';
  // String _namaWalas = '';
  // String _namaGuru = '';


  @override
   void initState() {
    super.initState();
    fetchData();
  }

  @override
  void dispose() {
    super.dispose();
  }

  void fetchData() async {
    SharedPreferences preferences = await SharedPreferences.getInstance();
    String? token = preferences.getString('token');

    var response = await http.get(
      Uri.parse('http://metal-knife.gl.at.ply.gg:7437/api/user'),
      headers: {'Authorization': 'Bearer $token'},
    );

    if (response.statusCode == 200) {
      var userData = jsonDecode(response.body);

      // if (mounted) {
      //   setState(() {
      //     _nama = userData['nama'];
      //     _nisn = userData['nisn'];
      //     _kelas = userData['kelas'];
      //     _namaWalas = userData['nama_walas'];
      //     _namaGuru = userData['nama_guru'];
      //     });
      // }
    }
  }
  Widget build(BuildContext context) {
    return Scaffold(
      body: FutureBuilder<List<Archive>>(
        future: fetchDataKonseling(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            return Center(child: Text('Error: ${snapshot.error}'));
          } else {
            List<Archive> archives = snapshot.data ?? [];
            return ListView.builder(
              itemCount: archives.length,
              itemBuilder: (context, index) {
                Archive archive = archives[index];
                return ListTile(
                  title: Text(archive.judul),
                  subtitle: Text(archive.nama_guru),
                  // ... add other fields you want to display
                );
              },
            );
          }
        },
      ),
    );
  }
}
