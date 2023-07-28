import 'package:flutter/material.dart';
import 'package:flutter/material.dart';
import 'dart:convert';
import 'package:uji_level_app/homess.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import '../../methods/api.dart';
class Logins extends StatefulWidget {
  
  const Logins({super.key});

  @override
  State<Logins> createState() => _LoginsState();
}

class _LoginsState extends State<Logins> {
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
      Uri.parse('http://metal-knife.gl.at.ply.gg:7437/api/login'),
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
          builder: (context) => homepage(),
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
            // color: Colors.purpleAccent,
            child: Column(
              children: <Widget>[
                Container(
                  // width: 100,
                  height: 400,
                  // color: Colors.pink,
                  child: Column(
                    children: <Widget>[
                      const SizedBox(
                        height: 100,
                      ),
                      Container(
                        height: 130,
                        // color: Colors.blueGrey,
                        child: Image.asset(
                          'assets/logo.png',
                          fit: BoxFit.cover,
                        ),
                         // Ubah dengan path ke file gambar Anda
                      // fit: BoxFit.cover,
                      ),
                      Container(
                        // height: 100,
                        // color: Colors.grey,
                        child: Text(
                          '(To Be Honest)',
                          style: TextStyle(
                            fontFamily: 'poppins',
                            fontSize: 25,
                            fontWeight: FontWeight.w700
                          ),
                        ),
                      ),
                      Container(
                        // height: 100,
                        width: 260,
                        // color: Colors.blue,
                        child: Text(
                          'Unblocking Your Truth: To Be Honest - Your Path to Guidance and Counseling',
                          textAlign: TextAlign.center,
                          style: TextStyle(
                            fontFamily: 'poppins',
                            fontWeight: FontWeight.w700,
                            fontSize: 12,
                            color: Color.fromARGB(255, 138, 135, 135)
                          ),
                        ),
                      ),
                    ]
                  ),
                ),
                
                Container(
                  width: 350,
                  height: 10,
                  // color: Colors.yellow,

                  child: Column(
                    children: <Widget>[
                      
                      Container(
                        // color: Colors.green,
                        width: 350,
                        child: Text(
                          "Login",
                          textAlign: TextAlign.start,
                          style: TextStyle(
                            
                            color: Colors.blue,
                            fontFamily: 'poppins',
                            fontWeight: FontWeight.w700,
                            fontSize: 40
                          ),
                        ),
                      ),

                      const SizedBox(height: 10,),

                      Container(
                        child: Text(
                          "Hi student, We've missed you so long. login to your account",
                          // textAlign: TextAlign.center,
                          style: TextStyle(
                            fontFamily: 'poppins',
                            fontSize: 16,
                          ),
                        ),
                      ),

                      const SizedBox(height: 12,),

                      
                      TextField(
                        decoration: InputDecoration(
                          filled: true,
                          // fillColor: Colors.blue.withOpacity(0.3),
                          hintText: 'Email',
                          hintStyle: TextStyle(color: Colors.blue),
                          border: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(8.0),
                          ),
                        ),
                        style: TextStyle(color: Colors.blue),
                      ),

                      const SizedBox(
                        height: 12,
                      ),

                      TextField(
                        decoration: InputDecoration(
                          filled: true,
                          // fillColor: Colors.blue.withOpacity(0.3),
                          hintText: 'Password',
                          hintStyle: TextStyle(color: Colors.blue),
                          border: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(8.0),
                          ),
                        ),
                        style: TextStyle(color: Colors.blue),
                      ),

                      const SizedBox(height: 30,),

                      ElevatedButton(
                        onPressed: null, 
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
                          backgroundColor: MaterialStateProperty.all<Color>(Colors.blue),
                          fixedSize: MaterialStateProperty.all<Size>(Size(200, 30)),
                        ),
                      )
                    ],
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