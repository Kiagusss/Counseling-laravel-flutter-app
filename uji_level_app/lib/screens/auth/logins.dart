import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import 'package:uji_level_app/homepage.dart';
import 'package:uji_level_app/test/testdatapi.dart';
import '../../homes.dart';
import '../../profile.dart';

class Loginss extends StatefulWidget {
  const Loginss({super.key});

  @override
  State<Loginss> createState() => _LoginssState();
}

class _LoginssState extends State<Loginss> {
  TextEditingController email = TextEditingController();
  TextEditingController password = TextEditingController();
  final _formKey = GlobalKey<FormState>();


  bool _isPasswordVisible = false;

  void loginUser() async {
    final data = {
      'email': email.text.toString(),
      'password': password.text.toString(),
    };
    final result = await http.post(
      Uri.parse('http://robert-lycos.gl.at.ply.gg:12448/api/login'),
      body: data,
    );
    final response = json.decode(result.body);
    if (response['status'] == 200) {
      SharedPreferences preferences = await SharedPreferences.getInstance();
      await preferences.setInt('user_id', response['user']['id']);
      await preferences.setString('name', response['user']['name']);
      await preferences.setString('email', response['user']['email']);
      await preferences.setString('token', response['token']);

      Navigator.of(context).pushReplacement(
        MaterialPageRoute(
          builder: (context) => Profile(),
        ),
      );
    }
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: Container(
          margin: EdgeInsets.only(top: 120, left: 25, right: 25),
          child: ListView(
            children: [
              Column(
                mainAxisAlignment: MainAxisAlignment.start,
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Container(
                      margin: EdgeInsets.only(left: 100),
                      child: Image.asset("assets/logo-tbh-besar.png")),
                  Text(
                    "Welcome Back! Glad",
                    style: GoogleFonts.urbanist(
                        fontSize: 30, fontWeight: FontWeight.bold),
                  ),
                  Text(
                    "to see you, Again!",
                    style: GoogleFonts.urbanist(
                        fontSize: 30, fontWeight: FontWeight.bold),
                  ),
                  Form(
                    key: _formKey,
                    child: Container(
                      width: 350,
                      margin: EdgeInsets.only(top: 40),
                      child: Column(
                        children: [
                          Container(
                            width: 350,
                            child: TextFormField(
                              controller: email,
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
                          Container(
                            width: 350,
                            margin: EdgeInsets.only(top: 20),
                            child: TextFormField(
                              controller: password,
                              obscureText: !_isPasswordVisible,
                              decoration: InputDecoration(
                                suffixIcon: GestureDetector(
                                  onTap: () {
                                    setState(() {
                                      _isPasswordVisible =
                                          !_isPasswordVisible;
                                    });
                                  },
                                  child: Icon(
                                    _isPasswordVisible
                                        ? Icons.visibility
                                        : Icons.visibility_off,
                                    size: 30,
                                  ),
                                ),
                                focusColor: Color(0xff4894FE),
                                filled: true,
                                fillColor: Color(0xffE8ECF4),
                                hintText: "Enter Your Password",
                                border: OutlineInputBorder(
                                  borderSide: BorderSide.none,
                                  borderRadius: BorderRadius.circular(10.0),
                                ),
                              ),
                              validator: (value) {
                                if (value?.isEmpty ?? true) {
                                  return 'Please enter a password';
                                }
                                return null;
                              },
                            ),
                          ),
                          Container(
                            margin: EdgeInsets.only(left: 150, top: 20),
                            child: Text(
                              "Forgot Password?",
                              style: GoogleFonts.urbanist(
                                  fontSize: 18,
                                  fontWeight: FontWeight.w600,
                                  color: Color(0xff6A707C)),
                            ),
                          ),
                          Container(
                            margin: EdgeInsets.only(top: 20),
                            width: 330,
                            height: 60,
                            child: ElevatedButton(
                              onPressed: () {
                                if (_formKey.currentState?.validate() == true) {
                                  loginUser();
                                }
                              },
                              child: Text(
                                'Login',
                                style: GoogleFonts.urbanist(
                                  fontWeight: FontWeight.w700,
                                  color: Colors.white,
                                  fontSize: 18,
                                ),
                              ),
                              style: ButtonStyle(
                                backgroundColor:
                                    MaterialStateProperty.all<Color>(
                                        Color(0xff4894FE)),
                              ),
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ],
              ),
            ],
          ),
        ),
      ),
    );
  }
}
