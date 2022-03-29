<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">

  <!--begin::Head-->
  <title>Log Masuk Client | Digstry</title>

  <!-- Vendor -->
  <link rel="stylesheet" href="{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/page-auth.css') }}" />

  @include('client.layouts.header')
  
  <!--end::Head-->

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ url('/') }}" class="app-brand-link gap-2 gap-2">
                  <span class="app-brand-logo demo">
                    <img src="img/branding/logo.svg" title="Digstry" width="26" width="26px"/> 
                  </span>
                  <span class="app-brand-text demo menu-text fw-bold">Digstry</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Selamat Datang Ke Digstry! 👋</h4>
              <p class="mb-4">Sila Log Masuk ke akaun anda dan mulakan pengembaraannya</p>

              @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert"></button>
                  <strong>{{ $message }}</strong>
                </div>
              @endif 


              <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="email" class="form-label">Nama Pengguna</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Masukkan nama pengguna anda"
                    autofocus
                  />
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="form-password-toggle mb-3">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Kata Laluan</label>
                    <a href="{{ url('/forgotPassword') }}">
                      <small>Terlupa Kata Laluan?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="fad fa-eye-slash"></i></span>
                  </div>
                  @if ($errors->has('password'))
                      <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
                {{-- <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ingat Saya </label>
                  </div>
                </div> --}}
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Log Masuk</button>
                </div>
              </form>

              <p class="text-center">
                <span>Pertama kali di sini?</span>
                <a href="{{ url('/register2') }}">
                  <span>Cipta akaun</span>
                </a>
                <span> baharu sekarang.</span>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- script -->
    <!-- Vendors JS -->
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/pages-auth.js') }}"></script>

    @include('client.layouts.script')
    
    <!-- / script -->
  </body>
</html>
