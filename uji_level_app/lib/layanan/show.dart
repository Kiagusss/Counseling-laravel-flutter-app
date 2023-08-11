import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'dart:async';

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

  final String apiUrl =
      'http://robert-lycos.gl.at.ply.gg:12448/api/show-layanan';

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

  Future<String?> _showCancellationDialog() async {
    return showDialog<String>(
      context: context,
      builder: (BuildContext context) {
        String? cancellationReason = '';

        return AlertDialog(
          title: Text('Cancel Layanan'),
          content: TextField(
            onChanged: (value) {
              cancellationReason = value;
            },
            decoration: InputDecoration(hintText: 'Enter cancellation reason'),
          ),
          actions: <Widget>[
            TextButton(
              child: Text('Cancel'),
              onPressed: () {
                Navigator.of(context).pop(null);
              },
            ),
            TextButton(
              child: Text('Submit'),
              onPressed: () {
                if (cancellationReason != null) {
                  Navigator.of(context).pop(cancellationReason);
                } else {
                  // Show an error message or handle the empty reason as needed
                  // For example, you can show a snackbar:
                  ScaffoldMessenger.of(context).showSnackBar(
                    SnackBar(
                      content: Text('Please enter a cancellation reason.'),
                    ),
                  );
                }
              },
            ),
          ],
        );
      },
    );
  }

  Future<void> _cancelLayanan(String cancellationReason) async {
    try {
      SharedPreferences preferences = await SharedPreferences.getInstance();
      bearerToken = preferences.getString('token');

      if (bearerToken != null) {
        final response = await http.post(
          Uri.parse('$apiUrl/${widget.id}'),
          headers: {
            'Authorization': 'Bearer $bearerToken',
          },
          body: {
            'id': widget.id,
            'alasan_kesimpulan': cancellationReason,
          },
        );

        if (response.statusCode == 200) {
          // Layanan cancelled successfully
          // Handle the response accordingly
        } else {
          // Failed to cancel layanan
          // Handle the response accordingly
        }
      } else {
        throw Exception('Bearer token is missing');
      }
    } catch (e) {
      print('Error cancelling layanan: $e');
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
            final jenisLayanan = layanan['layanan'];

            return Container(
              decoration: BoxDecoration(
                color: Colors.blue,
              ),
              child: Container(
                  margin: EdgeInsets.fromLTRB(0, 50, 0, 0),
                  decoration: BoxDecoration(
                    borderRadius: BorderRadius.only(
                      topLeft: Radius.circular(30),
                      topRight: Radius.circular(30)
                    ),
                    color: Colors.white,
                  ),
                  child: Padding(
                    padding: EdgeInsets.all(40),
                    child: Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Row(
                            crossAxisAlignment: CrossAxisAlignment.center,
                            children: [
                              Text(
                                'Judul',
                                style: TextStyle(
                                  fontSize: 25,
                                  color: Colors.blue.shade800.withOpacity(0.7),
                                  fontWeight: FontWeight.w700,
                                ),
                              ),
                              SizedBox(
                                width: 10,
                              ),
                              Icon(
                                Icons.keyboard_double_arrow_right,
                                weight: 10,
                                size: 30,
                                color: Colors.blue.shade800.withOpacity(0.5),
                              ),
                              SizedBox(
                                width: 10,
                              ),
                              Text(
                                '$judul',
                                style: TextStyle(
                                  fontSize: 25,
                                  color: Colors.blue.shade800.withOpacity(0.7),
                                  fontWeight: FontWeight.w700,
                                ),
                              ),
                            ],
                          ),
                          SizedBox(height: 20),
                          Container(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              mainAxisAlignment: MainAxisAlignment.start,
                              children: [
                                Text(
                                  'Status',
                                  style: TextStyle(
                                    color:
                                        Colors.grey.shade400.withOpacity(0.5),
                                    fontSize: 20,
                                    fontWeight: FontWeight.w700,
                                  ),
                                ),
                                SizedBox(height: 10),
                                Container(
                                  height: 75,
                                  decoration: BoxDecoration(
                                    color: Colors.white,
                                      borderRadius: BorderRadius.circular(10),
                                      border: Border.all(
                                        color: Colors.white,
                                      ),
                                      boxShadow: [
                                        BoxShadow(
                                          color: Colors.grey.withOpacity(0.5),
                                          spreadRadius: 2,
                                          blurRadius: 4,
                                          offset: Offset(0, 2)
                                        )
                                      ]
                                  ),
                                  child: 
                                  Row(
                                    mainAxisAlignment: MainAxisAlignment.center,
                                    crossAxisAlignment: CrossAxisAlignment.center,
                                    children: [
                                      Text('Not Decided',
                                      style: TextStyle(
                                        fontWeight: FontWeight.w700,
                                        fontSize: 20,
                                        color: Colors.grey.shade400.withOpacity(0.9)
                                      ),
                                      ),
                                      SizedBox(width: 10),
                                    ],
                                  )
                                
                                ),
                                SizedBox(height: 30),
                                Container(
                                  child: Column(
                                    children: [
                                      Row(
                                        children: [
                                          Icon(Icons.person,
                                          color: Colors.grey.shade300,
                                          size: 50,
                                          ),
                                          SizedBox(width: 20,),
                                          Container(
                                            height: 50,
                                            width: 255,
                                            decoration: BoxDecoration(
                                              color: Colors.grey.shade300,
                                              borderRadius: BorderRadius.circular(10)
                                            ),
                                            child: Padding(padding: EdgeInsets.all(18),
                                            child: Text(
                                              '$guru',
                                              style: TextStyle(
                                                color: Colors.black.withOpacity(0.6),
                                                fontWeight: FontWeight.w700,
                                                fontSize: 15,
                                              ),
                                            ),
                                            ),
                                          )
                                        ],
                                      ),
                                      SizedBox(height: 20),
                                      Row(
                                        children: [
                                          Icon(Icons.align_horizontal_left_rounded,
                                          color: Colors.grey.shade300,
                                          size: 50,
                                          ),
                                          SizedBox(width: 20,),
                                          Container(
                                            height: 50,
                                            width : 255,
                                            decoration: BoxDecoration(
                                              color: Colors.grey.shade300,
                                              borderRadius: BorderRadius.circular(10)
                                            ),
                                            child: Padding(padding: EdgeInsets.all(18),
                                            child: Text(
                                              '$jenisLayanan',
                                              style: TextStyle(
                                                color: Colors.black.withOpacity(0.6),
                                                fontWeight: FontWeight.w700,
                                                fontSize: 15,
                                              ),
                                            ),
                                            ),
                                          )
                                        ],
                                      ),
                                      
                                    ],
                                  ),
                                ),
                                SizedBox(height: 25,),
                                Container(
                                  
                                ),
                              ],
                            ),
                          )
                        ]),
                  )),
            );
          }
        },
      ),
    );
  }
}
