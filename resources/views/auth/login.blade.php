@extends('layouts.user_type.guest')

@section('content')

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">{{ __('Login') }}
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat datang di Kamar kita</h3>
                  
                  <p class="mb-0">Silahkan login </p>
                  <p class="mb-0">untuk bisa menikmati malam di kamar kita</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>{{ __('Username') }}</label>
                    <div class="mb-3">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" aria-label="Username" aria-describedby="username-addon"  name="username" value="{{ old('username') }}" required autocomplete="username">
                      @error('username')
                        <span class="text-danger text-xs mt-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <label>{{ __('Password') }}</label>
                    <div class="mb-3">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required autocomplete="current-password">
                      @error('password')
                          <span class="text-danger text-xs mt-2" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Login') }}</button>
                      
                      @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                      @endif
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Anda belum memiliki akun?
                    <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection
