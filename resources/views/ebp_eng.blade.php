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
    <p style="margin-left: 50px;margin-right: 50px;">The undersigned below:</p>
    <p style="margin-left: 100px;margin-right: 50px;">Name : Edy Suprayitno, S.S., M.Hum.</p>
    <p style="margin-left: 100px;margin-right: 50px;">NIP : 196804271992031001</p>
    <p style="margin-left: 100px;margin-right: 50px;">Position : Head of Library</p>
    <p style="margin-left: 100px;margin-right: 50px;">Address : Kampus ITS Sukolilo</p>
    <p style="margin-left: 50px;margin-right: 50px;">With this letter explains that:</p>
    <p style="margin-left: 100px;margin-right: 50px;">{{ $nama }}</p>
    <p style="margin-left: 100px;margin-right: 50px;">{{ $nrp }}</p>
    <p style="margin-left: 100px;margin-right: 50px;">{{ $dep }}</p>
    <p style="margin-left: 50px;margin-right: 50px;">by our data already fullfilled the requirements for library free:</p>
    <p style="margin-left: 100px;margin-right: 50px;">1. Submit hardcopy and softcopy of FP/Thesis/Disertation</p>
    <p style="margin-left: 100px;margin-right: 50px;">2. Free of Borrowed Books List</p>
    <p style="margin-left: 50px;margin-right: 50px;">at Institut Teknologi Sepuluh Nopember (ITS) Surabaya library.</p>
    <p style="margin-left: 50px;margin-right: 50px;">Hereby this letter is given so that it can be used properly.</p>
    <br>
    <p class="text-right" style="margin-right:190px;">Surabaya,</p>
    <p class="text-right" style="margin-right: 150px;">Head of Library,</p>
    <div class="text-right" style="margin-right: 60px;">
        <img src='img/ttd.jpg' class="img-fluid" style="height:145px; width:200px;"></img>
    </div>
    <p class="text-right" style="margin-right: 60px;">Edy Suprayitno SS., M.Hum.</p>
    <p class="text-right" style="margin-right: 67px;">NIP. 196804271992031001</p>
</body>
</html>