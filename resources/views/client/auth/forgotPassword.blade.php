<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">

  <!--begin::Head-->
  <title>Lupa Kata Laluan Client | Digstry</title>

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
          <!-- Forgot Password -->
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
              <h4 class="mb-2">Lupa Kata Laluan? 🔒</h4>
              <p class="mb-4">Masukkan emel anda dan kami akan hantar cara untuk tetapkan semula kata laluan anda</p>
              <form id="formAuthentication" class="mb-3" action="auth-reset-password-basic.html" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Emel</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Masukkan emel anda"
                    autofocus
                  />
                </div>
                <button class="btn btn-primary d-grid w-100">Hantar Pautan</button>
              </form>
              <div class="text-center">
                <a href="{{ url('/') }}" class="d-flex justify-content-center align-items-center">
                  <i class="fad fa-arrow-left"></i>
                  Kembali ke Log Masuk
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- script -->
    <!-- Vendors JS -->
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/pages-auth.js') }}"></script>

    @include('client.layouts.script')
    
    <!-- / script -->
  </body>
</html>
