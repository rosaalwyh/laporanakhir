<!DOCTYPE html>
<html>
<head>
    <title>Surat Balasan Pengajuan PKL</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <p>Berikut surat balasan pengajuan praktik kerja lapangan yang anda ajukan</p>
    <p>Anda dapat melakukan login ke sistem menggunakan akun yang telah didaftarkan!</p>
    <p> Nomor surat balasan : {{$details['no_surat_balasan']}}</p>
    <p>Lampiran surat Balasan : {{$details['surat_balasan']}}</p>
    <p>Thank you</p>
</body>
</html>