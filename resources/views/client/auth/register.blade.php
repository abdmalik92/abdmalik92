<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">

  <!--begin::Head-->
  <title>Daftar Client | Digstry</title>

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
          <!-- Register Card -->
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
              <h4 class="mb-2">Pengembaraan bermula disini 🚀</h4>
              <p class="mb-4">Jadikan kerja anda lebih mudah dan menyeronokkan!</p>

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
                  @php
                      Session::forget('success');
                  @endphp
              </div>
              @endif

              {{-- <form id="formAuthentication" class="mb-3" action="index.html" method="POST"> --}}
              <form method="POST" action="{{ route('daftar') }}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="username" class="form-label">Nama Pengguna</label>
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
                <div class="mb-3">
                  <label for="email" class="form-label">Emel</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan emel anda" />
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="form-password-toggle mb-3">
                  <label class="form-label" for="password">Kata Laluan</label>
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

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      Saya bersetuju dengan
                      <a href="javascript:void(0);">terma & syarat privasi</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit" >Daftar</button>
              </form>

              <p class="text-center">
                <span>Sudah ada akaun?</span>
                <a href="{{ url('/login') }}">
                  <span>Log Masuk di sini</span>
                </a>
              </p>

              <!-- <div class="divider my-4">
                <div class="divider-text">or</div>
              </div> -->

              <!-- <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                  <i class="tf-icons bx bxl-facebook"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                  <i class="tf-icons bx bxl-google-plus"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                  <i class="tf-icons bx bxl-twitter"></i>
                </a>
              </div> -->
            </div>
          </div>
          <!-- Register Card -->
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
