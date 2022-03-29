
<!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-xxl">
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
      <a href="{{ url('/dashboard') }}" class="app-brand-link gap-2 gap-2">
        <span class="app-brand-logo demo">
          <img src="img/branding/logo.svg" title="Digstry" width="26" width="26px"/> 
        </span>
        <span class="app-brand-text demo menu-text fw-bold">Digstry</span>
      </a>

      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu flex-grow-0 bg-menu-theme nav">
        <div class="container-xxl d-flex h-100">
          <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item active">
              <a href="{{ url('/dashboard') }}" class="menu-link gap-2">
                <i class="fad fa-home fa-lg"></i>
                <div data-i18n="Dashboards">Papan Pemuka</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link gap-2">
                <i class="fad fa-chart-bullet fa-lg"></i>
                <div data-i18n="Layouts">Status</div>
              </a>
            </li>

            <!-- Apps -->
            <li class="menu-item">
              <a href="{{ url('/listProject') }}" class="menu-link gap-2">
                <i class="fad fa-triangle-person-digging fa-lg"></i>
                <div data-i18n="Apps">Projek</div>
              </a>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link gap-2">
                <i class="fad fa-chart-user fa-lg"></i>
                <div data-i18n="Charts & Maps">Laporan</div>
              </a>
            </li>

          </ul>
        </div>
      </aside>
      <!-- / Menu -->

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link gap-2 d-xl-none text-large ms-auto">
        <i class="bx bx-x bx-sm align-middle"></i>
      </a>
    </div>

    <div class="layout-menu-toggle navbar-nav d-xl-none align-items-xl-center me-3 me-xl-0">
      <a class="nav-item nav-link gap-2 px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Language -->
        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
          <a class="nav-link gap-2 dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class="flag-icon flag-icon-my flag-icon-squared fs-3 rounded-circle me-1"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                <i class="flag-icon flag-icon-my flag-icon-squared fs-4 rounded-circle me-1"></i>
                <span class="align-middle">Malaysia</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                <i class="flag-icon flag-icon-us flag-icon-squared fs-4 rounded-circle me-1"></i>
                <span class="align-middle">English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                <i class="flag-icon flag-icon-fr flag-icon-squared fs-4 rounded-circle me-1"></i>
                <span class="align-middle">French</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                <i class="flag-icon flag-icon-de flag-icon-squared fs-4 rounded-circle me-1"></i>
                <span class="align-middle">German</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                <i class="flag-icon flag-icon-pt flag-icon-squared fs-4 rounded-circle me-1"></i>
                <span class="align-middle">Portuguese</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Search -->
        <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
          <a class="nav-item nav-link gap-2 search-toggler" href="javascript:void(0);">
            <i class="fad fa-magnifying-glass fa-lg"></i>
          </a>
        </li>
        <!-- /Search -->

        <!-- Search -->
        <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
          <a class="nav-item nav-link gap-2 search-toggler" href="{{ url('/permohonan') }}">
            <i class="fad fa-plus-circle fa-lg"></i>
          </a>
        </li>
        <!-- /Search -->

        <!-- Style Switcher -->
        <li class="nav-item me-2 me-xl-0">
          <a class="nav-link gap-2 style-switcher-toggle hide-arrow" href="javascript:void(0);">
            <i class="bx bx-sm"></i>
          </a>
        </li>
        <!--/ Style Switcher -->

        <!-- Quick links  -->
        @include('client.layouts.quickLinks')
        <!-- Quick links -->

        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
          <a
            class="nav-link gap-2 dropdown-toggle hide-arrow"
            href="javascript:void(0);"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            aria-expanded="false"
          >
            <i class="fad fa-bell fa-lg"></i>
            <span class="badge rounded-pill badge-notifications bg-danger">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body me-auto mb-0">Notification</h5>
                <a
                  href="javascript:void(0)"
                  class="dropdown-notifications-all text-body"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Mark all as read"
                  ><i class="bx fs-4 bx-envelope-open"></i
                ></a>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle"/> 
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                      <p class="mb-0">Won the monthly best seller gold badge</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial bg-label-danger rounded-circle">CF</span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Charles Franklin</h6>
                      <p class="mb-0">Accepted your connection</p>
                      <small class="text-muted">12hr ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message ✉️</h6>
                      <p class="mb-0">You have new message from Natalie</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial bg-label-success rounded-circle"
                          ><i class="bx bx-cart"></i
                        ></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Whoo! You have new order 🛒</h6>
                      <p class="mb-0">ACME Inc. made new order $1,154</p>
                      <small class="text-muted">1 day ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Application has been approved 🚀</h6>
                      <p class="mb-0">Your ABC project application has been approved.</p>
                      <small class="text-muted">2 days ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial bg-label-success rounded-circle"
                          ><i class="bx bx-pie-chart-alt"></i
                        ></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Monthly report is generated</h6>
                      <p class="mb-0">July monthly financial report is generated</p>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle"/> 
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Send connection request</h6>
                      <p class="mb-0">Peter sent you connection request</p>
                      <small class="text-muted">4 days ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle"/> 
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New message from Jane</h6>
                      <p class="mb-0">Your have new message from Jane</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial bg-label-warning rounded-circle"
                          ><i class="bx bx-error"></i
                        ></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">CPU is running high</h6>
                      <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="dropdown-notifications-actions flex-shrink-0">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"
                        ><span class="badge badge-dot"></span
                      ></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"
                        ><span class="bx bx-x"></span
                      ></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown-menu-footer border-top">
              <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                View all notifications
              </a>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link gap-2 dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="img/avatars/1.png" alt class="rounded-circle"/> 
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="pages-account-settings-account.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="img/avatars/1.png" alt class="rounded-circle"/> 
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="lh-1 d-block fw-semibold">{{ auth()->user()->name }}</span>
                    <small>Client</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url('/profile-user') }}">
                <i class="far fa-user fa-lg"></i>
                <span class="align-middle">Maklumat Diri</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="far fa-gear fa-lg"></i>
                <span class="align-middle">Tetapan</span>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{ url('/logout') }}">
                <i class="far fa-arrow-right-from-bracket fa-lg"></i>
                <span class="align-middle">Log Keluar</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
      <input
        type="text"
        class="form-control search-input border-0"
        placeholder="Search..."
        aria-label="Search..."
      />
      <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>
  </div>
</nav>
<!-- / Navbar -->

{{-- <script src="{{ asset('../vendor/js/menu.js') }}"></script> --}}
<script src="{{ asset('../js/main.js') }}"></script>
{{-- <script src="../assets/vendor/js/menu.js"></script> --}}
{{-- <script src="../assets/js/main.js"></script> --}}
