/**
 * Invoice Print
 */

'use strict';

window.print();
window.onafterprint = back;

function back() {
    window.history.back();
}
