<?php
session_start();
if (!isset($_SESSION['booking_info'])) {
  header('Location: ./booking.php');
}
$booking_info = $_SESSION['booking_info'];


?>
<html>

<head>
  <title>Tickets & Receipt</title>
  <style>
    body {
      width: 230mm;
      height: 100%;
      margin: 0 auto;
      padding: 0;
      font-size: 12pt;
      background: rgb(204, 204, 204);
    }

    * {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
    }

    .main-page {
      width: 210mm;
      min-height: 297mm;
      margin: 10mm auto;
      background: white;
      box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }

    .sub-page {
      padding: 1cm;
      height: 297mm;
    }

    .sub-sub-page {
      padding: 1cm;
      height: 99mm;
    }

    @page {
      size: A4;
      margin: 0;
    }

    @media print {

      html,
      body {
        width: 210mm;
        height: 297mm;
        -webkit-print-color-adjust: exact;
      }

      .main-page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
      }
    }

    .container {
      display: flex;
      flex-direction: row;
      width: 100%;
    }

    .col-70 {
      width: 70%;
    }

    .col-30 {
      width: 30%;
    }

    table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    table td,
    table th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    table tr:hover {
      background-color: #ddd;
    }

    table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #e84c3d;
      color: white;
    }

    .logoImg {
      width: auto;
      height: 55px;
    }
  </style>
</head>

<body>
  <div class="main-page">









    <div class="sub-page">
      <div class="container">
        <div class="col-70">
          <h3>LEONARDO CINEMA</h3>
          <p>contact@leonardo-cinema.com</p>
          <p>+61 4 1234 5678</p>
        </div>
        <div class="col-30">
          <h3 style="float:right;">SALE INVOICE</h3>
        </div>
      </div>
      <hr>

      <h3>Customer Information</h3>
      <p>Name:&nbsp;&nbsp;&nbsp; <?php echo '<span style="font-weight: 900">' . $booking_info[0]['user']['name'] . '</span>'; ?></p>
      <p>Email:&nbsp;&nbsp;&nbsp; <?php echo '<span style="font-weight: 900">' . $booking_info[0]['user']['email'] . '</span>'; ?></p>
      <p>Phone:&nbsp;&nbsp;&nbsp; <?php echo '<span style="font-weight: 900">' . $booking_info[0]['user']['mobile'] . '</span>'; ?></p>
      <br>
      <h3>Sales Information</h3>
      <table>
        <tr>
          <th>Sr #</th>
          <th>Seat Type</th>
          <th>Seat Qty</th>
          <th>Sub Total</th>
        </tr>
        <tr>
          <td>1</td>
          <td>STA</td>
          <td><?php echo $booking_info[0]['seats']['sta']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['sta']['total']; ?></td>
        </tr>
        <tr>
          <td>2</td>
          <td>STP</td>
          <td><?php echo $booking_info[0]['seats']['stp']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['stp']['total']; ?></td>
        </tr>
        <tr>
          <td>3</td>
          <td>STC</td>
          <td><?php echo $booking_info[0]['seats']['stc']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['stc']['total']; ?></td>
        </tr>
        <tr>
          <td>4</td>
          <td>FCA</td>
          <td><?php echo $booking_info[0]['seats']['fca']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['fca']['total']; ?></td>
        </tr>
        <tr>
          <td>5</td>
          <td>FCP</td>
          <td><?php echo $booking_info[0]['seats']['fcp']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['fcp']['total']; ?></td>
        </tr>
        <tr>
          <td>6</td>
          <td>FCC</td>
          <td><?php echo $booking_info[0]['seats']['fcc']['qty']; ?></td>
          <td><?php echo '$' . $booking_info[0]['seats']['fcc']['total']; ?></td>
        </tr>
        <tr>
          <td colspan="3" style="font-weight: 900">Total (Exc. ATO)</td>
          <td style="font-weight: 900"><?php echo '$' . (float)$booking_info[0]['total'] - number_format((float)$booking_info[0]['total'] / 11, 2); ?></td>
        </tr>
        <tr>
          <td colspan="3" style="font-weight: 900">ATO</td>
          <td style="font-weight: 900"><?php echo '$' . number_format((float)$booking_info[0]['total'] / 11, 2); ?></td>
        </tr>
        <tr>
          <td colspan="3" style="font-weight: 900">Total (Inc. ATO)</td>
          <td style="font-weight: 900"><?php echo '$' . $booking_info[0]['total']; ?></td>
        </tr>
      </table>


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <hr>
      <div style="display:flex; flex-direction:row;">
        <div>
          <p>LEONARDO CINEMA</p>
          <p>contact@leonardo-cinema.com</p>
          <p>+61 4 1234 5678</p>
        </div>
        <div style="padding-left: 340px; padding-top: 30px;">
          <span class="logo"><img class="logoImg" src="../../media/logo.png" alt="Logo pic" /></span>
        </div>

      </div>
    </div>




    <?php
    $qty = $booking_info[0]['seats']['sta']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">STA</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>

    <?php
    $qty = $booking_info[0]['seats']['stp']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">STP</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>

    <?php
    $qty = $booking_info[0]['seats']['stc']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">STC</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>

    <?php
    $qty = $booking_info[0]['seats']['fca']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">FCA</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>

    <?php
    $qty = $booking_info[0]['seats']['fcp']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">FCP</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>

    <?php
    $qty = $booking_info[0]['seats']['fcc']['qty'];
    for ($i = 1; $i <= $qty; $i++) {
    ?>
      <div class="sub-sub-page">
        <div class="container">
          <div class="col-70">
            <div style="background-color: #e84c3d; height: 22mm; ">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">LEONARDO CINEMA</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; padding: 15px 0px 0px 40px;">
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;"><?php echo $booking_info[0]['movie_name']; ?></span>
              <br>
              <span>Movie</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 19px;"><?php echo $booking_info[0]['user']['name']; ?></span>
              <br>
              <span>Customer name</span>
              <br>
              <br>

              <span style="font-weight: 700; font-size: 16px;"><?php echo $booking_info[0]['day'] . ' ' . $booking_info[0]['time']; ?></span>
              <br>
              <span>Day</span>

            </div>
          </div>
          <div class="col-30">
            <div style="background-color: #e84c3d; height: 22mm;">
              <h2 style="margin: 15px; padding-top: 25px; color: white;">Entry Ticket</h2>
            </div>
            <div style="background-color: #ecedef; height: 53mm; display: flex; flex-direction: column; justify-content: center; align-items: center;">
              <span style="font-weight: 900; font-size: 45px; color:  #e84c3d;"><?php echo $i; ?></span>
              <span>SEAT</span>
              <br>
              <span style="font-weight: 700; font-size: 25px; color:  #e84c3d;">FCC</span>
              <span>TYPE</span>
            </div>
          </div>
        </div>

      </div>

    <?php
    } ?>





  </div>
  <aside id="debug">
    <hr />
    <h3>Debug Area</h3>
    <pre>
          GET Contains:
          <?php error_reporting(E_ERROR | E_PARSE);
          print_r($_GET) ?>
          POST Contains:
          <?php print_r($_POST);
          echo $_POST['user']['name'];
          ?>
          SESSION Contains:
          <?php print_r($_SESSION) ?>
      </pre>
  </aside>
</body>

</html>