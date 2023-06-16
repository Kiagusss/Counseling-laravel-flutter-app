import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {

    String _nama = '';
  String _nisn = '';
  String _kelas = '';
  String _namaWalas = '';
  String _namaGuru = '';
  String? _photoUrl;

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
      Uri.parse('http://many-medium.at.ply.gg:38383/api/user'),
      headers: {'Authorization': 'Bearer $token'},
    );

    if (response.statusCode == 200) {
      var userData = json.decode(response.body);

      if (mounted) {
        setState(() {
          _nama = userData['nama'];
          _nisn = userData['nisn'];
          _kelas = userData['kelas'];
          _namaWalas = userData['nama_walas'];
          _namaGuru = userData['nama_guru'];
          _photoUrl = userData['profile_photo_path'];
        });
      }
    }
  }
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Home'),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (_photoUrl != null && _photoUrl!.isNotEmpty)
              CircleAvatar(
                backgroundImage: NetworkImage(_photoUrl!),
                radius: 50,
              ),
            SizedBox(height: 20),
            Text('Nama: $_nama'),
            Text('NISN: $_nisn'),
            Text('Kelas: $_kelas'),
            Text('Nama Wali Kelas: $_namaWalas'),
            Text('Nama Guru: $_namaGuru'),
          ],
        ),
      ),
    );
  }
}
