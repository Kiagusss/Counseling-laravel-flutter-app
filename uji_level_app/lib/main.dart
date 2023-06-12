import 'package:flutter/material.dart';
import 'package:uji_level_app/login.dart';
// import 'package:tugas_splash_screen/home.dart';
import 'package:uji_level_app/splash.dart';
// import 'package:tugas_splash_screen/db/nav.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp ({super.key});
 
  @override
  Widget build(BuildContext context) {
    return MaterialApp( 
      title: 'animated',
      theme: ThemeData(
        primaryColor: Colors.amber,
        // fontFamily: ,
      ),
      debugShowCheckedModeBanner: false,
      home: splash(),
    );
  }
}