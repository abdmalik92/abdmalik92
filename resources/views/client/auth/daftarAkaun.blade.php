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

  <style>
    /* Hide all steps by default: */
    .tab {
      display: none;
    }

    button {
    /* display: inline-block; */
    font-family: inherit;
    font-weight: 400;
    line-height: 1.4;
    color: #ffffff;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: #5a8dee;
    /* background-color: transparent; */
    border: 1px solid transparent;
    padding: 0.469rem 1.375rem;
    font-size: 0.9375rem;
    border-radius: 0.25rem;
    transition: all .2s ease-in-out;
    box-shadow: 0 0.125rem 0.25rem rgb(147 158 170 / 40%);
}


    button:hover {
      opacity: 0.8;
    }

    #prevBtn {
      background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #5a8dee;
    }
  </style>
  
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
              {{-- <h4 class="mb-2">Pengembaraan bermula disini 🚀</h4> --}}
              {{-- <p class="mb-4">Jadikan kerja anda lebih mudah dan menyeronokkan!</p> --}}

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
                  @php
                      Session::forget('success');
                  @endphp
              </div>
              @endif

              {{-- <form id="formAuthentication" class="mb-3" action="index.html" method="POST"> --}}
              <form method="POST" action="{{ route('daftar') }}" id="regForm">
                {{ csrf_field() }}

                <div class="tab">
                  Butiran Log Masuk
                  <hr>

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
                      
                      <div class="col-12 mb-4">
                        <p class="fw-semibold mt-2">Kata Laluan perlu mengandungi sekurang-kurangnya:</p>
                        <ul class="ps-3 mb-0">
                          <li class="mb-1">6 hingga 10 aksara</li>
                          <li class="mb-1">satu huruf besar</li>
                          <li>satu digit atau simbol</li>
                        </ul>
                      </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>

                  {{-- <div class="mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                      <label class="form-check-label" for="terms-conditions">
                        Saya bersetuju dengan
                        <a href="javascript:void(0);">terma & syarat privasi</a>
                      </label>
                    </div>
                  </div> --}}
                  {{-- <button class="btn btn-primary d-grid w-100" type="submit" >Seterusnya</button> --}}
                </div>

                <div class="tab">
                  Butiran Maklumat Pengguna
                  <hr>

                  <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Pengguna</label>
                    <select class="form-control" name="kategori" id="kategori2">
                      <option value="">-- Sila Pilih --</option>
                      <option value="1">Jabatan/Agensi Kerajaan</option>
                      <option value="2">Konsultan</option>
                      <option value="3">Penyedia Utiliti</option>
                      <option value="4">Kontraktor/Pemaju</option>
                      <option value="5">Orang Awam</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="nama_pengguna" class="form-label">Nama</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nama_pengguna"
                      name="nama_pengguna"
                      placeholder="Nama Seperti Dalam Kad Pengenalan"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                    <label for="no_ic" class="form-label">No. Kad Pengenalan Baru</label>
                    <input
                      type="text"
                      class="form-control"
                      id="no_ic"
                      name="no_ic"
                      placeholder="Cth:7810017777"
                      maxlength="12"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                    <label for="no_telefon" class="form-label">No. Telefon</label>
                    <input
                      type="text"
                      class="form-control"
                      id="no_telefon"
                      name="no_telefon"
                      placeholder="Cth:0122222222"
                      autofocus
                    />
                  </div>
                </div>

                <div class="tab">
                  Butiran Alamat Mesyuarat
                  <hr>

                  <div class="mb-3">
                    <label for="nama_pengguna" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4" cols="50" placeholder="Alamat" autofocus></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="no_ic" class="form-label">Poskod</label>
                    <input
                      type="text"
                      class="form-control"
                      id="poskod"
                      name="poskod"
                      placeholder="Poskod"
                      autofocus
                    />
                  </div>
                  <div class="mb-3">
                    <label for="kategori" class="form-label">Daerah</label>
                    <select class="form-control" name="daerah" id="daerah">
                      <option value="">-- Sila Pilih --</option>
                      <option value="1">Kuala Terengganu</option>
                      <option value="2">Kuala Nerus</option>
                      <option value="3">Hulu Terengganu</option>
                      <option value="4">Marang</option>
                      <option value="5">Dungun</option>
                      <option value="3">Kemaman</option>
                      <option value="4">Setiu</option>
                      <option value="5">Besut</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="kategori" class="form-label">Negeri</label>
                    <select class="form-control" name="negeri" id="negeri">
                      <option value="">-- Sila Pilih --</option>
                      <option value="1">Johor</option>
                      <option value="2">Kedah</option>
                      <option value="3">Kelantan</option>
                      <option value="4">Kuala Lumpur</option>
                      <option value="5">Labuan</option>
                      <option value="6">Melaka</option>
                      <option value="7">Negeri Sembilan</option>
                      <option value="8">Pahang</option>
                      <option value="9">Penang</option>
                      <option value="10">Perak</option>
                      <option value="11">Perlis</option>
                      <option value="12">Putrajaya</option>
                      <option value="13">Sabah</option>
                      <option value="14">Sarawak</option>
                      <option value="15">Selangor</option>
                      <option value="16">Terengganu</option>
                    </select>
                  </div>
                </div>

                <div class="tab">
                  Muatnaik Dokumen
                  <hr>

                  <div id="else_div"></div>
                  <div id="jabatan_div"></div>
                  <div id="awam_div"></div>
                </div>
                
                <button class="w-100" type="button" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                <button class="w-100" type="button" id="nextBtn" onclick="nextPrev(1)">Seterusnya</button>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                </div>
              </form>

              <p class="text-center">
                <span>Sudah ada akaun?</span>
                <a href="{{ url('/login') }}">
                  <span>Log Masuk di sini</span>
                </a>
              </p>

            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab
      
      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Daftar";
        } else {
          document.getElementById("nextBtn").innerHTML = "Seterusnya";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }
      
      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }
      
      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }
      
      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
    
      var container1 = document.getElementById('jabatan_div');
      var container2 = document.getElementById('else_div');
      var container3 = document.getElementById('awam_div');

      $(function () {
        $("#kategori2").change(function () 
        {
            if ($(this).val() == "1") 
            {
              container1.innerHTML = '<div class="mb-3">' +
                  '<label for="no_ic" class="form-label">Muatnaik Surat Perwakilan</label>' +
                  '<input class="form-control" type="file" id="dokumen" name="dokumen" autofocus>' +
                '</div>';

              container2.innerHTML = '';
              container3.innerHTML = '';
            } 
            else if ($(this).val() == "5") 
            {
              container3.innerHTML = '<div class="mb-3">' +
                  '<label for="no_ic" class="form-label">Muatnaik Salinan Kad Pengenalan</label>' +
                  '<input class="form-control" type="file" id="dokumen" name="dokumen" autofocus>' +
                '</div>';
                
              container1.innerHTML = '';
              container2.innerHTML = '';
            }
            else
            {
              container2.innerHTML = '<div class="mb-3">' +
                  '<label for="nama_pengguna" class="form-label">Nama Syarikat</label>' +
                  '<input type="text" class="form-control" id="nama_syarikat" name="nama_syarikat" placeholder="Nama Syarikat Seperti Dalam SSM" autofocus />' +
                '</div>' +
                '<div class="mb-3">' +
                  '<label for="no_ic" class="form-label">No. SSM</label>' +
                  '<input type="text" class="form-control" id="no_ssm" name="no_ssm" placeholder="No SSM" autofocus />' +
                '</div>' + 
                '<div class="mb-3">' +
                  '<label for="no_ic" class="form-label">Muatnaik SSM</label>' +
                  '<input class="form-control" type="file" id="dokumen" name="dokumen" autofocus>' +
                '</div>';
              container1.innerHTML = '';
              container3.innerHTML = '';
            }
        });
      });
    </script>

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
