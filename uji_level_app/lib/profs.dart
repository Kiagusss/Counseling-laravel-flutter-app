import 'package:flutter/material.dart';

class Prof extends StatefulWidget {
  const Prof({Key? key}) : super(key: key);

  @override
  State<Prof> createState() => _ProfState();
}

class _ProfState extends State<Prof> {

  bool _isButtonPressed = false;
  double _buttonWidth = 200;
  Color _buttonColor = Colors.blue;

  void _handleTapDown(TapDownDetails details) {
    setState(() {
      _isButtonPressed = true;
      _buttonWidth = 180;
      _buttonColor = Colors.red;
    });
  }

  void _handleTapUp(TapUpDetails details) {
    setState(() {
      _isButtonPressed = false;
      _buttonWidth = 200;
      _buttonColor = Colors.blue;
    });
  }



  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        appBar: AppBar(
          backgroundColor: Colors.white,
          elevation: 0, 
          leading: IconButton(
            icon: Icon(
              Icons.arrow_back,
              color: Colors.black, // Mengubah warna ikon menjadi hitam
            ),
            onPressed: () {
              Navigator.pop(context);
            },
          ),
          title: Text(
            'Back',
            style: TextStyle(
              color: Colors.black, // Mengubah warna teks menjadi hitam
            ),
          ),
          iconTheme: IconThemeData(
            color: Colors.black, // Mengubah warna ikon menjadi hitam
          ),
        ),


        body: Center(
          child: Container(
            color: Colors.white,
            width: 450,
            // height: 100,
            child: Column(
              children: <Widget>[
                Container(
                  width: 400,
                  // height: 400,
                  // color: Colors.pink,

                  child: Column(
                    children: <Widget>
                    [CircleAvatar(
                      radius: 80,
                      backgroundImage: AssetImage(
                        'assets/pa riki.png',
                      ), // Ganti dengan path atau URL foto profil
                    ),
                    SizedBox(height: 16),
                    Text(
                      'Nama Pengguna',
                      style: TextStyle(
                        fontSize: 24,
                        fontWeight: FontWeight.bold,
                        fontFamily: 'poppins'
                      ),
                      ),
                      SizedBox(height: 8),
                      Text(
                        'NIPD: 123456789',
                        style: TextStyle(
                          fontSize: 16,
                          fontWeight: FontWeight.w500,
                          fontFamily: 'poppins'
                        ),
                      ),
                      Container(
                        width: 150,
                        height: 30,
                        // color: Colors.green,
                        child: Center(
                          child: Row(
                            mainAxisAlignment: MainAxisAlignment.center,
                            children:<Widget> [
                              Container(
                                width: 30,
                                // height: 30,
                                decoration: BoxDecoration(
                                  color: Colors.orange,
                                  borderRadius: BorderRadius.all(Radius.circular(5))
                                ),
                                // color: Colors.yellow,
                                
                                child: Align(
                                  alignment: Alignment.center,
                                  child: Text(
                                    'X',
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontFamily: 'poppins',
                                      fontWeight: FontWeight.w700,
                                      color: Colors.white
                                    ),
                                  ),
                                ),
                              ),
                              const SizedBox(
                                width: 5,
                              ),
                              Container(
                                width: 80,
                                // height: 100,
                                decoration: BoxDecoration(
                                  color: Colors.blue,
                                  borderRadius: BorderRadius.all(Radius.circular(5))
                                ),

                                
                                child: Align(
                                  alignment: Alignment.center,
                                  child: Text(
                                    'PPLG',
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontFamily: 'poppins',
                                      fontWeight: FontWeight.w700,
                                      color: Colors.white
                                    ),
                                  ),
                                ),
                              ),

                              const SizedBox(
                                width: 5,
                              ),
                              
                              Container(
                                width: 30,
                                // height: 100,
                                decoration: BoxDecoration(
                                  color: Colors.green,
                                  borderRadius: BorderRadius.all(Radius.circular(5))
                                ),
                                
                                
                                child: Align(
                                  alignment: Alignment.center,
                                  child: Text(
                                    '2',
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontFamily: 'poppins',
                                      fontWeight: FontWeight.w700,
                                      color: Colors.white
                                    ),
                                  ),
                                ),
                              ),


                            ],
                          ),
                        ),
                      ),
                      SizedBox(height: 24),
                      ElevatedButton(
                        onPressed: () {
                          // Aksi saat tombol "Edit Profile" ditekan
                        },
                        child: Text(
                          'Edit Profile',
                          style: TextStyle(
                            
                            fontSize: 15,
                            fontWeight: FontWeight.bold,
                            fontFamily: 'poppins'
                          ),
                        ),
                      ),
                    ]
                  ),
                ),

                
                Container(
                  width: 100,
                  height: 35,
                  child: GestureDetector(
                    onTapDown: _handleTapDown,
                    onTapUp: _handleTapUp,
                    child: AnimatedContainer(
                      duration: Duration(milliseconds: 150),
                      width: _buttonWidth,
                      height: 50,
                      decoration: BoxDecoration(
                        color: _buttonColor,
                        borderRadius: BorderRadius.circular(5),
                      ),
                      child: Center(
                        child: Text(
                          'logout',
                          style: TextStyle(
                            color: Colors.white,
                            fontSize: 15,
                            fontWeight: FontWeight.bold,
                            fontFamily: 'poppins'
                          ),
                        ),
                      ),
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
