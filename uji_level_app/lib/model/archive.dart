import 'dart:convert';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:http/http.dart' as http;

class Archive{
  late String nama_guru;
  late String status;
  late String judul;
  late String jadwal_konseling;
}

Future<List<Archive>> fetchDataKonseling() async{
  List<Archive> archives = [];
  SharedPreferences sp = await SharedPreferences.getInstance();

  int? id = sp.getInt('user_id') ?? 1;

  String apiURL = "http://thank-netherlands.at.ply.gg:44745/api/index/$id";

  var result = await http.get(Uri.parse(apiURL));
  var dataJson = json.decode(result.body)['data'];

  print(dataJson);

  for(var item in dataJson){
    Archive archive = Archive();

    // archive.judul = item['judul'];
    archive.nama_guru = item['nama_guru'];
    archive.status = item['status'];
    archive.jadwal_konseling = item['jadwal_konseling'];

    archives.add(archive);
  }

  return archives;

}
