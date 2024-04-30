
function barcode(id) {
  JsBarcode("#barcode", id, {
    displayValue: true,
    width: 3.5,
    height: 40,
    margin: 5,
  });
  generateQRCode('12Kent Russell Casiño345');
}

const url = location.href;
const loc = new URL(url);
let myURL = loc.hostname;

var canvas = document.getElementById("qr-code");

var qr;
(function () {
  qr = new QRious({
    element: document.getElementById('qr-code'),
    size: 250,
    value: 'Kent Russell Casiño'
  });
})();

function generateQRCode(qr_text) {

  qr.set({
    foreground: 'black',
    size: 280,
    value: qr_text,
  });
}