import 'package:flutter/material.dart';
import 'package:uji_level_app/homepage.dart';
import 'dart:convert';
import 'package:uji_level_app/homess.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import 'package:uji_level_app/layanan/index.dart';
import '../../methods/api.dart';

class Login extends StatefulWidget {
  const Login({Key? key}) : super(key: key);

  @override
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
 TextEditingController email = TextEditingController(); 
  TextEditingController password = TextEditingController();
  final _formKey = GlobalKey<FormState>();
  String _email = '';
  String _password = '';
  bool _isPasswordVisible = false;

    void loginUser() async {
      final data = {
        'email': email.text.toString(),
        'password': password.text.toString(),
      };
      final result = await http.post(
        Uri.parse('http://thank-netherlands.at.ply.gg:44745/api/login'),
        body: {'email': _email, 'password': _password}
      );
      final response = jsonDecode(result.body);
      if (response['status'] == 200) {
        SharedPreferences preferences = await SharedPreferences.getInstance();
        await preferences.setInt('user_id', response['user']['id']);
        await preferences.setString('name', response['user']['name']);
        await preferences.setString('email', response['user']['email']);
        await preferences.setString('token', response['token']);
        
        Navigator.of(context).pushReplacement(
          MaterialPageRoute(
            builder: (context) => IndexLayanan(),
          ),
        );
      }
    }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Center(
          child: Container(
            width: 400,
            height: 600,
            // color: Colors.amber,
            child: Column(
              children: <Widget>[

                Container(
                  child: Image.asset('assets/login.png'),
                ),

                Container(
                  width: 300,
                  height: 60,
                  child: Text(
                    'Login',
                    textAlign: TextAlign.start,
                    style: TextStyle(
                      fontFamily: 'poppins',
                      fontWeight: FontWeight.w700,
                      fontSize: 40,
                    ),
                  ),
                ),


                Container(
                  child: Form(
                    key: _formKey,
                    child: Column(
                      children: <Widget>[


                        Padding(
                          padding: EdgeInsets.symmetric(vertical: 0.0, horizontal: 30.0),
                          child: TextFormField(
                            keyboardType: TextInputType.emailAddress,
                            decoration: InputDecoration(
                              labelText: 'Email',
                              labelStyle: TextStyle(
                                fontFamily: 'poppins',
                              ),
                              prefixIcon: Icon(
                                Icons.email_outlined,
                                size: 30,
                              ),
                            ),
                            validator: (value) {
                              if (value?.isEmpty ?? true) {
                                return 'Please enter an email';
                              }
                              return null;
                            },
                            onChanged: (value) {
                              setState(() {
                                _email = value;
                              });
                            },
                          ),
                        ),

                        SizedBox(height: 10.0), // Jarak antara kedua Padding


                        Padding(
                          padding: EdgeInsets.symmetric(vertical: 0.0, horizontal: 30.0),
                          child: TextFormField(
                            keyboardType: TextInputType.emailAddress,
                            obscureText: !_isPasswordVisible, // Mengatur input password tersembunyi atau terlihat
                            decoration: InputDecoration(
                              labelText: 'Password',
                              labelStyle: TextStyle(
                                fontFamily: 'poppins',
                              ),
                              prefixIcon: Icon(
                                Icons.lock_open,
                                size: 30,
                              ),
                              suffixIcon: GestureDetector(
                                onTap: () {
                                  setState(() {
                                    _isPasswordVisible = !_isPasswordVisible;
                                  });
                                },
                                child: Icon(
                                  _isPasswordVisible ? Icons.visibility : Icons.visibility_off,
                                  size: 30,
                                ),
                              ),
                            ),
                            validator: (value) {
                              if (value?.isEmpty ?? true) {
                                return 'Please enter a password';
                              }
                              return null;
                            },
                            onChanged: (value) {
                              setState(() {
                                _password = value;
                              });
                            },
                          ),
                        ),


                        Padding(
                          padding: EdgeInsets.only(right: 30),
                          child: Align(
                            alignment: Alignment.centerRight,
                            child: TextButton(
                              onPressed: () {
                                // Aksi ketika tombol "Forgot Password" ditekan
                              },
                              child: Text(
                                'Forgot Password?',
                                style: TextStyle(
                                  color: Colors.blue,
                                  fontSize: 17,
                                  fontFamily: 'poppins',
                                  fontWeight: FontWeight.w700
                                ),
                              ),
                            ),
                          ),
                        ),
                      SizedBox(height: 15.0), // Jarak 

                Container(
                  width: 300,
                  height: 50,
                  // color: Colors.pink,
                  child: ElevatedButton(
                    onPressed: () {
                      loginUser();
                    }, 
                    child: Text(
                      'Login',
                      style: TextStyle(
                          fontFamily: 'poppins',
                          fontWeight: FontWeight.w700,
                          color: Colors.white,
                          fontSize: 20,
                        ),
                      ),

                      style: ButtonStyle(
                        backgroundColor: MaterialStateProperty.all<Color>(Color(0xff0165FF)),
                        fixedSize: MaterialStateProperty.all<Size>(Size(200, 20)),
                      ),
                    )
                  ),
                      ],
                    ),
                  ),
                ),

                


              ],
            ),
          ),
        ),
      ),
    );
  }
}
