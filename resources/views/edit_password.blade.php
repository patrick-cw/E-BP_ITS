@extends('layouts.home_app')

@section('content')
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="kp_depan/public/assets/css/theme.css" rel="stylesheet" />
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container" style="padding-top:70px;padding-bottom:70px;">
            <div class="card login-card">
                <div class="row no-gutters">
                    <!-- <div class="col-md-6">
                        <img src="kp_depan/public/assets/img/illustrations/undraw_Envelope_re_f5j4.png" alt="login" class="login-card-img">
                    </div> -->
                    <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-12">
                        <div class="card-body">
                        <p class="ps-2 mt-3 text-center" style="font-size: xx-large;">Ubah Password</p>
                      <p class="ps-2 mt-3 text-center text-black" style="font-size: small">Masukkan Password baru untuk Akun anda!</p>
                          <form method="POST" enctype="multipart/form-data" action="{{ route('edit_password_approve',$mhs->id) }}">
                          @method('patch')
                            @csrf
                              <div class="form-floating mb-3 flex-center">
                                <input type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                <label for="floatingInput">Password</label>
                                @error('password')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-floating mb-3 flex-center">
                                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                <label for="floatingInput">Konfirmasi Password</label>
                                @error('password_confirmation')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary hover-top rounded-1">
                                      Submit
                                  </button>
                              </div>
                              
                          </form>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>

      </main>
@endsection
