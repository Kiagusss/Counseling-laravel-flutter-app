<!DOCTYPE html>
<html>

<head>
    <title>Surat Pemanggilan</title>
</head>

<body>
    <h2>SURAT PEMANGGILAN</h2>
    <p>Nama: {{ $siswa->nama }}</p>
    <p>Kelas: {{ $siswa->kelasid->nama }}</p>
    <p>Guru BK: {{ $siswa->kelasid->guru->nama }}</p>
    <br><br>
    <p>
        Saya {{ $siswa->kelasid->guru->nama }} memangil Orang tua dari siswa/siswi {{ $siswa->nama }} di karenakan siswa/siswi telah melanggar aturan sekolah dan berpotensi merusak nama baik sekolah
    </p>
</body>

</html>