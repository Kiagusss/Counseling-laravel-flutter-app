import 'package:flutter/material.dart';
// import 'package:sliding_up_panel/sliding_up_panel.dart';
import 'package:uji_level_app/profs.dart';

class homepage extends StatefulWidget {
  const homepage({Key? key});

  @override
  State<homepage> createState() => _homepageState();
}

class _homepageState extends State<homepage> {

  
  void _navigateToNextPage(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (context) => Prof()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Scaffold(
        
        body: Center(
          child: Container(
            color: Color.fromARGB(255, 219, 224, 246),

            child: LayoutBuilder(
              builder: (BuildContext context, BoxConstraints constraints) {
                return SizedBox(
                  width: constraints.maxWidth, // Menggunakan lebar maksimum dari parent
                  height: constraints.maxHeight, // Menggunakan tinggi maksimum dari parent
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: <Widget>[
                      Container(
                        width: 400,
                        height: 390,
                        // color: Colors.pink,
                        child: Column(
                          children: <Widget>[

                            Container(
                              child: Row(
                                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                                children: <Widget>[
                                  Container(
                                    child: Image.asset('assets/logo.png'),
                                  ),
                                  InkWell(
                                    onTap: () {
                                      Navigator.push(
                                        context,
                                        MaterialPageRoute(builder: (context) => Prof()),
                                      );
                                    },
                                    child: Container(
                                      width: 50,
                                      height: 50,
                                      decoration: BoxDecoration(
                                        color: Colors.green,
                                        borderRadius: BorderRadius.circular(50),
                                      ),
                                      // Tambahkan konten atau teks pada kontainer
                                      // Sesuaikan dengan kebutuhan Anda
                                    ),
                                  ),
                                ],
                              ),
                            ),


                            Container(
                              child: Column(
                                children: <Widget>[
                                  Container(
                                    child: Text(
                                      'Welcome', 
                                      style: TextStyle(
                                        fontSize: 25,
                                        fontFamily: 'poppins',
                                        fontWeight: FontWeight.w700
                                      ),
                                    ),
                                  ),
                                  Container(
                                    child: Text(
                                      'Muhammad Jisung', 
                                      style: TextStyle(
                                        fontSize: 25,
                                        fontFamily: 'poppins',
                                        fontWeight: FontWeight.w700
                                      ),
                                    ),
                                  )
                                ],
                              ),
                            ),

                            

                            const SizedBox(
                              height: 25,
                            ),

                            Container(
                              // color: Colors.pink,
                              width: 360,
                              child: Text(
                                'latest appointment',
                                textAlign: TextAlign.start,
                                style: TextStyle(
                                  fontFamily: 'poppins',
                                  fontWeight: FontWeight.w700,
                                  fontSize: 20
                                ),
                              ),
                            ),

                            const SizedBox(
                              height: 5,
                            ),


                            Container(
                              width: 360,
                              height: 160,

                              decoration: BoxDecoration(
                                color: Colors.white,
                                borderRadius: BorderRadius.all(Radius.circular(10))
                              ),

                              child: Center(
                                child: Container(
                                  width: 340,
                                  height: 140,
                                  // color: Colors.pink,
                                  child: Row(
                                    children: <Widget>[
                                      Container(
                                        width: 130,
                                        height: 140,
                                        child: ClipRRect(
                                          borderRadius: BorderRadius.circular(10),
                                          child: Image.asset(
                                            'assets/pa riki.png',
                                            fit: BoxFit.cover,
                                          ),
                                        ),
                                      ),
                                      
                                      const SizedBox(
                                        width: 10,
                                      ),

                                      Container(
                                        width: 190,
                                        height: 140,
                                        // color: Colors.blue,
                                        child: Column(
                                          crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                          children: <Widget>[
                                            Container(
                                              child: Text(
                                                'counseling with',
                                                textAlign: TextAlign.start,
                                                style: TextStyle(
                                                  fontFamily: 'poppins',
                                                ),
                                              ),
                                            ),
                                            Container(
                                              child: Text(
                                                'Mr. Ricky Sudrajat',
                                                textAlign: TextAlign.start,
                                                style: TextStyle(
                                                  fontFamily: 'poppins',
                                                  fontWeight: FontWeight.w700,
                                                  fontSize: 20
                                                ),
                                              ),
                                            ),
                                            Container(
                                              width: 70,
                                              height: 25,
                                              decoration: BoxDecoration(
                                                color: Colors.green,
                                                borderRadius: BorderRadius.all(Radius.circular(100))
                                              ),
                                              child: Center(
                                                child: Text(
                                                  'waiting',
                                                  textAlign: TextAlign.center,
                                                  style: TextStyle(
                                                    fontFamily: 'poppins',
                                                    fontWeight: FontWeight.w700,
                                                    color: Colors.white,
                                                  ),
                                                ),
                                              ),
                                            ),

                                            const SizedBox(
                                              height: 2,
                                            ),

                                            Container(
                                              child: Row(
                                                children: <Widget> [
                                                  Container(
                                                    width: 25,
                                                    height: 25,
                                                    // color: Colors.pink,
                                                    child: Icon(Icons.calendar_today),
                                                  ),
                                                        
                                                  const SizedBox(
                                                    width: 6,
                                                  ),
                                                  
                                                  Container(
                                                    // width: 150,
                                                    height: 25,
                                                    // color: Colors.green,
                                                    child: Center(
                                                      child: Text(
                                                        '24th August 2023', 
                                                        // textAlign: TextAlign.center,
                                                        style: TextStyle(
                                                          fontFamily: 'poppins',
                                                          fontWeight: FontWeight.w700
                                                        ),
                                                      ),
                                                    ),
                                                  )
                                                ],
                                              ),
                                            ),
                                            
                                            const SizedBox(
                                              height: 1,
                                            ),

                                            Container(
                                              child: Row(
                                                children: <Widget> [
                                                  Container(
                                                    width: 25,
                                                    height: 25,
                                                    // color: Colors.blue,
                                                    child: Icon(Icons.location_pin),
                                                  ),
                                                    
                                                  const SizedBox(
                                                    width: 6,
                                                  ),
                                                  
                                                  Container(
                                                    // width: 100,
                                                    height: 25,
                                                    // color: Colors.purple,
                                                    child: Center(
                                                      child: Text(
                                                        'smk taruna bhakti', 
                                                        // textAlign: TextAlign.center,
                                                        style: TextStyle(
                                                          fontFamily: 'poppins',
                                                          fontWeight: FontWeight.w700
                                                        ),
                                                      ),
                                                    ),
                                                  )
                                                ],
                                              ),
                                            ),
                                            
                                            // const SizedBox(
                                            //   height: 1,
                                            // ),


                                            Container(
                                              // width: 10,
                                              height: 15,
                                              // color: Colors.yellow,

                                              child: Row(
                                                children: <Widget> [
                                                  Container(
                                                    child: Text(
                                                      'socials',
                                                      style: TextStyle(
                                                        fontFamily: 'poppins',
                                                        fontWeight: FontWeight.w700
                                                      ),
                                                    ),
                                                  ),

                                                  
                                                  const SizedBox(
                                                    width: 2,
                                                  ),
                                                  
                                                  Container(
                                                    child: Text(
                                                      '/',
                                                      style: TextStyle(
                                                        fontFamily: 'poppins',
                                                        fontWeight: FontWeight.w700
                                                      ),
                                                    ),
                                                  ),

                                                  
                                                  const SizedBox(
                                                    width: 2,
                                                  ),
                                                  
                                                  Container(
                                                    child: Text(
                                                      'social',
                                                      style: TextStyle(
                                                        fontFamily: 'poppins',
                                                        color: const Color.fromARGB(255, 79, 78, 78)
                                                        // fontWeight: FontWeight.w700
                                                      ),
                                                    ),
                                                  ),
                                                ],
                                              ),
                                            )

                                          ],
                                        ),
                                      ),




                                    ],
                                  ),
                                ),
                              ),
                            )


                          ],
                        ),
                      ),

                      Container(
                        width: 450,
                        height: 550,
                        // color: Colors.white,
                        decoration: BoxDecoration(
                          
                          color: Colors.white,
                          borderRadius: BorderRadius.only(
                            topLeft: Radius.circular(30),
                            topRight: Radius.circular(30),
                          ),

                          boxShadow: [
                            BoxShadow(
                              color: Color(0x40000000),
                              offset: Offset(0, -1),
                              blurRadius: 4,
                              spreadRadius: 0,
                            ),
                          ],
                        ),

                        child: Column(
                          children: <Widget> [
                            Container(
                              height: 60,
                              // color: Colors.yellow,
                              child: Column(
                                children: <Widget>[
                                  const SizedBox(
                                    height: 7,
                                  ),
                                  Container(
                                    child: Text(
                                      'Counseling History',
                                      style: TextStyle(
                                        fontFamily: 'poppins',
                                        fontWeight: FontWeight.w700,
                                        fontSize: 30
                                      ),
                                    ),
                                  )
                                ],
                              ),
                            ),


                            Container(
                              height: 450,
                              // color: Colors.blue,
                              child: ListView(
                                padding: EdgeInsets.only(top: 0, bottom: 0), // Menghilangkan jarak di atas dan di bawah
                                children: [

                                  Container(
                                    height: 350,
                                    width: 350,
                                    // color: Colors.pink,
                                    child: Center(
                                      child: Container(
                                        width: 360,
                                        height:300,
                                        // color: Colors.blueGrey,

                                        child: Row(
                                          children: <Widget>[
                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.blue,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'accept',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'private',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'career',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),

                                            const SizedBox(
                                              width: 10,
                                            ),

                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.green,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'waiting',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'socials',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'studying',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),


                                          ],
                                        ),
                                      ),
                                    ),
                                  ),

                               
                                  Container(
                                    height: 350,
                                    width: 350,
                                    // color: Colors.pink,
                                    child: Center(
                                      child: Container(
                                        width: 360,
                                        height:300,
                                        // color: Colors.blueGrey,

                                        child: Row(
                                          children: <Widget>[
                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.green,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'waiting',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'pivate',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'private',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),

                                            const SizedBox(
                                              width: 10,
                                            ),

                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.blue,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'accept',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'private',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'studying',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),


                                          ],
                                        ),
                                      ),
                                    ),
                                  ),

                                  
                                  Container(
                                    height: 350,
                                    width: 350,
                                    // color: Colors.pink,
                                    child: Center(
                                      child: Container(
                                        width: 360,
                                        height:300,
                                        // color: Colors.blueGrey,

                                        child: Row(
                                          children: <Widget>[
                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.blue,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'accept',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'socials',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'studying',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),

                                            const SizedBox(
                                              width: 10,
                                            ),

                                            Container(
                                              width: 172,
                                              // color: Colors.yellow,
                                              decoration: BoxDecoration(
                                                color: Colors.white,
                                                borderRadius: BorderRadius.all(Radius.circular(10)),

                                                boxShadow: [
                                                  BoxShadow(
                                                  color: Color.fromRGBO(0, 0, 0, 0.2),
                                                  offset: Offset(1, 1),
                                                  blurRadius: 7,
                                                  spreadRadius: -1,
                                                ),
                                                ],
                                              ),

                                              child: Column(
                                                children: <Widget>[
                                                  Container(
                                                    height: 150,
                                                    width: 360,
                                                    decoration: BoxDecoration(
                                                      // color: Colors.pink,
                                                      borderRadius: BorderRadius.all(Radius.circular(10))
                                                    ),

                                                    child: ClipRRect(
                                                      borderRadius: BorderRadius.circular(10),
                                                      child: Image.asset(
                                                        'assets/pa riki.png',
                                                        fit: BoxFit.cover,
                                                      ),
                                                    ),
                                                  ),

                                                  Container(
                                                    height: 150,
                                                    width: 160,
                                                    // color: Colors.pink,
                                                    child: Column(
                                                      crossAxisAlignment: CrossAxisAlignment.start, // Menentukan penataan horizontal teks
                                                      children: <Widget>[
                                                        const SizedBox(
                                                          height: 5,
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'counseling with',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 12
                                                            ),
                                                          ),
                                                        ),
                                                        Container(
                                                          child: Text(
                                                            'Mr. Ricky Sudrajat',
                                                            textAlign: TextAlign.start,
                                                            style: TextStyle(
                                                              fontFamily: 'poppins',
                                                              fontSize: 17,
                                                              fontWeight: FontWeight.w700
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 3,
                                                        ),

                                                        Container(
                                                          width: 70,
                                                          height: 20,
                                                          decoration: BoxDecoration(
                                                            color: Colors.green,
                                                            borderRadius: BorderRadius.all(Radius.circular(100))
                                                          ),
                                                          child: Center(
                                                            child: Text(
                                                              'waiting',
                                                              textAlign: TextAlign.center,
                                                              style: TextStyle(
                                                                fontFamily: 'poppins',
                                                                fontWeight: FontWeight.w700,
                                                                color: Colors.white,
                                                                fontSize: 12
                                                              ),
                                                            ),
                                                          ),
                                                        ),

                                                        const SizedBox(
                                                          height: 4,
                                                        ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.pink,
                                                                child:  Icon(
                                                                  Icons.calendar_today,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                    
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                                          
                                                              Container(
                                                                // width: 150,
                                                                height: 20,
                                                                // color: Colors.green,
                                                                child: Center(
                                                                  child: Text(
                                                                    '24th August 2023', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        // const SizedBox(
                                                        //   height: 1,
                                                        // ),

                                                        Container(
                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                width: 25,
                                                                height: 20,
                                                                // color: Colors.blue,
                                                                child: Icon(
                                                                  Icons.location_pin,
                                                                  size: 20,
                                                                ),
                                                              ),
                                                                
                                                              const SizedBox(
                                                                width: 6,
                                                              ),
                                                              
                                                              Container(
                                                                // width: 100,
                                                                height: 20,
                                                                // color: Colors.purple,
                                                                child: Center(
                                                                  child: Text(
                                                                    'smk taruna bhakti', 
                                                                    // textAlign: TextAlign.center,
                                                                    style: TextStyle(
                                                                      fontFamily: 'poppins',
                                                                      fontWeight: FontWeight.w700
                                                                    ),
                                                                  ),
                                                                ),
                                                              )
                                                            ],
                                                          ),
                                                        ),
                                                        
                                                        const SizedBox(
                                                          height: 4,
                                                        ),


                                                        Container(
                                                          // width: 10,
                                                          height: 15,
                                                          // color: Colors.yellow,

                                                          child: Row(
                                                            children: <Widget> [
                                                              Container(
                                                                child: Text(
                                                                  'socials',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  '/',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),

                                                              
                                                              const SizedBox(
                                                                width: 2,
                                                              ),
                                                              
                                                              Container(
                                                                child: Text(
                                                                  'social',
                                                                  style: TextStyle(
                                                                    fontFamily: 'poppins',
                                                                    color: const Color.fromARGB(255, 79, 78, 78)
                                                                    // fontWeight: FontWeight.w700
                                                                  ),
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                        )


                                                      ],
                                                    ),
                                                  ),


                                                ]
                                              ),
                                            ),


                                          ],
                                        ),
                                      ),
                                    ),
                                  ),


                                ],
                              ),
                            )


                          ],
                        ),

                        
                    
                      )
                    ],
                  ),
                );
              },
            ),
          ),
        ),
      ),
    );
  }
}
