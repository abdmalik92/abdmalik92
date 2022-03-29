/**
 *  Page auth register multi-steps
 */

'use strict';

// Select2 (jquery)
$(function () {
  var MDataset = [{
      distirct: 'Alor Gajah'
    },
    {
      distirct: 'Melaka Tengah'
    },
    {
      distirct: 'Jasin'
    },
  ];
  var JDataset = [{
      distirct: 'Batu Pahat'
    },
    {
      distirct: 'Johor Bharu'
    },
    {
      distirct: 'Kluang'
    },
    {
      distirct: 'Kota Tinggi'
    },
    {
      distirct: 'Kulai'
    },
    {
      distirct: 'Mersing'
    },
    {
      distirct: 'Muar'
    },
    {
      distirct: 'Pontian'
    },
    {
      distirct: 'Segamat'
    },
    {
      distirct: 'Tangkak'
    },
  ];
  var PDataset = [{
      distirct: 'Kuantan'
    },
    {
      distirct: 'Pekan'
    },
    {
      distirct: 'Rompin'
    },
    {
      distirct: 'Bera'
    },
    {
      distirct: 'Maran'
    },
    {
      distirct: 'Temerloh'
    },
    {
      distirct: 'Jerantut'
    },
    {
      distirct: 'Lipis'
    },
    {
      distirct: 'Bentong'
    },
    {
      distirct: 'Raub'
    },
    {
      distirct: 'Cameron Highlands'
    },
  ];

  var TDataset = [{
      distirct: 'Besut'
    },
    {
      distirct: 'Setiu'
    },
    {
      distirct: 'Kuala Nerus'
    },
    {
      distirct: 'Kuala Terengganu'
    },
    {
      distirct: 'Marang'
    },
    {
      distirct: 'Dungun'
    },
    {
      distirct: 'Hulu Terengganu'
    },
    {
      distirct: 'Kemaman'
    },
  ];

  var KDataset = [{
      distirct: 'Bachok'
    },
    {
      distirct: 'Gua Musang'
    },
    {
      distirct: 'Jeli'
    },
    {
      distirct: 'Kota Bharu'
    },
    {
      distirct: 'Kuala Krai'
    },
    {
      distirct: 'Lojing'
    },
    {
      distirct: 'Machang'
    },
    {
      distirct: 'Pasir Mas'
    },
    {
      distirct: 'Pasir Puteh'
    },
    {
      distirct: 'Tanah Merah'
    },
    {
      distirct: 'Tumpat'
    },
  ];

  var melaka = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('distirct'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: MDataset
  });
  var terengganu = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('distirct'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: TDataset
  });

  var kelantan = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('distirct'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: KDataset
  });

  var pahang = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('distirct'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: PDataset
  });

  var johor = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('distirct'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    local: JDataset
  });

  // Multiple
  // --------------------------------------------------------------------
  $('.typeahead-multi-datasets').typeahead({
    hint: !isRtl,
    highlight: true,
    minLength: 0
  }, {
    name: 'distircts',
    source: johor,
    display: 'distirct',
    templates: {
      header: '<h5 class="league-name border-bottom mb-0 mx-3 mt-3 pb-2">Johor</h5>'
    }
  }, {
    name: 'distircts',
    source: melaka,
    display: 'distirct',
    templates: {
      header: '<h5 class="league-name border-bottom mb-0 mx-3 mt-3 pb-2">Melaka</h5>'
    }
  }, {
    name: 'distircts',
    source: pahang,
    display: 'distirct',
    templates: {
      header: '<h5 class="league-name border-bottom mb-0 mx-3 mt-0 pb-2">Pahang</h5>'
    }
  }, {
    name: 'distircts',
    source: terengganu,
    display: 'distirct',
    templates: {
      header: '<h5 class="league-name border-bottom mb-0 mx-3 mt-0 pb-2">Terengganu</h5>'
    }
  }, {
    name: 'distircts',
    source: kelantan,
    display: 'distirct',
    templates: {
      header: '<h5 class="league-name border-bottom mb-0 mx-3 mt-0 pb-2">Kelantan</h5>'
    }
  });

});


// Multi Steps Validation
// --------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const stepsValidation = document.querySelector('#multiStepsValidation');
    if (typeof stepsValidation !== undefined && stepsValidation !== null) {
      // Multi Steps form
      const stepsValidationForm = stepsValidation.querySelector('#multiStepsForm');
      // Form steps
      const stepsValidationFormStep1 = stepsValidationForm.querySelector('#idCardCheckValidation');
      const stepsValidationFormStep2 = stepsValidationForm.querySelector('#personalInfoValidation');
      const stepsValidationFormStep3 = stepsValidationForm.querySelector('#accountDetailsValidation');
      // Multi steps next prev button
      const stepsValidationNext = [].slice.call(stepsValidationForm.querySelectorAll('.btn-next'));
      const stepsValidationPrev = [].slice.call(stepsValidationForm.querySelectorAll('.btn-prev'));

      let validationStepper = new Stepper(stepsValidation, {
        linear: true
      });

      // Account details

      const multiSteps1 = FormValidation.formValidation(stepsValidationFormStep1, {
        fields: {
          multiStepsIdCard: {
            validators: {
              notEmpty: {
                message: 'Sila isi No Kad Pengenalan anda'
              }
            },
            stringLength: {
              max: 12,
              message: 'No Kad Pengenalan mempunyai 12 aksara.'
            },
            regexp: {
              regexp: /^[0-9]+$/,
              message: 'Hanya perlu isi nombor sahaja.'
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: '.col-sm-8'
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          submitButton: new FormValidation.plugins.SubmitButton()
        },
      }).on('core.form.valid', function () {
        validationStepper.next();
        // Jump to the next step when all fields in the current step are valid
      });

      // Personal info
      const multiSteps2 = FormValidation.formValidation(stepsValidationFormStep2, {
        fields: {
          multiStepsFirstName: {
            validators: {
              notEmpty: {
                message: 'Sila isi Nama Pertama'
              }
            }
          },
          multiStepsLastName: {
            validators: {
              notEmpty: {
                message: 'Sila isi Nama Terakhir'
              }
            }
          },
          multiStepsMobile: {
            validators: {
              notEmpty: {
                message: 'Sila isi No Telefon'
              }
            }
          },
          multiStepsPositon: {
            validators: {
              notEmpty: {
                message: 'Tiada Maklumat Jawatan Dalam Pangkalan Data'
              }
            }
          },
          multiStepsAddress: {
            validators: {
              notEmpty: {
                message: 'Sila masukkan Alamat Tetap anda'
              }
            }
          },
          multiStepsPoscode: {
            validators: {
              notEmpty: {
                message: 'Sila masukkan Poskod Alamat Tetap'
              }
            }
          },
          multiStepsDistrict: {
            validators: {
              notEmpty: {
                message: 'Sila pilih Daerah Alamat Tetap'
              }
            }
          },
          multiStepsState: {
            validators: {
              notEmpty: {
                message: 'Sila pilih Negeri Alamat Tetap'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: function (field, ele) {
              // field is the field name
              // ele is the field element
              switch (field) {
                case 'multiStepsFirstName':
                  return '.col-sm-6';
                case 'multiStepsAddress':
                  return '.col-md-12';
                case 'multiStepsMobile':
                  return '.col-sm-6';
                case 'multiStepsPosition':
                  return '.col-SM-6';
                case 'multiStepsPoscode':
                  return '.col-sm-4';
                case 'multiStepsDistrict':
                  return '.col-sm-4';
                case 'multiStepsState':
                  return '.col-sm-4';
                default:
                  return '.row';
              }
            }
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          submitButton: new FormValidation.plugins.SubmitButton()
        }
      }).on('core.form.valid', function () {
        // Jump to the next step when all fields in the current step are valid
        validationStepper.next();
      });

      // Account details
      const multiSteps3 = FormValidation.formValidation(stepsValidationFormStep3, {
        fields: {
          multiStepsUsername: {
            validators: {
              notEmpty: {
                message: 'Sila masukkan nama pengguna'
              },
              stringLength: {
                min: 6,
                max: 30,
                message: 'Nama mestilah lebih daripada 6 dan panjang kurang daripada 30 aksara'
              },
              regexp: {
                regexp: /^[a-zA-Z0-9 ]+$/,
                message: 'Nama hanya boleh terdiri daripada abjad dan nombor'
              }
            }
          },
          multiStepsEmail: {
            validators: {
              notEmpty: {
                message: 'Sila isi alamat emel'
              },
              emailAddress: {
                message: 'Alamat emel yang tidak sah'
              }
            }
          },
          multiStepsPass: {
            validators: {
              notEmpty: {
                message: 'Sila isi Kata Laluan'
              }
            }
          },
          multiStepsConfirmPass: {
            validators: {
              notEmpty: {
                message: 'Sahkan Kata Laluan diperlukan'
              },
              identical: {
                compare: function () {
                  return stepsValidationFormStep3.querySelector('[name="multiStepsPass"]').value;
                },
                message: 'Kata laluan dan pengesahannya tidak sama'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            // Use this for enabling/changing valid/invalid class
            // eleInvalidClass: '',
            eleValidClass: '',
            rowSelector: '.col-sm-6'
          }),
          autoFocus: new FormValidation.plugins.AutoFocus(),
          submitButton: new FormValidation.plugins.SubmitButton()
        },
        init: instance => {
          instance.on('plugins.message.placed', function (e) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          });
        }
      }).on('core.form.valid', function () {
        // Jump to the next step when all fields in the current step are valid
        alert('Berjaya')
        window.location.href = "../dashboard/staff/";
      });

      stepsValidationNext.forEach(item => {
        item.addEventListener('click', event => {
          // When click the Next button, we will validate the current step
          switch (validationStepper._currentIndex) {
            case 0:
              multiSteps1.validate();
              break;

            case 1:
              multiSteps2.validate();
              break;

            case 2:
              multiSteps3.validate();
              break;

            default:
              break;
          }
        });
      });

      stepsValidationPrev.forEach(item => {
        item.addEventListener('click', event => {
          switch (validationStepper._currentIndex) {
            case 2:
              validationStepper.previous();
              break;

            case 1:
              validationStepper.previous();
              break;

            case 0:

            default:
              break;
          }
        });
      });
    }
  })();
});