<!DOCTYPE html>

<html
  lang="en"
  class="light-style"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer"
>

<title>Tetap Semula Katalaluan | Digstry</title>
    
@include('client.layouts.header')

<!-- Form Validation -->
<link rel="stylesheet" href="{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/sweetalert2/sweetalert2.css') }}" />

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
              <h4 class="breadcrumb-wrapper py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Security
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/profile-user') }}"
                        ><i class="bx bx-user me-1"></i> Account</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('/reset-password') }}"
                        ><i class="bx bx-lock-alt me-1"></i> Security</a
                      >
                    </li>
                  </ul>
                  <!-- Change Password -->
                  <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="form-password-toggle col-md-6 mb-3">
                            <label class="form-label" for="currentPassword">Current Password</label>
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                type="password"
                                name="currentPassword"
                                id="currentPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-password-toggle col-md-6 mb-3">
                            <label class="form-label" for="newPassword">New Password</label>
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                type="password"
                                id="newPassword"
                                name="newPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>

                          <div class="form-password-toggle col-md-6 mb-3">
                            <label class="form-label" for="confirmPassword">Confirm New Password</label>
                            <div class="input-group input-group-merge">
                              <input
                                class="form-control"
                                type="password"
                                name="confirmPassword"
                                id="confirmPassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                              />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                          </div>
                          <div class="col-12 mb-4">
                            <p class="fw-semibold mt-2">Password Requirements:</p>
                            <ul class="ps-3 mb-0">
                              <li class="mb-1">Minimum 8 characters long - the more, the better</li>
                              <li class="mb-1">At least one lowercase character</li>
                              <li>At least one number, symbol, or whitespace character</li>
                            </ul>
                          </div>
                          <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-label-secondary">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <!--/ Change Password -->

                  <!-- Two-steps verification -->
                  <div class="card mb-4">
                    <h5 class="card-header">Two-steps verification</h5>
                    <div class="card-body">
                      <p class="fw-semibold mb-3">Two factor authentication is not enabled yet.</p>
                      <p class="w-75">
                        Two-factor authentication adds an additional layer of security to your account by requiring more
                        than just a password to log in.
                        <a href="javascript:void(0);">Learn more.</a>
                      </p>
                      <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#enableOTP">
                        Enable two-factor authentication
                      </button>
                    </div>
                  </div>
                  <!-- Modal -->
                  <!-- Enable OTP Modal -->
                  <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                      <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="text-center mb-4">
                            <h3 class="mb-4">Enable One Time Password</h3>
                          </div>
                          <h6>Verify Your Mobile Number for SMS</h6>
                          <p>
                            Enter your mobile phone number with country code and we will send you a verification code.
                          </p>
                          <form id="enableOTPForm" class="row g-3 mt-3" onsubmit="return false">
                            <div class="col-12">
                              <label class="form-label" for="modalEnableOTPPhone">Phone Number</label>
                              <div class="input-group input-group-merge">
                                <span class="input-group-text">+1</span>
                                <input
                                  type="text"
                                  id="modalEnableOTPPhone"
                                  name="modalEnableOTPPhone"
                                  class="form-control phone-number-otp-mask"
                                  placeholder="202 555 0111"
                                />
                              </div>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary me-1 me-sm-3">Submit</button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              >
                                Cancel
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Enable OTP Modal -->

                  <!-- /Modal -->

                  <!--/ Two-steps verification -->

                  <!-- Create an API key -->
                  <div class="card mb-4">
                    <h5 class="card-header">Create an API key</h5>
                    <div class="row">
                      <div class="col-md-5 order-1 order-md-0">
                        <div class="card-body pt-md-0">
                          <form id="formAccountSettingsApiKey" method="POST" onsubmit="return false">
                            <div class="row">
                              <div class="col-12 mb-3">
                                <label for="apiAccess" class="form-label"
                                  >Choose the Api key type you want to create</label
                                >
                                <select id="apiAccess" class="select2 form-select">
                                  <option value="">Choose Key Type</option>
                                  <option value="full">Full Control</option>
                                  <option value="modify">Modify</option>
                                  <option value="read-execute">Read & Execute</option>
                                  <option value="folders">List Folder Contents</option>
                                  <option value="read">Read Only</option>
                                  <option value="read-write">Read & Write</option>
                                </select>
                              </div>
                              <div class="col-12 mb-3">
                                <label for="apiKey" class="form-label">Name the API key</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="apiKey"
                                  name="apiKey"
                                  placeholder="Server Key 1"
                                />
                              </div>
                              <div class="col-12">
                                <button type="submit" class="btn btn-primary d-grid w-100 me-2">Create Key</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-7 order-0 order-md-1">
                        <div class="mt-md-n5 text-center pt-md-2 mx-3 mx-md-0">
                          <img
                            src="../../assets/img/illustrations/boy-working-light.png"
                            class="img-fluid"
                            alt="Api Key Image"
                            width="300"
                            data-app-light-img="illustrations/boy-working-light.png"
                            data-app-dark-img="illustrations/boy-working-dark.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Create an API key -->

                  <!-- API Key List & Access -->
                  <div class="card mb-4">
                    <h5 class="card-header">API Key List & Access</h5>
                    <div class="card-body">
                      <p>
                        An API key is a simple encrypted string that identifies an application without any principal.
                        They are useful for accessing public data anonymously, and are used to associate API requests
                        with your project for quota and billing.
                      </p>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="position-relative bg-lighter rounded p-3 mb-3">
                            <div class="dropdown api-key-actions">
                              <a class="btn dropdown-toggle hide-arrow text-muted p-0" data-bs-toggle="dropdown"
                                ><i class="bx bx-dots-vertical-rounded"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-pencil me-2"></i>Edit</a>
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-trash me-2"></i>Delete</a>
                              </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3">
                              <h4 class="me-3 mb-0">Server Key 1</h4>
                              <span class="badge bg-label-primary">Full Access</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                              <span class="fw-semibold me-3">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                              <span class="text-muted cursor-pointer"><i class="bx bx-copy"></i></span>
                            </div>
                            <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
                          </div>
                          <div class="position-relative bg-lighter rounded p-3 mb-3">
                            <div class="dropdown api-key-actions">
                              <a class="btn dropdown-toggle hide-arrow text-muted p-0" data-bs-toggle="dropdown"
                                ><i class="bx bx-dots-vertical-rounded"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-pencil me-2"></i>Edit</a>
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-trash me-2"></i>Delete</a>
                              </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3">
                              <h4 class="me-3 mb-0">Server Key 2</h4>
                              <span class="badge bg-label-primary">Read Only</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                              <span class="fw-semibold me-3">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                              <span class="text-muted cursor-pointer"><i class="bx bx-copy"></i></span>
                            </div>
                            <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
                          </div>
                          <div class="position-relative bg-lighter rounded p-3">
                            <div class="dropdown api-key-actions">
                              <a class="btn dropdown-toggle hide-arrow text-muted p-0" data-bs-toggle="dropdown"
                                ><i class="bx bx-dots-vertical-rounded"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-pencil me-2"></i>Edit</a>
                                <a href="javascript:;" class="dropdown-item"><i class="bx bx-trash me-2"></i>Delete</a>
                              </div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3">
                              <h4 class="me-3 mb-0">Server Key 3</h4>
                              <span class="badge bg-label-primary">Full Access</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                              <span class="fw-semibold me-3">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                              <span class="text-muted cursor-pointer"><i class="bx bx-copy"></i></span>
                            </div>
                            <span>Created on 28 Dec 2020, 12:21 GTM+4:10</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ API Key List & Access -->

                  <!-- Recent Devices -->
                  <div class="card">
                    <h5 class="card-header">Recent Devices</h5>
                    <div class="table-responsive">
                      <table class="table border-top">
                        <thead>
                          <tr>
                            <th class="text-truncate">Browser</th>
                            <th class="text-truncate">Device</th>
                            <th class="text-truncate">Location</th>
                            <th class="text-truncate">Recent Activities</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bxl-windows text-info me-3"></i>
                              <span class="fw-semibold">Chrome on Windows</span>
                            </td>
                            <td class="text-truncate">HP Spectre 360</td>
                            <td class="text-truncate">Switzerland</td>
                            <td class="text-truncate">10, July 2021 20:07</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bx-mobile-alt text-danger me-3"></i>
                              <span class="fw-semibold">Chrome on iPhone</span>
                            </td>
                            <td class="text-truncate">iPhone 12x</td>
                            <td class="text-truncate">Australia</td>
                            <td class="text-truncate">13, July 2021 10:10</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bxl-android text-success me-3"></i>
                              <span class="fw-semibold">Chrome on Android</span>
                            </td>
                            <td class="text-truncate">Oneplus 9 Pro</td>
                            <td class="text-truncate">Dubai</td>
                            <td class="text-truncate">14, July 2021 15:15</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bxl-apple me-3"></i> <span class="fw-semibold">Chrome on MacOS</span>
                            </td>
                            <td class="text-truncate">Apple iMac</td>
                            <td class="text-truncate">India</td>
                            <td class="text-truncate">16, July 2021 16:17</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bxl-windows text-info me-3"></i>
                              <span class="fw-semibold">Chrome on Windows</span>
                            </td>
                            <td class="text-truncate">HP Spectre 360</td>
                            <td class="text-truncate">Switzerland</td>
                            <td class="text-truncate">20, July 2021 21:01</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">
                              <i class="bx bxl-android text-success me-3"></i>
                              <span class="fw-semibold">Chrome on Android</span>
                            </td>
                            <td class="text-truncate">Oneplus 9 Pro</td>
                            <td class="text-truncate">Dubai</td>
                            <td class="text-truncate">21, July 2021 12:22</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!--/ Recent Devices -->
                </div>
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

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('vendor/libs/cleavejs/cleave-phone.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/pages-account-settings-account.js') }}"></script>
    <script src="{{ asset('js/modal-enable-otp.js') }}"></script>
  </body>
</html>
