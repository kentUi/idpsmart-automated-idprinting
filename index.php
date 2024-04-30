<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
  <title>Two Columns Layout</title>
  <style>
    @import url('http://fonts.cdnfonts.com/css/akrobat');

    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .column {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .column:nth-child(odd) {
      background-color: #f0f0f0;
    }

    .column:nth-child(even) {
      background-color: #e0e0e0;
    }

    h1 {
      margin: 0;
    }

    img {
      max-width: 50%;
      height: auto;
    }

    @media screen {
      .container {
        flex-direction: row;
      }

      .column {
        width: 50%;
      }
    }

    @media print {
      @page {
        size: CR80;
        margin: 0;
      }

      body {
        background-color: white;
      }

      .container {
        flex-direction: column;
      }

      .column {
        width: 100%;
      }

      img {
        max-width: none;
        width: 100%;
        height: auto;
      }

      .profile {
        position: fixed;
        height: 105px;
        width: 105px;
        top: 55px !important;
        left: 55px !important;
      }

      .signature {
        width: 100px !important;
        position: absolute;
        top: 225px !important;
        z-index: 1;
      }

      .barcode {
        position: absolute;
        z-index: 1;
        top: 220px !important;
        height: 150px !important;
        width: 100px !important;
      }

      .txt_input {
        position: fixed;
        z-index: 1;
        left: -118px;
        margin-bottom: 5px !important;
      }

      .txt_input_name {
        position: fixed;
        top: 172px !important;
        z-index: 1;
        color: #fff !important;
        font-size: 10px !important;
      }

      .txt_input_course {
        position: fixed;
        top: 185px !important;
        z-index: 1;
        font-size: 10px !important;
      }

      .txt_input_sid {
        position: fixed;
        top: 202px !important;
        z-index: 1;
        left: 92px;
        font-size: 7px !important;
      }

      .txt_input_gender {
        position: fixed;
        top: 213px !important;
        z-index: 1;
        left: 92px;
        font-size: 7px !important;
      }

      .txt_input_birth {
        position: fixed;
        top: 223px !important;
        z-index: 1;
        left: 92px;
        font-size: 7px !important;
      }
    }

    #front {
      z-index: 1;
    }

    .signature {
      width: 200px;
      position: absolute;
      top: 610px;
      z-index: 1;
    }

    .profile {
      position: absolute;
      top: 220px;
      z-index: 0;
    }

    .barcode {
      position: absolute;
      z-index: 1;
      top: 660px;
      height: 200px;
      width: 250px;
    }

    #image {
      position: absolute;
      cursor: pointer;
      z-index: 0;
    }

    .infos {
      position: absolute;
      top: 470px;
      left: 255px;
      z-index: 999;
      font-family: 'Akrobat ExtraBold' !important;
    }

    .infos_2 {
      position: absolute;
      top: 547px;
      left: 455px;
      z-index: 999;
      font-family: 'Akrobat ExtraBold' !important;
    }

    .txt_input_2 {
      border: 0;
      font-weight: bold;
      font-size: 15px;
      color: #fff;
      width: 240px !important;
      background-color: transparent;
      text-align: left;
      text-transform: uppercase;
      font-family: 'Akrobat ExtraBold' !important;
      letter-spacing: 1px;
    }

    .txt_input {
      border: 0;
      font-weight: bold;
      font-size: 26px;
      color: #fff;
      width: 440px !important;
      background-color: transparent;
      text-align: center;
      text-transform: uppercase;
      font-family: 'Akrobat ExtraBold' !important;
    }
  </style>
</head>

<body onload="barcode(20231001)">
  <div class="container">
    <div class="column">
      <img src="./images/front.png" id="front">
      <img width="230" src="./images/2x2.png?<?= time() ?>" class="profile" id="image">
      <p class="infos">
        <input class="txt_input txt_input_name" style="color: #fff;" type="text" name="" value="KENT RUSSELL N. CASIÑO"><br>
        <input style="color: #ffba00;" class="txt_input txt_input_course" type="text" name="" value="BSBA">
      </p>

      <p class="infos_2">
        <input class="txt_input_2 txt_input_sid" style="color: #fff; margin-bottom: 2px" type="text" name="" value="20231001"><br>
        <input class="txt_input_2 txt_input_gender" style="color: #fff; margin-bottom: 2px" type="text" name="" value="Male"><br>
        <input class="txt_input_2 txt_input_birth" style="color: #fff;" type="text" name="" value="September 16, 1997">
      </p>
      <img width="230" src="./images/signature.png?<?= time() ?>" class="signature">
      <svg id="barcode" class="barcode"></svg>
    </div>
    <div class="column">
      <img src="./images/back.png" alt="">
    </div>
  </div>

  <script src="script.js"></script>
  <script>
    function barcode(id) {
      JsBarcode("#barcode", id, {
        displayValue: true,
        width: 3.5,
        height: 40,
        margin: 5,
      });
    }
  </script>
</body>

</html>