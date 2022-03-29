<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path=""
  data-template="horizontal-menu-template-no-customizer">

<!--begin::Head-->
<title>Daftar Permohonan | Digstry</title>
@include('client.layouts.header')

{{-- utk permohonan --}}
<link rel="stylesheet" href="{{ asset('vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css"') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/css/pages/app-invoice.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/dropzone/dropzone.css') }}" />
<link rel="stylesheet" href="{{ asset('css/client-custom.css') }}" />
<!--end::Head-->

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
      <!-- Navbar -->
      @include('client.layouts.navbar')
      <!-- / Navbar -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container flex-grow-1 container-p-y">
            <h4 class="breadcrumb-wrapper py-3 mb-4">
              <span class="text-muted fw-light">Permohonan Baru/</span> Maklumat Permohonan
            </h4>
            <!-- Default -->
            <div class="row">
              <!-- Default Wizard -->
              <div class="bs-stepper wizard-numbered mt-2"></div>
              <!-- /Default Wizard -->

              <!-- Maklumat Permohonan -->
              <div class="col-12 mb-4">
                <small class="text-light fw-semibold">Maklumat Permohonan</small>
                <div class="bs-stepper wizard-vertical vertical mt-2">
                  <div class="bs-stepper-header">
                    <div class="step" data-target="#butiran-projek">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Butiran Projek</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#butiran-jalan-terlibat">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Butiran Jalan Terlibat</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#maklumat-pemohon">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Maklumat Pemohon</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#maklumat-penyedia-utiliti">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Maklumat Penyedia Utiliti</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#maklumat-pembayar">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Maklumat Pembayar</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#maklumat-perunding">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">6</span>
                        <span class="bs-stepper-label">Maklumat Perunding</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#lampiran">
                      <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">7</span>
                        <span class="bs-stepper-label">Lampiran</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                          @php
                              Session::forget('success');
                          @endphp
                      </div>
                    @endif
                    {{-- <form class="source-item py-sm-3" onSubmit="return false" > --}}
                    <form method="post" action="{{ route('permohonanBKIL') }}" >
                      {{ csrf_field() }}
                      <!-- Butiran Projek -->
                      <div id="butiran-projek" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">Butiran Projek</h6>
                          <!-- <small>Enter Your Account Details.</small> -->
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <label class="form-label" for="">Tajuk Projek</label>
                            <input type="text" id="" name="tajuk_permohonan" class="form-control" placeholder="" />
                            @if ($errors->has('tajuk_permohonan'))
                                <span class="text-danger">{{ $errors->first('tajuk_permohonan') }}</span>
                            @endif
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <span class="fw-normal">Tarikh Mula Kerja</span>
                            <input type="date" name="DT_mula" class="form-control date-picker" placeholder="YYYY-MM-DD" />
                          </div>
                          <div class="col-sm-6">
                            <span class="fw-normal">Tarikh Tamat Kerja</span>
                            <input type="date" name="DT_akhir" class="form-control date-picker" placeholder="YYYY-MM-DD" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Tempoh Kerja Korekgali</label>
                            <input type="text" id="" name="tempoh" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="username-vertical">Kos Projek (RM)</label>
                            <input type="text" id="kos_projek" name="kos" class="form-control" placeholder="" onkeyup="hidePerunding();"/>
                          </div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev" disabled>
                              <i class="far fa-chevron-left ml-1"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next" type="submit">
                              <span class="d-none d-sm-inline-block">Seterusnya</span>
                              <i class="far fa-chevron-right ml-1"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>

                      <!-- Butiran Jalan Terlibat -->
                      <div id="butiran-jalan-terlibat" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">
                            Butiran Jalan Terlibat
                            <button type="button" class="btn btn-primary" style="float: right;" data-repeater-create>
                              <i class="fal fa-plus ml-1"></i>
                              <span class="d-none d-sm-inline-block me-sm-1">Jalan</span>
                            </button>
                          </h6>
                          <!-- <small>Enter Your Account Details.</small> -->
                        </div>
                          <div class="mb-3" data-repeater-list="group-a">
                            <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item>
                              <div class="d-flex position-relative border rounded pe-0">
                                <div class="row w-100 p-3 m-0">
                                  <div class="col-5 col-md-5 mb-3 mb-md-0">
                                    {{-- <p class="repeater-title mb-2">Nama Jalan</p> --}}
                                    <input
                                      type="text"
                                      class="form-control mb-2"
                                      placeholder="Nama Jalan"
                                    />
                                  </div>
                                  <div class="col-3 col-md-3 mb-3 mb-md-0">
                                    {{-- <p class="repeater-title mb-2">Daerah</p> --}}
                                    <select class="form-select item-details mb-2">
                                      <option selected disabled>Sila Pilih</option>
                                      <option value="Kuala Terengganu">Kuala Terengganu</option>
                                      <option value="App Design">App Design</option>
                                      <option value="App Customization">App Customization</option>
                                      <option value="ABC Template">ABC Template</option>
                                      <option value="App Development">App Development</option>
                                    </select>
                                  </div>
                                  <div class="col-2 col-md-2 mb-3 mb-md-0">
                                    {{-- <p class="repeater-title mb-2">Kaedah</p> --}}
                                    <input
                                      type="text"
                                      class="form-control mb-2"
                                      placeholder="Kaedah"
                                    />
                                  </div>
                                  <div class="col-2 col-md-2 mb-3 mb-md-0">
                                    {{-- <p class="repeater-title mb-2">Jarak (Meter)</p> --}}
                                    <input
                                      type="text"
                                      class="form-control mb-2"
                                      placeholder="Jarak (Meter)"
                                    />
                                  </div>
                                </div>
                                <div
                                  class="d-flex flex-column justify-content-between align-items-center border-start p-2"
                                >
                                  <i class="bx bx-x fs-4 text-muted cursor-pointer" data-repeater-delete></i>
                                  <div class="dropdown">
                                    <i
                                      class="bx bx-cog bx-xs more-options-dropdown text-muted cursor-pointer"
                                      role="button"
                                      id="dropdownMenuButton"
                                      data-bs-toggle="dropdown"
                                      data-bs-auto-close="outside"
                                      aria-expanded="false"
                                    >
                                    </i>
                                    <div
                                      class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                      aria-labelledby="dropdownMenuButton"
                                    >
                                      <div class="row g-3">
                                        <div class="col-6">
                                          <label for="koordinatMula" class="form-label">Koordinat Mula</label>
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="koordinatMula"
                                            placeholder="Mula"
                                          />
                                        </div>
                                        <div class="col-6">
                                          <label for="koordinatAkhir" class="form-label">Koordinat Akhir</label>
                                          <input
                                            type="text"
                                            class="form-control"
                                            id="koordinatAkhir"
                                            placeholder="Akhir"
                                          />
                                        </div>
                                      </div>
                                      <div class="dropdown-divider my-3"></div>
                                      <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev">
                              {{-- <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Previous</span> --}}
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              {{-- <span class="d-none d-sm-inline-block me-sm-1">Next</span>
                              <i class="bx bx-chevron-right bx-sm me-sm-n2"></i> --}}
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right"></i>
                            </button>
                          </div>
                      </div>

                      <!-- Maklumat Pemohon -->
                      <div id="maklumat-pemohon" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">Maklumat Pemohon</h6>
                          <!-- <small>Enter Your Account Details.</small> -->
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <label class="form-label" for="">Nama Syarikat</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <label class="form-label" for="">Alamat</label>
                            <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nama Pegawai Bertanggungjawab</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Jawatan</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Telefon Pejabat</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Telefon Bimbit</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Faks</label>
                            <input type="text" id="" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Alamat Emel</label>
                            <input type="email" id="" class="form-control" placeholder="" />
                          </div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev">
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right me-sm-n2"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <!-- Maklumat Penyedia Utiliti -->
                      <div id="maklumat-penyedia-utiliti" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">Maklumat Penyedia Utiliti</h6>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <label class="form-label" for="">Nama Syarikat</label>
                            <input type="text" id="syarikat_utiliti" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <label class="form-label" for="">Alamat</label>
                            <textarea id="alamat_utiliti" class="form-control" rows="3" placeholder="Alamat"></textarea>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nama Pegawai Bertanggungjawab</label>
                            <input type="text" id="pegawai_utiliti" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Jawatan</label>
                            <input type="text" id="jawatan_utiliti" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Telefon Pejabat</label>
                            <input type="text" id="tel_pejabat_utiliti" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Telefon Bimbit</label>
                            <input type="text" id="tel_bimbit_utiliti" class="form-control" placeholder="" />
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6">
                            <label class="form-label" for="">Nombor Faks</label>
                            <input type="text" id="faks_utiliti" class="form-control" placeholder="" />
                          </div>
                          <div class="col-sm-6">
                            <label class="form-label" for="">Alamat Emel</label>
                            <input type="email" id="emel_utiliti" class="form-control" placeholder="" />
                          </div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev">
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right me-sm-n2"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <!-- Maklumat Pembayar -->
                      <div id="maklumat-pembayar" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-3">
                            Maklumat Pembayar
                          </h6>
                          
                          <div>
                            <input class="form-check-input form-check-success input-filter" type="checkbox" id="chk_pembayar" data-value="">
                            <label class="form-check-label" for="chk_pembayar"> Sama seperti Penyedia Utiliti </label>
                          </div>
                        </div>

                        <div id="disablePembayar">
                          <div class="row g-3">
                            <div class="col-sm-12">
                              <label class="form-label" for="">Nama Syarikat</label>
                              <input type="text" id="syarikat_pembayar" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-12">
                              <label class="form-label" for="">Alamat</label>
                              <textarea id="alamat_pembayar" class="form-control" rows="3" placeholder="Alamat"></textarea>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nama Pegawai Bertanggungjawab</label>
                              <input type="text" id="pegawai_pembayar" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Jawatan</label>
                              <input type="text" id="jawatan_pembayar" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Telefon Pejabat</label>
                              <input type="text" id="tel_pejabat_pembayar" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Telefon Bimbit</label>
                              <input type="text" id="tel_bimbit_pembayar" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Faks</label>
                              <input type="text" id="faks_pembayar" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Alamat Emel</label>
                              <input type="email" id="emel_pembayar" class="form-control" placeholder="" />
                            </div>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-6"></div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev g-3">
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right me-sm-n2"></i>
                            </button>
                          </div>
                        </div>

                      </div>

                      <!-- Maklumat Perunding -->
                      <div id="maklumat-perunding" class="content">
                        <div id="disablePerunding">
                          <div class="content-header mb-3">
                            <h6 class="mb-0">Maklumat Perunding</h6>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-12">
                              <label class="form-label" for="">Nama Syarikat</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-12">
                              <label class="form-label" for="">Alamat</label>
                              <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nama Pegawai Bertanggungjawab</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Jawatan</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Telefon Pejabat</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Telefon Bimbit</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                          </div>
                          <div class="row g-3">
                            <div class="col-sm-6">
                              <label class="form-label" for="">Nombor Faks</label>
                              <input type="text" id="" class="form-control" placeholder="" />
                            </div>
                            <div class="col-sm-6">
                              <label class="form-label" for="">Alamat Emel</label>
                              <input type="email" id="" class="form-control" placeholder="" />
                            </div>
                          </div>
                        </div>

                        <div class="row g-3">
                          <div class="col-sm-6"></div>
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev g-3">
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right me-sm-n2"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <!-- Perakuan -->
                      <div id="perakuan" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">Perakuan</h6>
                        </div>
                        <div class="row g-3">
                          <div class="col-sm-12">
                            <span class="badge bg-primary">6.1</span>
                            <span>
                              Kami mengaku bahawa kami akan menggantirugi kepada Pihak Berkuasa Melulus/Tempatan
                              dari segi sebarang tuntutan sivil/kerugian/kerosakan harta benda/kehilangan nyawa dan
                              sebagainya
                              &nbsp;
                                <input class="form-check-input form-check-success input-filter" type="checkbox" id="select-holiday" data-value="holiday" checked="">
                              <span class="form-check form-check-success mb-2">
                              </span>
                            </span>
                          </div>

                          <div class="col-sm-12">
                            <span class="badge bg-primary">6.2</span>
                            <span>
                              Kami mengaku bahawa kami akan menggantirugi kepada Pihak Berkuasa Melulus/Tempatan
                              dari segi sebarang tuntutan sivil/kerugian/kerosakan harta benda/kehilangan nyawa dan
                              sebagainya
                              &nbsp;
                              <input
                                class="form-check-input input-filter"
                                type="checkbox"
                                id="select-personal"
                                data-value="personal"
                                checked
                              />
                            </span>
                          </div>
                          
                          <div class="col-sm-12">
                            <span class="badge bg-primary">6.3</span>
                            <span>
                              Kami mengaku bahawa kami akan menggantirugi kepada Pihak Berkuasa Melulus/Tempatan
                              dari segi sebarang tuntutan sivil/kerugian/kerosakan harta benda/kehilangan nyawa dan
                              sebagainya
                              &nbsp;
                              <input
                                class="form-check-input input-filter"
                                type="checkbox"
                                id="select-personal"
                                data-value="personal"
                                checked
                              />
                            </span>
                          </div>
                        </div>
                        <br/>
                        <div class="row g-3">
                          <div class="d-flex col-12 justify-content-between">
                            <button class="btn btn-label-secondary btn-prev">
                              <i class="far fa-chevron-left ms-sm-n2"></i>
                              <span class="d-none d-sm-inline-block">Sebelumnya</span>
                            </button>
                            <button class="btn btn-primary btn-next">
                              <span class="d-none d-sm-inline-block me-sm-1">Seterusnya</span>
                              <i class="far fa-chevron-right me-sm-n2"></i>
                            </button>
                          </div>
                        </div>
                      </div>


                      <!-- Lampiran -->
                      <div id="lampiran" class="content">
                        <div class="content-header mb-3">
                          <h6 class="mb-0">Lampiran</h6>
                        </div>
                        <div class="row g-3">
                              <form action="../../horizontal-menu/forms/upload/" method="post" class="dropzone client needsclick" id="dropzone-1">
                                <div class="dz-message needsclick">
                                  Drop files here or click to upload
                                  <span class="note needsclick"
                                    >(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                    uploaded.)</span
                                  >
                                </div>
                                <div class="fallback">
                                  <input name="file" type="file" />
                                </div>
                              </form>

                              <form action="/upload" class="dropzone client needsclick" id="dropzone-2">
                                <div class="dz-message needsclick">
                                  Drop files here or click to upload
                                  <span class="note needsclick"
                                    >(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                    uploaded.)</span
                                  >
                                </div>
                                <div class="fallback">
                                  <input name="file" type="file" />
                                </div>
                              </form>

                              {{-- <form action="/upload" class="dropzone client needsclick" id="dropzone-3"> --}}
                                <div class="dz-message needsclick">
                                  Drop files here or click to upload
                                  <span class="note needsclick"
                                    >(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                    uploaded.)</span
                                  >
                                </div>
                                <div class="fallback">
                                  <input name="file" type="file" />
                                </div>
                              {{-- </form> --}}
                        </div>
                        <br/>
                      </div>

                  </div>
                </div>
              </div>
              <!-- /Vertical Wizard -->
            </div>
          </div>
          <!--/ Content -->

          <!-- Footer -->
          @include('client.layouts.footer')
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>

      <!--/ Layout container -->
    </div>
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>
  <!--/ Layout wrapper -->

  <!-- script -->
  @include('client.layouts.script')

  <!-- Vendors JS utk permohonan-->
  <script src="{{ asset('vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
  <script src="{{ asset('vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
  <script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
  <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
  <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
  <script src="{{ asset('vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>

  <!-- Page JS utk permohonan-->
  <script src="{{ asset('js/form-wizard-validation.js') }}"></script>
  <script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('js/client/form-wizard-numbered.js') }}"></script>
  <script src="{{ asset('js/client/app-invoice-add.js') }}"></script>
  <script src="{{ asset('js/client/forms-file-upload.js') }}"></script>
  <script src="{{ asset('vendor/libs/dropzone/dropzone.js') }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
    $("#chk_pembayar").on("change",function(){

    if (this.checked ) {
            $("#syarikat_pembayar").val($("#syarikat_utiliti").val());
            $("#alamat_pembayar").val($("#alamat_utiliti").val());
            $("#pegawai_pembayar").val($("#pegawai_utiliti").val());
            $("#jawatan_pembayar").val($("#jawatan_utiliti").val());
            $("#tel_pejabat_pembayar").val($("#tel_pejabat_utiliti").val());
            $("#tel_bimbit_pembayar").val($("#tel_bimbit_utiliti").val());
            $("#faks_pembayar").val($("#faks_utiliti").val());
            $("#emel_pembayar").val($("#emel_utiliti").val());

            $("#disablePembayar *").prop('disabled',true);

        } else {

            $('#syarikat_pembayar').val("");
            $('#alamat_pembayar').val("");
            $('#pegawai_pembayar').val("");
            $('#jawatan_pembayar').val("");
            $('#tel_pejabat_pembayar').val("");
            $('#tel_bimbit_pembayar').val("");
            $('#faks_pembayar').val("");
            $('#emel_pembayar').val("");

            $("#disablePembayar *").prop('disabled',false);
            // $("#syarikat_pembayar").attr("placeholder", "syarikat_utiliti");
          }    

      });

    });
  </script>
  
  <script>
    $("#disablePerunding *").prop('disabled',true);

    function hidePerunding() 
    {
        var kosProjek = document.getElementById('kos_projek').value;
        if(kosProjek > 500000)
        {
          $("#disablePerunding *").prop('disabled',false);
        }
        else{
          $("#disablePerunding *").prop('disabled',true);
        }
    }
  </script>

  <!-- / script -->
 
</body>

</html>