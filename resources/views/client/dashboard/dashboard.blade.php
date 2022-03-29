<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">

  <!--begin::Head-->
  <title>Papan Pemuka | Digstry</title>

  <link rel="stylesheet" href="{{ asset('vendor/libs/jumlah-jarak-charts/apex-charts.css') }}" />
  @include('client.layouts.header')
  
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
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <!-- Gamification Card -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <h3 class="card-title mb-2">Selamat Datang {{ auth()->user()->name }}</h3>
                      <!-- <span class="d-block text-nowrap mb-4">Best seller of the month</span> -->
                    </div>
                    <div class="card-body">
                      <div class="row align-items-end">
                        <div class="col-6">
                          <h1 class="display-6 text-primary pt-4 pb-1 mb-2">{10}</h1>
                          <small class="d-block mb-3">Anda mempunyai <br />projek yang belum selesai dan perlu disemak atau menghantar dokumen.</small>

                          <a href="javascript:;" class="btn btn-sm btn-primary">Lihat Perincian</a>
                        </div>
                        <div class="col-6">
                          <img
                            src="../img/illustrations/boy-with-laptop-light.png"
                            width="140"
                            height="150"
                            class="rounded-start"
                            alt="View Sales"
                            data-app-light-img="illustrations/boy-with-laptop-light.png"
                            data-app-dark-img="illustrations/boy-with-laptop-dark.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Gamification Card -->

                <!-- Statistics cards & Revenue Growth Chart -->
                <div class="col-12 col-lg-4">
                  <div class="row">
                    <!-- Statistics Cards -->
                    <div class="col-6 col-md-3 col-lg-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <div class="avatar mx-auto mb-2"> 
                            <span class="avatar-initial bg-label-primary rounded-circle"
                              ><i class="fad fa-file-invoice-dollar fa-lg"></i></span>
                              
                          </div> 
                          <span class="d-block text-nowrap">Bayaran Pendaftaran</span>
                          <h2 class="mb-0">{00}</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial bg-label-info rounded-circle">
                              <i class="fas fa-route fs-4"></i>
                            </span>
                          </div>
                          <span class="d-block text-nowrap">Lawatan Tapak</span>
                          <h2 class="mb-0">{00}</h2>
                        </div>
                      </div>
                    </div>
                    <!--/ Statistics Cards -->
                    <!-- Statistics Cards -->
                    <div class="col-6 col-md-3 col-lg-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <div class="avatar mx-auto mb-2"> 
                            <span class="avatar-initial bg-label-success rounded-circle"
                              ><i class="fad fa-file-circle-exclamation fa-lg"></i></span>
                              
                          </div> 
                          <span class="d-block text-nowrap">Pindaan</span>
                          <h2 class="mb-0">{00}</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-6 mb-4">
                      <div class="card h-100">
                        <div class="card-body text-center">
                          <div class="avatar mx-auto mb-2">
                            <span class="avatar-initial bg-label-danger rounded-circle">
                              <i class="far fa-dollar fs-4"></i>
                            </span>
                          </div>
                          <span class="d-block text-nowrap">Sebut Harga</span>
                          <h2 class="mb-0">{00}</h2>
                        </div>
                      </div>
                    </div>
                    <!--/ Statistics Cards -->
                  </div>
                </div>
                <!--/ Statistics cards & Revenue Growth Chart -->

                <!-- Multi Radial Chart -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="card-title mb-2">Jumlah Projek Bagi Tahun Ini</h5>
                    </div>
                    <div id="growthRadialChart"></div>
                    <div class="avatar-group d-flex align-items-center" style="padding-left: 24px;">
                      <div
                        class="avatar avatar-sm pull-up"
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="TNB"
                      >
                        <img src="../img/provider/TNB.jpg" alt="Avatar" class="rounded-circle"/>
                      </div>
                      <div
                        class="avatar avatar-sm pull-up"
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="TM"
                      >
                        <img src="../img/provider/TM.jpg" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div
                        class="avatar avatar-sm pull-up"
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="CELCOM"
                      >
                        <img src="../img/provider/CELCOM.jpg" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div
                        class="avatar avatar-sm pull-up"
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="MAXIS"
                      >
                        <img src="../img/provider/MXS.jpg" alt="Avatar" class="rounded-circle" />
                      </div>
                      <div
                        class="avatar avatar-sm pull-up"
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        title="SATU"
                      >
                        <img src="../img/provider/SATU.jpg" alt="Avatar" class="rounded-circle" />
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Multi Radial Chart -->

                <!-- Weekly Order Summary -->
                <div class="col-12 col-xl-8 mb-4">
                  <div class="card">
                    <div class="row row-bordered m-0">
                      <!-- Order Summary -->
                      <div class="col-12 col-md-12 px-0">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h5 class="card-title mb-0">Jumlah Permohonan</h5>
                        </div>
                        <div class="card-body p-0">
                          <div id="orderSummaryChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Weekly Order Summary -->

                <!-- Latest Update -->
                <div class="col-md-6 col-lg-6 col-xl-4 col-xl-4 mb-4">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center mb-3">
                      <h5 class="card-title mb-0">Belum Selesai LTA</h5>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span><img src="../img/provider/TNB.jpg"/></span>
                          </div>
                          <div class="gap-2 d-flex flex-wrap justify-content-between align-items-center w-100">
                            <div class="me-2">
                              <p class="lh-1 mb-0">KN.PWR/A3/2022/01/0001</p>
                              <small class="text-muted">02:00 PM - 03:00 PM</small>
                            </div>
                            <!-- <div class="item-progress">10k</div> -->
                          </div>
                        </li>

                        <li class="d-flex mb-4">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span><img src="../img/provider/SATU.jpg"/></span>
                          </div>
                          <div class="gap-2 d-flex flex-wrap justify-content-between align-items-center w-100">
                            <div class="me-2">
                              <p class="lh-1 mb-0">KN.WTR/A3/2022/01/0002</p>
                              <small class="text-muted">10:00 AM - 11:30 PM</small>
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-4">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span><img src="../img/provider/MXS.jpg"/></span>
                          </div>
                          <div class="gap-2 d-flex flex-wrap justify-content-between align-items-center w-100">
                            <div class="me-2">
                              <p class="lh-1 mb-0">KN.TEL/A3/2022/01/0003</p>
                              <small class="text-muted">04:00 PM - 05:00 PM</small>
                            </div>
                          </div>
                        </li>

                        <li class="d-flex mb-4">
                          <div class="avatar avatar-sm flex-shrink-0 me-3">
                            <span><img src="../img/provider/CELCOM.jpg"/></span>
                          </div>
                          <div class="gap-2 d-flex flex-wrap justify-content-between align-items-center w-100">
                            <div class="me-2">
                              <p class="lh-1 mb-0">KN.TEL/A3/2022/01/0004</p>
                              <small class="text-muted">03:00 PM - 04:00 PM</small>
                            </div>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Latest Update -->
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
    <script src="{{ asset('vendor/libs/jumlah-jarak-charts/apexcharts.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/cards-analytics-client.js') }}"></script>

    @include('client.layouts.script')
    
    <!-- / script -->
    
  </body>
</html>
