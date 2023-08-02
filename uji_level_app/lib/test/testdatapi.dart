import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:flutter/src/widgets/placeholder.dart';
import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:uji_level_app/model/archive.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import 'package:uji_level_app/screens/auth/logins.dart';



class testapi extends StatefulWidget {
  const testapi({super.key});

  @override
  State<testapi> createState() => _testapiState();
}

class _testapiState extends State<testapi> {

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
      Uri.parse('http://robert-lycos.gl.at.ply.gg:12448/api/user'),
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
  @override
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
                return Container(
                  child: Column(
                    children: [
                      Text('${archive.judul}'),
                      Text(archive.nama_guru),
                      Text(archive.status),
                      Text(archive.jadwal_konseling),
                    ],
                  ),
                  
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