<!DOCTYPE html>
<html>

<head>
    <title>Surat Pemanggilan Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .title {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .content {
            margin-bottom: 20px;
        }

        .footer {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="title">Perihal: Undangan</div>
    </div>
    <div class="content">
        <div class="kotak1" style="height: 110px;">
            <p>Kepada,</p>
            <p style="left: 50px;position: absolute; top: 80px;">Tth. Bapak/Ibu Orang Tua/Wali Siswa <br> {{ $siswa->nama }} <br> {{ $siswa->kelasid->nama }} <br> di Tempat</p>
        </div>

        <p>Dengan Hormat,</p>

        <p>Sehubungan dengan adanya sesuatu yang perlu disampaikan kepada Bapak/Ibu,Maka kami mengundang Bapak/Ibuk untuk hadir ke ruangan saya {{ $siswa->kelasid->guru->nama }} Besok seusai pulang sekolah</p>
        <ul style="list-style-type: decimal;">
            <li>Mohon datang dengan membawa Materai 10.000</li>
            <li>Datang dengan kemeja batik</li>
            <li>Datang harus bersama dengan Anak nya</li>
        </ul>

        <p>Mohon kehadiran Anda tepat waktu dan mempersiapkan segala sesuatu yang diperlukan.</p>

        <p>Terima kasih atas perhatian dan kerjasamanya.</p>

        <p>Salam,</p>
        <p> Guru BK {{ $siswa->kelasid->nama }}</p>
    </div>

    <div class="footer">
        Tanda tangan <br><br><br><br><br>{{ $siswa->kelasid->guru->nama }}
    </div>
</body>

</html>