/**
 * BKIL - Edit
 */

'use strict';
(function () {
  const
    date = new Date(),
    firstDate = document.getElementById('firstDate');


  // Datepicker
  if (firstDate) {
    firstDate.flatpickr({
      monthSelectorType: 'static',
      "plugins": [new rangePlugin({ input: "#secondDate"})]
    });
  }

})();
// repeater (jquery)
$(function () {
  var applyChangesBtn = $('.btn-apply-changes'),
    tax1,
    tax2,
    taxInput1,
    taxInput2,
    sourceItem = $('.source-item')

  // Prevent dropdown from closing on tax change
  $(document).on('click', '.tax-select', function (e) {
    e.stopPropagation();
  });

  // On tax change update it's value value
  function updateValue(listener, el) {
    listener.closest('.repeater-wrapper').find(el).text(listener.val());
  }

  // Apply item changes btn
  if (applyChangesBtn.length) {
    $(document).on('click', '.btn-apply-changes', function (e) {
      var $this = $(this);
      taxInput1 = $this.closest('.dropdown-menu').find('#taxInput1');
      taxInput2 = $this.closest('.dropdown-menu').find('#taxInput2');
      tax1 = $this.closest('.repeater-wrapper').find('.tax-1');
      tax2 = $this.closest('.repeater-wrapper').find('.tax-2');

      if (taxInput1.val() !== null) {
        updateValue(taxInput1, tax1);
      }

      if (taxInput2.val() !== null) {
        updateValue(taxInput2, tax2);
      }
    });
  }

  // Repeater init
  if (sourceItem.length) {
    sourceItem.on('submit', function (e) {
      e.preventDefault();
    });
    sourceItem.repeater({
      show: function () {
        $(this).slideDown();
        // Initialize tooltip on load of each item
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        });
      },
      hide: function (e) {
        $(this).slideUp();
      }
    });
  }
});
