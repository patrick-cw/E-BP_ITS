<!DOCTYPE html>
<html>
<head>
    <title>Surat Bebas Pustaka</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @page {
    size: 21cm 29.7cm;
    }
    html {
        margin: 0;
    }
    body {
        margin: 30px;
    }
    body, h1, h2, h3, h4, h5, h6, table, th, tr, td, div {
        line-height: 1;
    }
</style>
<body>
    <div class="text-center">
        <img src='img/header.png' class="img-fluid"></img>
    </div>
    <br>
    <h2 class="text-center">{{ $title }}</h2>
    <p class="text-center">{{ $no }}</p>
    <br>
    <p style="margin-left: 60px;margin-right: 60px;">Yang bertanda tangan dibawah ini:</p>
    <p style="margin-left: 100px;margin-right: 60px;">Nama : Edy Suprayitno, S.S., M.Hum.</p>
    <p style="margin-left: 100px;margin-right: 60px;">NIP : 196804271992031001</p>
    <p style="margin-left: 100px;margin-right: 60px;">Jabatan : Kepala Perpustakaan</p>
    <p style="margin-left: 100px;margin-right: 60px;">Alamat : Kampus ITS Sukolilo</p>
    <p style="margin-left: 60px;margin-right: 60px;">Dengan ini menerangkan bahwa:</p>
    <p style="margin-left: 100px;margin-right: 60px;">{{ $nama }}</p>
    <p style="margin-left: 100px;margin-right: 60px;">{{ $nrp }}</p>
    <p style="margin-left: 100px;margin-right: 60px;">{{ $dep }}</p>
    <p style="margin-left: 60px;margin-right: 60px;">berdasarkan data kami, sudah memenuhi persyaratan Bebas Pustaka:</p>
    <p style="margin-left: 100px;margin-right: 60px;">1. Menyerahkan Hardcopy dan Softcopy TA/Tesis/Disertasi</p>
    <p style="margin-left: 100px;margin-right: 60px;">2. Bebas Tanggungan Pinjaman Koleksi dan Administrasi</p>
    <p style="margin-left: 60px;margin-right: 60px;">di Perpustakaan Institut Teknologi Sepuluh Nopember (ITS) Surabaya.</p>
    <p style="margin-left: 60px;margin-right: 60px;">Demikian surat keterangan ini diberikan untuk dapat dipergunakan sebagaimana mestinya.</p>
    <br>
    <p class="text-right" style="margin-right:190px;">Surabaya,</p>
    <p class="text-right" style="margin-right: 105px;">Kepala Perpustakaan,</p>
    <div class="text-right" style="margin-right: 60px;">
        <img src='img/ttd.jpg' class="img-fluid" style="height:145px; width:200px;"></img>
    </div>
    <p class="text-right" style="margin-right: 60px;">Edy Suprayitno SS., M.Hum.</p>
    <p class="text-right" style="margin-right: 67px;">NIP. 196804271992031001</p>
</body>
</html>