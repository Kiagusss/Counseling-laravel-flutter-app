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

  final String apiUrl = 'http://thank-netherlands.at.ply.gg:44745/api/show-layanan';
  final String apiUrls = 'http://thank-netherlands.at.ply.gg:44745/api/cancel';

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
          Uri.parse('$apiUrls/${widget.id}'),
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

            return Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text('Guru BK: $guru'),
                  Text('Wali Kelas: $walas'),
                  Text('Judul: $judul'),
                  Text('Jenis Layanan: $jenisLayanan'),
                  Text('Siswa:'),
                  Column(
                    children: siswaList.map((siswa) => Text(siswa)).toList(),
                  ),
                  ElevatedButton(
                    onPressed: () async {
                      // Show the cancellation dialog
                      String? cancellationReason = await _showCancellationDialog();

                      if (cancellationReason != null && cancellationReason.isNotEmpty) {
                        // Call the API to cancel the layanan with the provided reason
                        await _cancelLayanan(cancellationReason);
                        // Perform any additional actions if needed after cancellation
                        // For example, show a success message or navigate back to the previous page
                      }
                    },
                    child: Text('Cancel Layanan'),
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
