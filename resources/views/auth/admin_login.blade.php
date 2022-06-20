<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>E-Bebas Pustaka ITS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/kp_depan/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/kp_depan/public/assets/img/favicons/favicon.ico">

    <link rel="manifest" href="/kp_depan/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/kp_depan/public/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="/kp_depan/public/vendors/plyr/plyr.css">
    <link rel="stylesheet" href="/kp_depan/public/assets/css/theme.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
    </script>
  </head>
  
  
  <body>
    @include('sweetalert::alert')
   <section class="py-0" id="Beranda">
  <div class="bg-holder d-none d-md-block pl-3" style="background-image:url(/kp_depan/public/assets/img/illustrations/undraw_Envelope_re_f5j4.png);
    background-position-x:6vw; background-position-y:5vh; background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 justify-content-end mt-6">
      <div class="col-md-7 col-lg-6 text-center text-md-start px-6">
        <h1 class="mb-4 fs-5 display-1 lh-sm">Masuk ke akun anda</h1>
        {{-- Form Container --}}
        <div class="">
          <form action="/admin/login" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-floating mb-4 flex-center">
                <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                <label for="floatingInput">Email</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>  
              <div class="form-floating mb-5 flex-center">
                <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                <label for="floatingInput">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary hover-top rounded-1">Masuk</button>
              </div>
          </form>

        </div>

      </div>
    </div>
  </div>

</section>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @yield('content')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    {{-- <script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script> --}}
    <script src="{{asset('kp_depan')}}/public/vendors/@popperjs/popper.min.js"></script>
    <script src="{{asset('kp_depan')}}/public/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset('kp_depan')}}/public/assets/js/activelink.js"></script>
    <script src="{{asset('kp_depan')}}/public/assets/js/theme.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>