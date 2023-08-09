import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:uji_level_app/layanan/form.dart';
import 'package:uji_level_app/layanan/index.dart';
import 'model/archive.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;

// class HomePage extends StatefulWidget {
//   const HomePage({super.key});

//   @override
//   State<HomePage> createState() => _HomePageState();
// }

// class _HomePageState extends State<HomePage> {

//   //   String _nama = '';
//   // String _nisn = '';
//   // String _kelas = '';
//   // String _namaWalas = '';
//   // String _namaGuru = '';

//   @override
//    void initState() {
//     super.initState();
//     fetchData();
//   }

//   @override
//   void dispose() {
//     super.dispose();
//   }

//   void fetchData() async {
//     SharedPreferences preferences = await SharedPreferences.getInstance();
//     String? token = preferences.getString('token');

//     var response = await http.get(
//       Uri.parse('http://metal-knife.gl.at.ply.gg:7437/api/user'),
//       headers: {'Authorization': 'Bearer $token'},
//     );

//     if (response.statusCode == 200) {
//       var userData = jsonDecode(response.body);

//       // if (mounted) {
//       //   setState(() {
//       //     _nama = userData['nama'];
//       //     _nisn = userData['nisn'];
//       //     _kelas = userData['kelas'];
//       //     _namaWalas = userData['nama_walas'];
//       //     _namaGuru = userData['nama_guru'];
//       //     });
//       // }
//     }
//   }
//   Widget build(BuildContext context) {
//     return Scaffold(
//       body: FutureBuilder<List<Archive>>(
//         future: fetchDataKonseling(),
//         builder: (context, snapshot) {
//           if (snapshot.connectionState == ConnectionState.waiting) {
//             return Center(child: CircularProgressIndicator());
//           } else if (snapshot.hasError) {
//             return Center(child: Text('Error: ${snapshot.error}'));
//           } else {
//             List<Archive> archives = snapshot.data ?? [];
//             print(archives);
//             return ListView.builder(
//               itemCount: archives.length,
//               itemBuilder: (context, index) {
//                 Archive archive = archives[index];
//                 return ListView(
//             children: [
//             Container(
//               margin: EdgeInsets.all(25),
//               child: Column(
//                 children: [
//                   Row(
//                     mainAxisAlignment: MainAxisAlignment.spaceBetween,
//                     children: [
//                       Column(
//                         crossAxisAlignment: CrossAxisAlignment.start,
//                         children: [
//                           Text(
//                             "Hello,",
//                             style: GoogleFonts.poppins(
//                                 fontSize: 20,
//                                 fontWeight: FontWeight.w400,
//                                 color: Color(0xff8696BB)),
//                           ),
//                           Text(
//                             "Hi James",
//                             style: GoogleFonts.poppins(
//                               fontSize: 25,
//                               fontWeight: FontWeight.w400,
//                             ),
//                           ),
//                         ],
//                       ),
//                       CircleAvatar(
//                         backgroundImage: AssetImage("assets/pa riki.png"),
//                         radius: 40,
//                       ),
//                     ],
//                   ),
//                   Container(
//                     margin: EdgeInsets.only(top: 50),
//                     width: 330,
//                     height: 180,
//                     decoration: BoxDecoration(
//                       color: Color(
//                           0xff4894FE),
//                       borderRadius: BorderRadius.circular(
//                           10),
//                     ),
//                     child: Container(
//                       margin: EdgeInsets.all(20),
//                       child: Column(
//                         children: [
//                           Row(
//                             crossAxisAlignment: CrossAxisAlignment.start,
//                             children: [
//                             CircleAvatar(
//                               backgroundImage: AssetImage("assets/pa riki.png"),
//                               radius: 35,
//                             ),
//                             Container(
//                               margin: EdgeInsets.only(left: 15),
//                               child: Column(
//                                 crossAxisAlignment: CrossAxisAlignment.start,
//                                 children: [
//                                   Text(archive.nama_guru, style: GoogleFonts.poppins(
//                                 color: Colors.white,
//                                 fontSize: 20,
//                                 fontWeight: FontWeight.w800
//                               ),),
//                               Text("General Teacher", style: GoogleFonts.poppins(
//                                 color: Colors.white,
//                                 fontSize: 15,
//                                 fontWeight: FontWeight.w400
//                               ),),
//                                 ],
//                               ),

//                             ),
//                             Container(
//                               margin: EdgeInsets.only(left: 20, top: 12),
//                               child: Icon(Icons.arrow_forward_ios, color: Colors.white, size: 30,),
//                             ),
//                           ],),
//                           Container(
//                             margin: EdgeInsets.only(top: 20),
//                             height: 1,
//                             width: 300,
//                             color: Colors.white30,
//                           ),
//                           Container(
//                             margin: EdgeInsets.only(top: 20),
//                             child: Row(
//                               children: [
//                                 Container(
//                                   child: Row(
//                                     children: [
//                                       Icon(Icons.calendar_month_outlined, color: Colors.white,),
//                                       Padding(
//                                         padding: const EdgeInsets.only(left:5.0),
//                                         child: Text("Sunday, 12 June", style: GoogleFonts.poppins(
//                                           color: Colors.white,
//                                           fontWeight: FontWeight.w500,
//                                           fontSize: 12
//                                         ),),
//                                       )
//                                     ],
//                                   ),
//                                 ),
//                                 Container(
//                                   margin: EdgeInsets.only(left: 40),
//                                   child: Row(
//                                     children: [
//                                       Icon(Icons.access_time_filled_rounded, color: Colors.white,),
//                                       Padding(
//                                         padding: const EdgeInsets.only(left:5.0),
//                                         child: Text("10:00 - 12:00", style: GoogleFonts.poppins(
//                                           color: Colors.white,
//                                           fontSize: 12,
//                                           fontWeight: FontWeight.w500
//                                         ),),
//                                       )
//                                     ],
//                                   ),
//                                 ),
//                               ],
//                             ),
//                           ),

//                         ],
//                       ),
//                     ),
//                   ),
//                   Container(
//                     margin: EdgeInsets.only(top: 20),
//                     width: 320,
//                     child: TextFormField(

//                       decoration: InputDecoration(
//                         hintText: "Search Anything Here!",
//                         prefixIcon: Icon(Icons.search_rounded, size: 30,),
//                          focusColor: Color(0xff4894FE),
//                             filled: true,
//                             fillColor: Color.fromARGB(255, 247, 249, 253),
//                         border: OutlineInputBorder(
//                           borderSide: BorderSide.none,
//                         )
//                       ),
//                     ),
//                   )
//                 ],
//               ),
//             ),
//           ],
//         );
//               },
//             );
//           }
//         },
//       ),
//     );
//   }
// }

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
          body: ListView(
        children: [
          Container(
            margin: EdgeInsets.all(25),
            child: Column(
              children: [
                Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: [
                    Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(
                          "Hello,",
                          style: GoogleFonts.poppins(
                              fontSize: 20,
                              fontWeight: FontWeight.w400,
                              color: Color(0xff8696BB)),
                        ),
                        Text(
                          "Hi James",
                          style: GoogleFonts.poppins(
                            fontSize: 25,
                            fontWeight: FontWeight.w400,
                          ),
                        ),
                      ],
                    ),
                    CircleAvatar(
                      backgroundImage: AssetImage("assets/pa riki.png"),
                      radius: 40,
                    ),
                  ],
                ),
                GestureDetector(
                  onTap: (){
                    Navigator.push(context, MaterialPageRoute(builder: (context)=> IndexLayanan()));
                  },
                  child: Container(
                    margin: EdgeInsets.only(top: 50),
                    width: 330,
                    height: 180,
                    decoration: BoxDecoration(
                      color: Color(0xff4894FE),
                      borderRadius: BorderRadius.circular(10),
                    ),
                    child: Container(
                      margin: EdgeInsets.all(20),
                      child: Column(
                        children: [
                          Row(
                            crossAxisAlignment: CrossAxisAlignment.start,
                            children: [
                              CircleAvatar(
                                backgroundImage: AssetImage("assets/pa riki.png"),
                                radius: 35,
                              ),
                              Container(
                                margin: EdgeInsets.only(left: 15),
                                child: Column(
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(
                                      "guru",
                                      style: GoogleFonts.poppins(
                                          color: Colors.white,
                                          fontSize: 20,
                                          fontWeight: FontWeight.w800),
                                    ),
                                    Text(
                                      "General Teacher",
                                      style: GoogleFonts.poppins(
                                          color: Colors.white,
                                          fontSize: 15,
                                          fontWeight: FontWeight.w400),
                                    ),
                                  ],
                                ),
                              ),
                              Container(
                                margin: EdgeInsets.only(left: 20, top: 12),
                                child: Icon(
                                  Icons.arrow_forward_ios,
                                  color: Colors.white,
                                  size: 30,
                                ),
                              ),
                            ],
                          ),
                          Container(
                            margin: EdgeInsets.only(top: 20),
                            height: 1,
                            width: 300,
                            color: Colors.white30,
                          ),
                          Container(
                            margin: EdgeInsets.only(top: 20),
                            child: Row(
                              children: [
                                Container(
                                  child: Row(
                                    children: [
                                      Icon(
                                        Icons.calendar_month_outlined,
                                        color: Colors.white,
                                      ),
                                      Padding(
                                        padding: const EdgeInsets.only(left: 5.0),
                                        child: Text(
                                          "Sunday, 12 June",
                                          style: GoogleFonts.poppins(
                                              color: Colors.white,
                                              fontWeight: FontWeight.w500,
                                              fontSize: 12),
                                        ),
                                      )
                                    ],
                                  ),
                                ),
                                Container(
                                  margin: EdgeInsets.only(left: 40),
                                  child: Row(
                                    children: [
                                      Icon(
                                        Icons.access_time_filled_rounded,
                                        color: Colors.white,
                                      ),
                                      Padding(
                                        padding: const EdgeInsets.only(left: 5.0),
                                        child: Text(
                                          "10:00 - 12:00",
                                          style: GoogleFonts.poppins(
                                              color: Colors.white,
                                              fontSize: 12,
                                              fontWeight: FontWeight.w500),
                                        ),
                                      )
                                    ],
                                  ),
                                ),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
                Container(
                  margin: EdgeInsets.only(top: 20),
                  width: 320,
                  child: TextFormField(
                    decoration: InputDecoration(
                        hintText: "Search Anything Here!",
                        prefixIcon: Icon(
                          Icons.search_rounded,
                          size: 30,
                        ),
                        focusColor: Color(0xff4894FE),
                        filled: true,
                        fillColor: Color.fromARGB(255, 247, 249, 253),
                        border: OutlineInputBorder(
                          borderSide: BorderSide.none,
                        )),
                  ),
                ),
                Container(
                  margin: EdgeInsets.only(top: 15, left: 20, right: 20),
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.center,
                    children: [
                    Column(
                      children: [
                        Image.asset("assets/sun-tbh.png"),
                        Text("Diagnose", style: GoogleFonts.poppins(
                          fontWeight: FontWeight.w400,
                          color: Color(0xff8696BB),
                        ),)
                      ],
                    ),
                     Spacer(),
                    Column(
                      children: [
                        Image.asset("assets/profile-add.png"),
                        Text("Counselor", style: GoogleFonts.poppins(
                          fontWeight: FontWeight.w400,
                          color: Color(0xff8696BB),
                        ),)
                      ],
                    ),
                    Spacer(),
                    Column(
                      children: [
                        Image.asset("assets/link.png"),
                        Text("Medicine", style: GoogleFonts.poppins(
                          fontWeight: FontWeight.w400,
                          color: Color(0xff8696BB),
                        ),)
                      ],
                    ),
                     Spacer(),
                    Column(
                      children: [
                        Image.asset("assets/hospital.png"),
                        Text("Place", style: GoogleFonts.poppins(
                          fontWeight: FontWeight.w400,
                          color: Color(0xff8696BB),
                        ),)
                      ],
                    ),
                  ]),
                ),
               
              ],
            ),
            
          ),
           Container(
            margin: EdgeInsets.only( left: 35),
             child: Text("Your Counselor", style: GoogleFonts.poppins(
                    fontSize: 22,
                    fontWeight: FontWeight.w600,
                  ),),
           ),
           Container(
            margin: EdgeInsets.only( left: 40, top: 20),
            child: Column(
              children: [
                Row(
                  children: [
                    CircleAvatar(
                      backgroundImage: AssetImage("assets/pa riki.png"),
                      radius: 25,
                    ),
                    Container(
                      margin: EdgeInsets.only(left: 10),
                      child: Column(
                       crossAxisAlignment: CrossAxisAlignment.start,
                        children: [
                          Text("Guru", style: GoogleFonts.poppins(
                            fontSize: 20,
                            fontWeight: FontWeight.w700
                          ),),
                          Text("General Teacher"),
                        ],
                      ),
                    )

                  ],
                )
              ],
            ),
           )
        ],
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {
            Navigator.push(context, MaterialPageRoute(builder: (context) => FormLayanan()));
        },
      child: Icon(Icons.calendar_month_outlined),

      ),
      
      ),
    );
  }
}
