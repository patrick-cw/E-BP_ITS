@extends('layouts.home_app')

@section('content')
<section class="py-0" id="Beranda">
    <div class="bg-holder d-none d-md-block" style="background-blend-mode: lighten;background-image:url(kp_depan/public/assets/img/illustrations/undraw_Envelope_re_f5j4.png);background-position:right;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container position-relative">
        <div class="row align-items-center min-vh-75 my-lg-8">
        <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
            <h1 class="mb-4 fs-7 display-1 lh-sm">E-Bebas Pustaka ITS</h1>
            <p class="mt-5 mb-3 fs-1 lh-base">Silahkan cek status pemrosesan surat bebas pustaka dibawah ini.
            <br class="d-none d-lg-block" />
            <br class="d-none d-lg-block" /></p>
            <div class="col-md-12">
            <a class="btn btn-lg btn-primary hover-top rounded-1" style="border-radius:50px ;" href="#Status" role="button">Cek Status</a>
            </div>
        </div>
        </div>
    </div>
</section>
@if (Auth::user()->status == 0)
<section class="pt-5" id="Status">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>

        </div>
    </div>
    <div class="row flex center mb-5">
    <ul class="progressbar">
            <li>Aktivasi</li>
            <li>Validasi</li>
            <li>Penyerahan Hard Copy</li>
            <li>Pengecekan Tanggungan</li>
            <li>Menerima Surat BP</li>
        </ul>
    </div>
    <div class="row no-gutters flex-center mb-5">
    <div class="col-lg-8 text-center">
    <div class="card login-card">
        <h4 class="mt-5 mb-3">Aktivasi</h4>
        <p class="mb-5">Akun anda sedang dalam proses aktivasi, mohon menunggu hingga akun anda telah diaktivasi oleh admin.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@elseif(Auth::user()->status == 1)
<section class="pt-5" id="Status">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>

        </div>
    </div>
    <div class="row flex center mb-5">
    <ul class="progressbar">
            <li class="active">Aktivasi</li>
            <li>Validasi</li>
            <li>Penyerahan Hard Copy</li>
            <li>Pengecekan Tanggungan</li>
            <li>Menerima Surat BP</li>
        </ul>
    </div>
    <div class="row no-gutters flex-center mb-5">
    <div class="col-lg-8 text-center">
    <div class="card login-card">
        <h4 class="mt-5 mb-3">Akun Aktif</h4>
        <p class="mb-5">Akun anda telah diaktivasi. Silahkan upload mandiri TA ke repository ITS</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@elseif(Auth::user()->status == 2)
<section class="pt-5" id="Status">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>

        </div>
    </div>
    <div class="row flex center mb-5">
    <ul class="progressbar">
            <li class="active">Aktivasi</li>
            <li class="active">Validasi</li>
            <li>Penyerahan Hard Copy</li>
            <li>Pengecekan Tanggungan</li>
            <li>Menerima Surat BP</li>
        </ul>
    </div>
    <div class="row no-gutters flex-center mb-5">
    <div class="col-lg-8 text-center">
    <div class="card login-card">
        <h4 class="mt-5 mb-3">Validasi</h4>
        <p class="mb-5">Data yang telah anda upload telah divalidasi. Lakukan pencetakan hardcopy TA dan kirim ke perpustakaan</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
@elseif(Auth::user()->status == 3)
<section class="pt-5" id="Status">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>

        </div>
    </div>
    <div class="row flex center mb-5">
    <ul class="progressbar">
            <li class="active">Aktivasi</li>
            <li class="active">Validasi</li>
            <li class="active">Penyerahan Hard Copy</li>
            <li>Pengecekan Tanggungan</li>
            <li>Menerima Surat BP</li>
        </ul>
    </div>
    <div class="row no-gutters flex-center mb-5">
    <div class="col-lg-8 text-center">
    <div class="card login-card">
        <h4 class="mt-5 mb-3">Hard Copy Diterima</h4>
        <p class="mb-5">Hard Copy sudah diterima perpustakaan. Pengecekan buku yang masih belum dikembalikan sedang dilakukan</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

@elseif(Auth::user()->status == 4)
<section class="pt-5" id="Status">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>

        </div>
    </div>
    <div class="row flex center mb-5">
    <ul class="progressbar">
            <li class="active">Aktivasi</li>
            <li class="active">Validasi</li>
            <li class="active">Penyerahan Hard Copy</li>
            <li class="active">Pengecekan Tanggungan</li>
            <li class="active">Menerima Surat BP</li>
        </ul>
    </div>
    <div class="row no-gutters flex-center mb-5">
    <div class="col-lg-8 text-center">
    <div class="card login-card">
        <h4 class="mt-5 mb-3">Menerima Surat Bebas Pustaka</h4>
        <p class="mb-5">Surat Bebas Pustaka sudah dapat didownload.</p>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>

<section class="pt-5" id="Download">
    <div class="container">
    <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Download</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

        <p class="mx-auto">Sebelum melakukan download, pilih bahasa surat yang diinginkan.</p>

        <select class="form-select"  name="bahasa" id="floatingSelect"style="height: 70px" aria-label="Floating label select example" required>
        <option value='createWord/ind' >Bahasa Indonesia</option>
        <option value="createWord/eng" >English</option>
        </select>      
        <br>      
        <button class="btn btn-lg btn-primary hover-top rounded-1" style="border-radius:50px ;" id="btn">Download</button>
        </div>
        <script type = "text/javascript">
        var urlmenu = document.getElementById('floatingSelect');
        var btn = document.getElementById("btn");
        
        // Set up a click event handling function for the button 
        btn.addEventListener("click", function() {
            // Confirmation of action for testing
            console.log("Navigating to:" + urlmenu.value);
            
            // Open new window with correct URL
            window.open( urlmenu.value );
        });
        </script>
    </div>
    </div>
</section>
@endif

@endsection
