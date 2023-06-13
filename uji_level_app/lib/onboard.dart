import 'package:flutter/material.dart';
import 'package:uji_level_app/screens/auth/login.dart';

class onboard extends StatefulWidget {
  const onboard({Key? key}) : super(key: key);

  @override
  State<onboard> createState() => _onboardState();
}

  


class _onboardState extends State<onboard> {

  void _navigateToNextPage(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => Login()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(

      home: Scaffold(
        body: Center(
          child: Container(
            width: 400,
            height: 500,
            // color: Colors.white,

            child: Column(
              children: <Widget>[

                Container(
                  child: Image.asset('assets/onboard.png'),
                ),

                Container(
                  child: Text(
                    'Mental Health Is Important',
                    style: TextStyle(
                      fontSize: 25,
                      fontFamily: 'poppins',
                      fontWeight: FontWeight.w700,
                    ),
                  ),
                ),

                Center(
                  child: Container(
                    width: 290,
                    height: 50,
                    child: Text(
                      'Every student has the right to feel freedom, Consult student life with experts',
                      textAlign: TextAlign.center,
                      style: TextStyle(
                        fontSize: 15,
                        fontFamily: 'poppins',
                      ),
                    ),
                  ),
                ),

                const SizedBox(
                  height: 10,
                ),

                Container(
                  child: ElevatedButton(
                    onPressed: () => _navigateToNextPage(context), 
                    child: Text(
                      'Continue',
                      style: TextStyle(
                        fontFamily: 'poppins',
                        fontWeight: FontWeight.w700,
                        color: Colors.white,
                        fontSize: 15,
                      ),
                    ),

                    style: ButtonStyle(
                      backgroundColor: MaterialStateProperty.all<Color>(Color(0xff0165FF)),
                      fixedSize: MaterialStateProperty.all<Size>(Size(200, 35)),
                    ),
                  ),
                )
              ],
            ),

          ),
        )
      ),

    );
  }
}