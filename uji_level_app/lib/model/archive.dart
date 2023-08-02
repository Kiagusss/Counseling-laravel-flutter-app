import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;
import 'package:uji_level_app/screens/auth/logins.dart';

class Archive{
  late String nama_guru;
  late String status;
  late String? judul;
  late String jadwal_konseling;
}

Future<List<Archive>> fetchDataKonseling() async{
  List<Archive> archives = [];
   SharedPreferences prefs = await SharedPreferences.getInstance();
  int userId = prefs.getInt('id') ?? -1; // Mengembalikan -1 jika tidak ditemukan

  String apiURL = "http://robert-lycos.gl.at.ply.gg:12448/api/index/$userId";

  var result = await http.get(Uri.parse(apiURL));


  if (result.statusCode == 200) {

    var dataJson = json.decode(result.body)['data'];

    print(dataJson);

    for(var item in dataJson){
    Archive archive = Archive();

    // archive.judul = item['judul'];
    archive.nama_guru = item['nama_guru'];
    archive.status = item['status'];
    archive.judul = item['judul'];
    archive.jadwal_konseling = item['jadwal_konseling'];

    archives.add(archive);
  }
  }else{
    print(result.statusCode);
    print(userId);
  }

  

  return archives;

}
