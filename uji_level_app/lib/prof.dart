import 'package:flutter/material.dart';

class Prof  extends StatefulWidget {
  const Prof ({super.key});

  @override
  State<Prof> createState() => _ProfState();
}

class _ProfState extends State<Prof> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        body: Center(
          child: Container(
            // color: Colors.pink,
            width: 100,
            height: 100,
            child: Column(
              children: <Widget> [
                Container(
                  child: Text('onprogress'),
                ),
                Container(
                  child: ElevatedButton(
                    onPressed: () {
                      // Logika untuk logout
                    },
                    child: Text('Logout'),
                  ),
                ),
              ],
            ),
            
          )
        )
      ),
    );
  }
}