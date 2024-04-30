<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
  <title>Two Columns Layout</title>
  <link rel="stylesheet" href="./assets/css/format.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/media.css">
</head>

<body onload="barcode(20231001)">
  <div class="container">
    <div class="column">
      <img src="./assets/layout/front.png" id="front">
      <img width="230" src="./assets/layout/2x2.png?<?= time() ?>" class="profile" id="image">
      <p class="infos">
        <input class="txt_input txt_input_name" style="color: #fff;" type="text" name="" value="KENT RUSSELL N. CASIÑO"><br>
        <input style="color: #ffba00;" class="txt_input txt_input_course" type="text" name="" value="BSBA">
      </p>

      <p class="infos_2">
        <input class="txt_input_2 txt_input_sid" style="color: #fff; margin-bottom: 2px" type="text" name="" value="20231001"><br>
        <input class="txt_input_2 txt_input_gender" style="color: #fff; margin-bottom: 2px" type="text" name="" value="Male"><br>
        <input class="txt_input_2 txt_input_birth" style="color: #fff;" type="text" name="" value="September 16, 1997">
      </p>
      <img width="230" src="./assets/layout/signature.png?<?= time() ?>" class="signature">
      <svg id="barcode" class="barcode"></svg>
    </div>
    <div class="column">
      <img src="./assets/layout/back.png?<?= time() ?>" alt="">
      <canvas id="qr-code" class="qr-code"></canvas>
      <p class="infos_3_cname">
        <input class="txt_input_3_cname txt_input_cname" style="color: #000; margin-bottom: 2px" type="text" name="" value="KENT RUSSELL N. CASINO"><br>
      </p> 
      <p class="infos_3_crelation">
        <input class="txt_input_3_crelation txt_input_cname" style="color: #000; margin-bottom: 2px" type="text" name="" value="BROTHER"><br>
      </p>
      <p class="infos_3_cphone">
        <input class="txt_input_3_cphone txt_input_cname" style="color: #000; margin-bottom: 2px" type="text" name="" value="09758669139"><br>
      </p>
    </div>
  </div>

  <script src="./assets/js/script.js"></script>
</body>

</html>