@extends('layouts.app')

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
                        <p class="ps-2 mt-3 text-center" style="font-size: xx-large;">Reset Password</p>
                      <p class="ps-2 mt-3 text-center text-black" style="font-size: small">Masukkan Password baru untuk Akun anda!</p>
                      <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
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
