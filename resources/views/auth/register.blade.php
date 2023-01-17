@extends('layouts.user_type.guest')

@section('content')

  <section class="min-vh-100 mb-auto">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Selamat datang!</h1>
            <p class="text-lead text-white">Ini merupakan halaman Register silahkan daftarkan diri anda</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4 pb-0">
              <h3>Registrasi disini</h3>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
              
  
            </div>
            <div class="card-body">
              <form role="form text-left" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" id="username" aria-label="Name" aria-describedby="username" value="{{ old('username') }}" required autocomplete="username">
                  @error('username')
                      <span class="text-danger text-xs mt-2" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                {{-- <div class="mb-3">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}" required autocomplete="name">
                  @error('name')
                      <span class="text-danger text-xs mt-2" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div> --}}
                <div class="mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                      <span class="text-danger text-xs mt-2" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" aria-label="Password" aria-describedby="password-addon" required autocomplete="new-password">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="password-confirm" name="password_confirmation" id="password-confirm" aria-label="password-confirm" aria-describedby="password-addon" required autocomplete="new-password">
                  @error('password-confirm')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" name="agreement" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    Saya menyetujui <a href="javascript:;" class="text-dark font-weight-bolder">Syarat dan Ketentuan</a>
                  </label>
                  @error('agreement')
                    <p class="text-danger text-xs mt-2">Setuju isyarat dan ketentuan, Lalu register kembali</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">{{ __('Register') }}</button>
                </div>
                <p class="text-sm mt-3 mb-0">Jika telah mendaftar silahkan <a href="login" class="text-dark font-weight-bolder">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

