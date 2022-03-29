
/**
 * DataTables Advanced (jquery)
 */

'use strict';
$(function () {
  var
    table_task = $('.dt-responsive')

  // Responsive Table
  // --------------------------------------------------------------------

  if (table_task.length) {
    var dt_new_application = table_task.DataTable({
      ajax: assetsPath + 'json/table-new-task.json',
      columns: [
        { data: '' },
        { data: 'id' },
        { data: 'full_name' },
        { data: 'district' },
        { data: 'estimated_length' },
        { data: 'provider' },
        { data: 'created_date' },
        { data: 'status' },
        { data: '' }
      ],
      columnDefs: [
        {
          className: 'control',
          orderable: false,
          targets: 0,
          responsivePriority: 1,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          targets: 1,
          responsivePriority: 7,
        },

        {
          // Provider
          targets: 5,
          render: function (data, type, full, meta) {
            var $user_img = full['provider_avatar'],
            $provider = full['provider']
            if ($user_img) {
              // For Avatar image
              var $output =
                '<img src="' + assetsPath + 'img/provider/' + $user_img + '" alt="Avatar" class="rounded-circle">';
            } else {
              // For Avatar badge
              var stateNum = Math.floor(Math.random() * 6);
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $provider = full['provider'];
              var $initials = $provider.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
            }
            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar me-2">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<span class="emp_name text-truncate">' +
              $provider +
              '</span>' +
              '</div>' +
              '</div>';
            return $row_output;
          },
          responsivePriority: 3
        },
        {
        // Client
        targets: 2,
        render: function (data, type, full, meta) {
          var $user_img = full['avatar'],
            $name = full['full_name'],
            $post = full['post'];
          if ($user_img) {
            // For Avatar image
            var $output =
              '<img src="' + assetsPath + 'img/avatars/' + $user_img + '" alt="Avatar" class="rounded-circle">';
          } else {
            // For Avatar badge
            var stateNum = Math.floor(Math.random() * 6);
            var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
            var $state = states[stateNum],
              $name = full['full_name'];
            var $initials = $name.match(/\b\w/g) || [];
            $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
            $output = '<span class="avatar-initial rounded-circle bg-label-' + $state + '">' + $initials + '</span>';
          }
          // Creates full output for row
          var $row_output =
            '<div class="d-flex justify-content-start align-items-center">' +
            '<div class="avatar-wrapper">' +
            '<div class="avatar me-2">' +
            $output +
            '</div>' +
            '</div>' +
            '<div class="d-flex flex-column">' +
            '<span class="emp_name text-truncate">' +
            $name +
            '</span>' +
            '<small class="emp_post text-truncate text-muted">' +
            $post +
            '</small>' +
            '</div>' +
            '</div>';
          return $row_output;
        },
          responsivePriority: 2
        },
        {
          responsivePriority: 6,
          targets: 4,
          render: function (data, type, full, meta) {
            var $length = full['estimated_length'],
            $output = '<span class="fw-semibold">' + $length.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' m</span>';
            return $output
          }
        },
        {
          responsivePriority: 4,
          targets: 3,
          render: function (data, type, full, meta) {
            const $district = full['district'];
            let $intials = $district.length;

            let $output = "<div class='text-center'>";
            for (let i = 0; i < $intials; i++) {
              $output += "<span class='me-1 badge bg-label-secondary'>" + $district[i] + "</span>";
            }
            $output += "</div>";
            return $output
          }
        },
        {
          responsivePriority: 5,
          targets: 6
        },

        {
          // Label
          targets: -2,
          render: function (data, type, full, meta) {
            // var $rand_num = Math.floor(Math.random() * 5) + 1;
            var $status_number = full['status'];
            var $status = {
              1: { title: 'Permohonan Izin Lalu', class: 'bg-label-primary' },
              2: { title: 'Semakan Pindaan', class: ' bg-label-success' },
              3: { title: 'Permohonan Permit Kerja', class: ' bg-label-danger' },
              4: { title: 'Permohonan CPC', class: ' bg-label-warning' },
              5: { title: 'Pemulangan Wang Cagaran', class: ' bg-label-info' }
            };
            if (typeof $status[$status_number] === 'undefined') {
              return data;
            }
            return (
              '<span class="badge rounded-pill ' +
              $status[$status_number].class +
              '">' +
              $status[$status_number].title +
              '</span>'
            );
          }
        },
        {
          // Actions
          targets: -1,
          title: 'Tindakan',
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-flex justify-content-center">' +
              '<a href="../../forms/registration/?id=' + full['register_id'] + '" class="btn rounded-pill btn-icon btn-label-primary">' +
                '<span class="tf-icons far fa-edit">' +
              '</a>'+
              '</div>'
            );
          },
          responsivePriority: 0
        }
      ],
      order: [[1, 'asc']],
      dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 5,
      lengthMenu: [5, 10, 25, 50, 75, 100],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Keterangan ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });

    // Fixed header
    if (window.Helpers.isNavbarFixed()) {
      var navHeight = $('#layout-navbar').outerHeight();
      new $.fn.dataTable.FixedHeader(dt_new_application).headerOffset(navHeight);
    } else {
      new $.fn.dataTable.FixedHeader(dt_new_application);
    }
  }

   // On each datatable draw, initialize tooltip
   table_task.on('draw.dt', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {
        boundary: document.body
      });
    });
  });

  // Filter form control to default size
  // ? setTimeout used for multilingual table initialization
  setTimeout(() => {
    $('.dataTables_filter .form-control').removeClass('form-control-sm');
    $('.dataTables_length .form-select').removeClass('form-select-sm');
  }, 200);
});
