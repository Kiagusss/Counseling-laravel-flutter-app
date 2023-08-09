import 'package:flutter/src/widgets/framework.dart';
import 'package:flutter/src/widgets/placeholder.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:uji_level_app/profile.dart';
import 'package:uji_level_app/profile/updateprofile.dart';

class UpdateProfile extends StatefulWidget {
  const UpdateProfile({super.key});

  @override
  State<UpdateProfile> createState() => _UpdateProfileState();
}

class _UpdateProfileState extends State<UpdateProfile> {
  @override




    String? bearerToken; // Change the type to String?

  final String _nama = '';

  final String apiUrl = 'http://robert-lycos.gl.at.ply.gg:12448/api/user';

    void update() async{
      final datauser = {
      'nama': _nama
    };

    final result = await http.patch(
      Uri.parse('http://robert-lycos.gl.at.ply.gg:12448/api/update-user'),
      body: datauser,
    );

    final response = json.decode(result.body);

    if(response['status'] == 200){
          Navigator.of(context).pushReplacement(
        MaterialPageRoute(
          builder: (context) => Profile(),
        ),
      );
    }


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
                              validator: (value) {
                                if (value?.isEmpty ?? true) {
                                  return 'Please enter an email';
                                }
                                return null;
                              },
                            ),
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