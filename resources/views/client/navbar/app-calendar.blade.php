<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/"
  data-template="horizontal-menu-template-no-customizer">

  <!--begin::Head-->
  <title>Lawatan Tapak | Digstry</title>

  @include('client.layouts.header')

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/libs/fullcalendar/fullcalendar.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/quill/editor.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('vendor/css/pages/app-calendar.css') }}" />
  
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
                Temu Janji LTA
              </h4>
              <div class="card app-calendar-wrapper">
                <div class="row g-0">
                  <!-- Calendar Sidebar -->
                  <div class="app-calendar-sidebar col" id="app-calendar-sidebar">
                    {{-- <div class="border-bottom p-4 my-sm-0 mb-3">
                      <div class="d-grid">
                        <button
                          class="btn btn-primary btn-toggle-sidebar"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#addEventSidebar"
                          aria-controls="addEventSidebar"
                        >
                          <i class="bx bx-plus"></i>
                          <span class="align-middle">Tambah Aktiviti</span>
                        </button>
                      </div>
                    </div> --}}
                    <div class="p-4">
                      <!-- inline calendar (flatpicker) -->
                      <div class="ms-n2">
                        <div class="inline-calendar"></div>
                      </div>

                      <hr class="container-m-nx my-4" />

                      <!-- Filter -->
                      <div class="mb-4">
                        <small class="text-small text-muted text-uppercase align-middle">Filter</small>
                      </div>

                      <div class="form-check mb-2">
                        <input
                          class="form-check-input select-all"
                          type="checkbox"
                          id="selectAll"
                          data-value="all"
                          checked
                        />
                        <label class="form-check-label" for="selectAll">Lihat Semua</label>
                      </div>

                      <div class="app-calendar-events-filter">
                        <div class="form-check form-check-danger mb-2">
                          <input
                            class="form-check-input input-filter"
                            type="checkbox"
                            id="select-personal"
                            data-value="personal"
                            checked
                          />
                          <label class="form-check-label" for="select-personal">Lawatan Tapak Awal</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar Sidebar -->

                  <!-- Calendar & Modal -->
                  <div class="app-calendar-content col">
                    <div class="card shadow-none border-0">
                      <div class="card-body pb-0">
                        <!-- FullCalendar -->
                        <div id="calendar"></div>
                      </div>
                    </div>
                    <div class="app-overlay"></div>
                    <!-- FullCalendar Offcanvas -->
                    <div
                      class="offcanvas offcanvas-end event-sidebar"
                      tabindex="-1"
                      id="addEventSidebar"
                      aria-labelledby="addEventSidebarLabel"
                    >
                      {{-- <div class="offcanvas-header border-bottom">
                        <h6 class="offcanvas-title" id="addEventSidebarLabel">Tambah Aktiviti</h6>
                        <button
                          type="button"
                          class="btn-close text-reset"
                          data-bs-dismiss="offcanvas"
                          aria-label="Close"
                        ></button>
                      </div> --}}
                      <div class="offcanvas-body">
                        <form class="event-form pt-0" id="eventForm" onsubmit="return false">
                          <div class="mb-3">
                            <label class="form-label" for="eventTitle">Title</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventTitle"
                              name="eventTitle"
                              placeholder="Event Title"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventLabel">Label</label>
                            <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel">
                              <option data-label="primary" value="Business" selected>Business</option>
                              <option data-label="danger" value="Personal">Personal</option>
                              <option data-label="warning" value="Family">Family</option>
                              <option data-label="success" value="Holiday">Holiday</option>
                              <option data-label="info" value="ETC">ETC</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventStartDate">Start Date</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventStartDate"
                              name="eventStartDate"
                              placeholder="Start Date"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventEndDate">End Date</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventEndDate"
                              name="eventEndDate"
                              placeholder="End Date"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="switch">
                              <input type="checkbox" class="switch-input allDay-switch" />
                              <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                              </span>
                              <span class="switch-label">All Day</span>
                            </label>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventURL">Event URL</label>
                            <input
                              type="url"
                              class="form-control"
                              id="eventURL"
                              name="eventURL"
                              placeholder="https://www.google.com"
                            />
                          </div>
                          <div class="select2-primary mb-3">
                            <label class="form-label" for="eventGuests">Add Guests</label>
                            <select
                              class="select2 select-event-guests form-select"
                              id="eventGuests"
                              name="eventGuests"
                              multiple
                            >
                              <option data-avatar="1.png" value="Jane Foster">Jane Foster</option>
                              <option data-avatar="3.png" value="Donna Frank">Donna Frank</option>
                              <option data-avatar="5.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                              <option data-avatar="7.png" value="Lori Spears">Lori Spears</option>
                              <option data-avatar="9.png" value="Sandy Vega">Sandy Vega</option>
                              <option data-avatar="11.png" value="Cheryl May">Cheryl May</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventLocation">Location</label>
                            <input
                              type="text"
                              class="form-control"
                              id="eventLocation"
                              name="eventLocation"
                              placeholder="Enter Location"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="eventDescription">Description</label>
                            <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
                          </div>
                          <div class="d-flex justify-content-start justify-content-sm-between my-4 mb-3">
                            <div>
                              <button type="submit" class="btn btn-primary btn-add-event me-1 me-sm-3">Add</button>
                              <button type="submit" class="btn btn-primary btn-update-event d-none me-1 me-sm-3">
                                Update
                              </button>
                              <button
                                type="reset"
                                class="btn btn-label-secondary btn-cancel me-1 me-sm-0"
                                data-bs-dismiss="offcanvas"
                              >
                                Cancel
                              </button>
                            </div>
                            <div><button class="btn btn-label-danger btn-delete-event d-none">Delete</button></div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /Calendar & Modal -->
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

    <!-- script -->
    <!-- Vendors JS -->
    @include('client.layouts.script')

    <script src="{{ asset('vendor/libs/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    {{-- <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('vendor/libs/moment/moment.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/app-calendar-events.js') }}"></script>
    <script src="{{ asset('js/app-calendar.js') }}"></script>

    <!-- / script -->

  </body>
</html>
