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

  final String apiUrl =
      'http://thank-netherlands.at.ply.gg:44745/api/index-layanan';

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
              title: Text(''),
              subtitle: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Row(
                    children: [
                      CircleAvatar(
                        backgroundImage: AssetImage("assets/pa riki.png"),
                        radius: 35,
                      ),
                      SizedBox(width: 17), // Jarak antara gambar dan teks
                      Column(
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Padding(
                            padding: EdgeInsets.only(bottom: 5),
                            child: Text(
                              '$guru',
                              style: TextStyle(
                                fontWeight:
                                    FontWeight.bold, // Teks tebal (bold)
                                fontFamily: 'Poppins', // Gunakan font Poppins
                                fontSize: 18,
                                color: Colors.black, // Ukuran font 16
                              ),
                            ),
                          ),
                          Text(
                            'Dental Specialist',
                            style: TextStyle(
                              fontWeight:
                                  FontWeight.normal, // Teks gaya reguler
                              fontFamily: 'Poppins', // Gunakan font Poppins
                              fontSize: 14, // Ukuran font 16
                            ),
                          ),
                        ],
                      ),
                    ],
                  ),
                  Padding(
                    padding: EdgeInsets.symmetric(
                      vertical:
                          17, // Memberikan margin atas dan bawah sebesar 15 piksel
                    ),
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment
                          .center, // Mengatur agar berada di tengah secara horizontal
                      children: [
                        Icon(Icons.access_time), // Ikon jam
                        SizedBox(width: 5), // Jarak antara ikon dan teks
                        Text('$jadwal'),
                      ],
                    ),
                  ),
                  ElevatedButton(
                    onPressed: () {
                      Navigator.push(
                        context,
                        MaterialPageRoute(
                          builder: (context) =>
                              ShowLayanan(id: layanan['id'].toString()),
                        ),
                      );
                    },
                    style: ElevatedButton.styleFrom(
                      primary: Color.fromARGB(255, 240, 248, 255),
                      onPrimary: Color.fromARGB(255, 0, 102, 255),
                      shape: RoundedRectangleBorder(
                        borderRadius: BorderRadius.circular(100),
                      ),
                      minimumSize: Size(400, 42),
                    ),
                    child: Text(
                      'Detail',
                      style: TextStyle(
                        fontFamily: 'Poppins',
                        fontWeight: FontWeight.w500, // Gaya font medium
                      ),
                    ),
                  ),
                ],
              ),
            ),
          );
        },
      ),
      floatingActionButton: FloatingActionButton(onPressed: () {
        Navigator.of(context)
            .push(MaterialPageRoute(builder: (context) => FormLayanan()));
      }),
    );
  }
}
