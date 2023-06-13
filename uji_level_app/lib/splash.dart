import 'dart:math';
import 'package:flutter/material.dart';
import 'package:lottie/lottie.dart';
import 'package:uji_level_app/onboard.dart';

class splash extends StatefulWidget {
  const splash({Key? key}) : super(key: key);

  @override
  State<splash> createState() => _splashState();
}

class _splashState extends State<splash> with TickerProviderStateMixin {
  final Random _random = Random();
  late final AnimationController _controller;

  @override
  void initState() {
    super.initState();
    _controller = AnimationController(vsync: this, duration: Duration(seconds: 1));
  }

  void dispose() {
    _controller.dispose();
    super.dispose();
  }

  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: Container(
          color: Colors.white,
          // decoration: BoxDecoration(
          //   gradient: LinearGradient(
          //     begin: Alignment.topCenter,
          //     end: Alignment.bottomCenter,
          //     colors: [ Color.fromRGBO(232, 227, 169, 1), Color.fromARGB(255, 124, 139, 3)],
          //   ),
          // ),
          child: Center(
            child: GestureDetector(
              // onTap: ()[
              //   setState(() ());
              // ],


              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [

                  const Flexible(
                    child: Image(
                      image: AssetImage('assets/logo.png'), // Ubah dengan path ke file gambar Anda
                      // fit: BoxFit.cover, // Atur fit sesuai kebutuhan Anda
                    ),
                  ),


                  Flexible(
                    child: AnimatedContainer(
                      duration: const Duration(seconds: 1),
                      width: 200.0 + _random.nextInt(30),
                      height: 200.0 + _random.nextInt(30),
                      padding: const EdgeInsets.all(10),
                      decoration: BoxDecoration(
                        shape: BoxShape.circle,
                        color: Color.fromARGB(193, 76, 112, 190),
                      ),
                      child: Container(
                        child: 
                          LottieBuilder.network(
                          'https://assets3.lottiefiles.com/private_files/lf30_rwpu0mow.json',
                          width: 400,
                          height: 380,
                          fit: BoxFit.fill,
                          controller: _controller,
                          onLoaded: (composition) {
                            _controller
                              ..duration = composition.duration
                              ..forward().then((value) {
                                Navigator.push(
                                    context,
                                    MaterialPageRoute(
                                        builder: (context) => const onboard()));
                              });
                          },
                        ),
                      ),
                    ),
                  ),


                  const SizedBox(
                    height: 10,
                  ),


                  const Flexible(
                    child: SizedBox(
                      width: 300,
                      height: 80, 
                      child: Text(
                        "Every small step towards change is a meaningful step.",
                        style: TextStyle(
                          fontSize: 22,
                          color: Colors.black,
                          fontFamily: 'poppins',
                        ),
                        textAlign: TextAlign.center,
                      ),
                    ),
                  )


                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}
