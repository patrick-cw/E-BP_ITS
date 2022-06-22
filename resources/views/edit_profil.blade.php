
@extends('layouts.home_app')
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="kp_depan/public/assets/css/theme.css" rel="stylesheet" />

@section('content')
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
                        <p class="ps-2 mt-3 text-center" style="font-size: xx-large;">Edit Profil</p>
                          <form method="POST" enctype="multipart/form-data" action="{{ route('edit_profil_approve',$mhs->id) }}">
                          @method('patch')
                            @csrf
                              <div class="form-floating mb-3 flex-center">
                                <input type="text" name="nama" value="{{ old('nama', $mhs->nama) }}" class="form-control @error('nama') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                <label for="floatingInput">Nama Lengkap</label>
                                @error('nama')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                              </div> 
                              <div class="form-floating mb-3 flex-center">
                                <input type="text" name="nrp" value="{{ old('nrp', $mhs->nrp) }}" class="form-control @error('nrp') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                <label for="floatingInput">NRP</label>
                                @error('nrp')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                              </div>
                              <div class="form-floating mb-3 flex-center">
                                  <input type="text" name="email" value="{{ old('email', $mhs->email) }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                  <label for="floatingInput">E-mail</label>
                                  @error('email')
                                      <div class="invalid-feedback">
                                      {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-floating mb-3 flex-center">
                                  <input type="text" name="telp" value="{{ old('telp', $mhs->telp) }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                  <label for="floatingInput">Nomor Telepon (WhatsApp)</label>
                                  @error('email')
                                      <div class="invalid-feedback">
                                      {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              
                              <div class="form-floating mb-3 flex-center">
                                  <select class="form-select @error('jenjang') is-invalid @enderror" name="jenjang"  id="floatingSelect"style="height: 70px" aria-label="Floating label select example" required>
                                    <option value= >Pilih Salah Satu</option>
                                    <option value="D3" {{ old('jenjang', $mhs->jenjang) == 'D3' ? 'selected': ''}}>D3</option>
                                    <option value="D4" {{ old('jenjang', $mhs->jenjang) == 'D4' ? 'selected': ''}}>D4</option>
                                    <option value="S1" {{ old('jenjang', $mhs->jenjang) == 'S1' ? 'selected': ''}}>S1</option>
                                    <option value="S2" {{ old('jenjang', $mhs->jenjang) == 'S2' ? 'selected': ''}}>S2</option>
                                    <option value="S3" {{ old('jenjang', $mhs->jenjang) == 'S3' ? 'selected': ''}}>S3</option>
                                    
                                  </select>
                                  <label for="floatingSelect">Jenjang</label>
                                  @error('jenjang')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                             
                              <div class="form-floating mb-3 flex-center">
                                <select class="form-select @error('fakultas') is-invalid @enderror" name="fakultas" value="{{ old('fakultas', $mhs->fakultas) }}" id="floatingSelect"style="height: 70px" aria-label="Floating label select example" required>
                                  <option value= >Pilih Salah Satu</option>
                                  <option value="Fakultas Sains dan Analitika Data"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Sains dan Analitika Data' ? 'selected': ''}}>Fakultas Sains dan Analitika Data</option>
                                  <option value="Fakultas Teknologi Industri dan Rekayasa Sistem"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Teknologi Industri dan Rekayasa Sistem' ? 'selected': ''}}>Fakultas Teknologi Industri dan Rekayasa Sistem</option>
                                  <option value="Fakultas Teknik Sipil, Perencanaan, dan Kebumian"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Teknik Sipil, Perencanaan, dan Kebumian' ? 'selected': ''}}>Fakultas Teknik Sipil, Perencanaan, dan Kebumian</option>
                                  <option value="Fakultas Teknologi Kelautan"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Teknologi Kelautan' ? 'selected': ''}}>Fakultas Teknologi Kelautan</option>
                                  <option value="Fakultas Teknologi Elektro dan Informatika Cerdas"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Teknologi Elektro dan Informatika Cerdas' ? 'selected': ''}}>Fakultas Teknologi Elektro dan Informatika Cerdas</option>
                                  <option value="Fakultas Desain Kreatif da Bisnis Digital"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Desain Kreatif da Bisnis Digital' ? 'selected': ''}}>Fakultas Desain Kreatif da Bisnis Digital</option>
                                  <option value="Fakultas Vokasi"  {{ old('fakultas', $mhs->fakultas) == 'Fakultas Vokasi' ? 'selected': ''}}>Fakultas Vokasi</option>
                                </select>
                                <label for="floatingSelect">Fakultas</label>
                                  @error('fakultas')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                              <div class="form-floating mb-3 flex-center">
                                  <input type="text" name="departemen" value="{{ old('departemen', $mhs->departemen) }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                  <label for="floatingInput">Departemen</label>
                                  @error('email')
                                      <div class="invalid-feedback">
                                      {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <div class="form-floating mb-3 flex-center">
                                  <input type="text" name="judulTA" value="{{ old('judulTA', $mhs->judulTA) }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder=" " required >
                                  <label for="floatingInput">Judul TA</label>
                                  @error('email')
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
