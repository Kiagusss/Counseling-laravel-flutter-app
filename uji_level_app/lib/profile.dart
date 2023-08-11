import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:uji_level_app/profile/updateprofile.dart';

class Profile extends StatefulWidget {
  @override
  _ProfileState createState() => _ProfileState();
}

class _ProfileState extends State<Profile> {
  String? bearerToken; // Change the type to String?

  final String apiUrl = 'http://robert-lycos.gl.at.ply.gg:12448/api/user';

  void editprofile() {
    Navigator.of(context).pushReplacement(
      MaterialPageRoute(
        builder: (context) => UpdateProfile(),
      ),
    );
  }

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
        title: Text('Profile Page'),
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
                  Container(
                    width: 350,
                    child: TextFormField(
                      enabled: false,
                      // controller: _nama,
                      initialValue: data['nama'],
                      keyboardType: TextInputType.emailAddress,
                      decoration: InputDecoration(
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color(0xffE8ECF4),
                        hintText: "Enter Your Email",
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 30),
                  Container(
                    width: 350,
                    child: TextFormField(
                      enabled: false,
                      // controller: _nama,
                      initialValue: data['email'],
                      keyboardType: TextInputType.emailAddress,
                      decoration: InputDecoration(
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color(0xffE8ECF4),
                        hintText: "Enter Your Email",
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 30),
                  Container(
                    width: 350,
                    child: TextFormField(
                      enabled: false,
                      // controller: _nama,
                      initialValue: data['ttl'],
                      keyboardType: TextInputType.emailAddress,
                      decoration: InputDecoration(
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color(0xffE8ECF4),
                        hintText: "Enter Your Email",
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 30),
                  Container(
                    width: 350,
                    child: TextFormField(
                      enabled: false,
                      // controller: _nama,
                      initialValue: data['jenis_kelamin'],
                      keyboardType: TextInputType.emailAddress,
                      decoration: InputDecoration(
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color(0xffE8ECF4),
                        hintText: "Enter Your Email",
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 30),
                  Container(
                    width: 350,
                    child: TextFormField(
                      enabled: false,
                      // controller: _nama,
                      initialValue: data['nama_kelas'],
                      keyboardType: TextInputType.emailAddress,
                      decoration: InputDecoration(
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color(0xffE8ECF4),
                        hintText: "Enter Your Email",
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                      ),
                    ),
                  ),
                  // FloatingActionButton(
                  //   onPressed: editprofile,
                  // )
                ],
              ),
            );
          }
        },
      ),
    );
  }
}
