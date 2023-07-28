import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';

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
                              fontWeight: FontWeight.w600,
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
                  Container(
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
                                backgroundImage:
                                    AssetImage("assets/pa riki.png"),
                                radius: 35,
                              ),
                              Container(
                                margin: EdgeInsets.only(left: 15),
                                child: Column(
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Text(
                                      "Mr.Ricky",
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
                                        padding:
                                            const EdgeInsets.only(left: 5.0),
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
                                        padding:
                                            const EdgeInsets.only(left: 5.0),
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
                  Row(
                    children: [
                      Container(
                        margin: EdgeInsets.only(left: 10),
                        child: CircleAvatar(
                          child: Image.asset("assets/sun-tbh.png"),
                          radius: 30,
                          backgroundColor: Color.fromARGB(255, 247, 249, 253),
                        ),
                      ),
                      CircleAvatar(
                        child: Image.asset("assets/sun-tbh.png"),
                        radius: 30,
                        backgroundColor: Color.fromARGB(255, 247, 249, 253),
                      ),
                      CircleAvatar(
                        child: Image.asset("assets/sun-tbh.png"),
                        radius: 30,
                        backgroundColor: Color.fromARGB(255, 247, 249, 253),
                      ),
                      CircleAvatar(
                        child: Image.asset("assets/sun-tbh.png"),
                        radius: 30,
                        backgroundColor: Color.fromARGB(255, 247, 249, 253),
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ],
        ),
        floatingActionButton: Container(
          width: 70,
          height: 70,
          child: FloatingActionButton(
            onPressed: () {},
            child: Icon(Icons.calendar_month_outlined, size: 40),
          ),
        ),
      ),
    );
  }
}
