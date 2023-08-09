import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:shared_preferences/shared_preferences.dart';

class FormLayanan extends StatefulWidget {
  @override
  _FormLayananState createState() => _FormLayananState();
}

class _FormLayananState extends State<FormLayanan> {
  final _formKey = GlobalKey<FormState>();
  String? _layanan;
  String? _judul;
  String? _tujuan;
  List<String> _jenisLayanan = [];

  final String apiUrl = 'http://robert-lycos.gl.at.ply.gg:124487/api/user';

  Future<List<String>> _fetchJenisLayanan() async {
    SharedPreferences preferences = await SharedPreferences.getInstance();
    String? bearerToken = preferences.getString('token');

    try {
      final response = await http.get(
        Uri.parse('http://metal-knife.gl.at.ply.gg:7437/api/form-layanan'),
        headers: {
          'Authorization': 'Bearer $bearerToken',
        },
      );

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        return List<String>.from(data['layanan']['jenis_layanan']);
      } else {
        throw Exception('Failed to fetch data');
      }
    } catch (e) {
      throw Exception('Failed to fetch data: $e');
    }
  }

  Map<String, String> _layananValues = {
    'Pribadi': '1',
    'Sosial': '2',
    'Karir': '3',
    'Belajar': '4',
    'Sosialisasi Karir': '5',
  };

  Future<void> _submitForm() async {
    if (_formKey.currentState!.validate()) {
      _formKey.currentState!.save();

      SharedPreferences preferences = await SharedPreferences.getInstance();
      String? bearerToken = preferences.getString('token');

      final headers = {
        'Authorization': 'Bearer $bearerToken',
        'Content-Type': 'application/x-www-form-urlencoded',
      };

      final body = {
        'layanan': _layananValues[_layanan!]!,
        'judul': _judul!,
        'tujuan': _tujuan!,
      };

      try {
        final response = await http.post(
          Uri.parse('http://metal-knife.gl.at.ply.gg:7437/api/store-layanan'),
          headers: headers,
          body: body,
        );

        if (response.statusCode == 200) {
          // Handle successful submission and parsing the API response
          Map<String, dynamic> responseData = json.decode(response.body);
          if (responseData.containsKey('status') &&
              responseData['status'] == 200) {
            showDialog(
              context: context,
              builder: (_) => AlertDialog(
                title: Text('Success'),
                content: Text('Form submitted successfully.'),
                actions: [
                  TextButton(
                    onPressed: () => Navigator.pop(context),
                    child: Text('OK'),
                  ),
                ],
              ),
            );
          } else {
            showDialog(
              context: context,
              builder: (_) => AlertDialog(
                title: Text('Error'),
                content: Text('Failed to submit the form.'),
                actions: [
                  TextButton(
                    onPressed: () => Navigator.pop(context),
                    child: Text('OK'),
                  ),
                ],
              ),
            );
          }
        } else {
          showDialog(
            context: context,
            builder: (_) => AlertDialog(
              title: Text('Error'),
              content: Text('Failed to submit the form.'),
              actions: [
                TextButton(
                  onPressed: () => Navigator.pop(context),
                  child: Text('OK'),
                ),
              ],
            ),
          );
        }
      } catch (e) {
        showDialog(
          context: context,
          builder: (_) => AlertDialog(
            title: Text('Error'),
            content: Text('Failed to submit the form: $e'),
            actions: [
              TextButton(
                onPressed: () => Navigator.pop(context),
                child: Text('OK'),
              ),
            ],
          ),
        );
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return FutureBuilder<List<String>>(
      future: _fetchJenisLayanan(),
      builder: (context, snapshot) {
        if (snapshot.connectionState == ConnectionState.waiting) {
          return Center(
            child: CircularProgressIndicator(),
          ); // Show loading indicator while fetching data
        } else if (snapshot.hasError) {
          return Center(
            child: Text('Error: ${snapshot.error}'),
          );
        } else {
          _jenisLayanan =
              snapshot.data!; // Assign fetched data to _jenisLayanan
          return Material(
            child: Scaffold(
              appBar: AppBar(title: Text('Form Layanan')),
              body: Form(
                key: _formKey,
                child: Padding(
                  padding: const EdgeInsets.all(16.0),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.stretch,
                    children: [
                      DropdownButtonFormField<String>(
                        value: _layanan,
                        onChanged: (String? newValue) {
                          setState(() {
                            _layanan = newValue;
                          });
                        },
                        items: _jenisLayanan
                            .map<DropdownMenuItem<String>>((String value) {
                          return DropdownMenuItem<String>(
                            value: value,
                            child: Text(value),
                          );
                        }).toList(),
                        decoration:
                            InputDecoration(labelText: 'Select Bimbingan'),
                        validator: (value) {
                          if (value == null) {
                            return 'Please select a value';
                          }
                          return null;
                        },
                      ),
                      SizedBox(height: 16),
                      TextFormField(
                        decoration: InputDecoration(labelText: 'Judul'),
                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Please enter a value';
                          }
                          return null;
                        },
                        onSaved: (value) => _judul = value,
                      ),
                      SizedBox(height: 16),
                      TextFormField(
                        decoration: InputDecoration(labelText: 'Tujuan'),
                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Please enter a value';
                          }
                          return null;
                        },
                        onSaved: (value) => _tujuan = value,
                      ),
                      SizedBox(height: 16),
                      ElevatedButton(
                        onPressed: _submitForm,
                        child: Text('Submit'),
                      ),
                    ],
                  ),
                ),
              ),
            ),
          );
        }
      },
    );
  }
}
