<?php
session_start();
$exists = -1;

if (isset($_POST['booking_name'])) {
  $name = $_POST['booking_name'];
  $email = $_POST['booking_email'];

  if (($open = fopen("bookings.txt", "r")) !== FALSE) {

    while (($data = fgetcsv($open, 1000, "\t")) !== FALSE) {
      $array[] = $data;
    }
    $array = array_map(function ($v) {
      if (
        $v[0] == ' ' ||
        $v[0] == '____________________________________________________________________________________________________________________________________' ||
        $v[0] == '===================================================================================================================================='
      ) {
        unset($v);
      } else {
        return $v;
      }
    }, $array);

    fclose($open);
  }
  $n_array = [];
  foreach ($array as $item) {
    if ($item) {
      $n_array[] = $item;
    }
  }

  for ($i = 0; $i < count($n_array); $i++) {
    $chk1 = ($n_array[$i][1] == $name);
    $chk2 = ($n_array[$i][2] == $email);
    if ($chk2 == 1 && $chk2 == 1) {
      $exists = $i;
    }
  }
  $i = $exists;

  if ($exists != -1) {
    $booking_info_out['date'] = $n_array[$i][0];
    $booking_info_out['day'] = $n_array[$i][5];
    $booking_info_out['time'] = $n_array[$i][6];
    $booking_info_out['movie'] = $n_array[$i][4];
    $booking_info_out['movie_name'] = $n_array[$i][4];
    $tot = ltrim($n_array[$i + 2][12], '$');
    $booking_info_out['total'] = (float)$tot;

    $booking_info_out['user']['name'] = $n_array[$i][1];
    $booking_info_out['user']['email'] = $n_array[$i][2];
    $booking_info_out['user']['mobile'] = $n_array[$i][3];

    $booking_info_out['seats']['sta']['qty'] = ltrim($n_array[$i + 2][0], '$');
    $booking_info_out['seats']['stp']['qty'] = ltrim($n_array[$i + 2][2], '$');
    $booking_info_out['seats']['stc']['qty'] = ltrim($n_array[$i + 2][4], '$');
    $booking_info_out['seats']['fca']['qty'] = ltrim($n_array[$i + 2][6], '$');
    $booking_info_out['seats']['fcp']['qty'] = ltrim($n_array[$i + 2][8], '$');
    $booking_info_out['seats']['fcc']['qty'] = ltrim($n_array[$i + 2][10], '$');

    $booking_info_out['seats']['sta']['total'] = ltrim($n_array[$i + 2][1], '$');
    $booking_info_out['seats']['stp']['total'] = ltrim($n_array[$i + 2][3], '$');
    $booking_info_out['seats']['stc']['total'] = ltrim($n_array[$i + 2][5], '$');
    $booking_info_out['seats']['fca']['total'] = ltrim($n_array[$i + 2][7], '$');
    $booking_info_out['seats']['fcp']['total'] = ltrim($n_array[$i + 2][9], '$');
    $booking_info_out['seats']['fcc']['total'] = ltrim($n_array[$i + 2][11], '$');

    $_SESSION['booking_info'] = array();
    array_push($_SESSION['booking_info'], $booking_info_out);
  }
} else {
  header('Location: ./index.php');
}
?>




<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lunardo Booking Page</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->

  <link id="wireframecss" type="text/css" rel="stylesheet" href="../wireframe.css" disabled />
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=
    <?= filemtime("style.css"); ?>
    ">
  <script src="../wireframe.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
  <header class="header" id="myHeader">
    <div class="topHeader">
      <span class="logo"><img class="logoImg" src="../../media/logo.png" alt="Logo pic" /></span>
      <p class="companyName">Leonardo Cinema</p>
    </div>
  </header>

  <nav class="nav" id="myNav">
    <div class="topnav1" id="myTopnav1">
      <a href="./index.php">HOME</a>
    </div>
  </nav>

  <main class="content">
    <section class="movie-info1">
      <?php if ($exists == -1) { ?>
        <h1 style="padding-top: 130px;">Booking information</h1>
        <p>
          There is no booking against this record.
        </p>
      <?php } else { ?>
        <h1>Booking information</h1>
        <p>
          Following is the result of your latest booking with us:
          <br>
          <br>
          NAME: <?php echo $booking_info_out['user']['name']; ?>
          <br>
          EMAIL: <?php echo $booking_info_out['user']['email']; ?>
          <br>
          PHONE: <?php echo $booking_info_out['user']['mobile']; ?>
          <br>
          MOVIE: <?php echo $booking_info_out['movie']; ?>
          <br>
          BOOKING DATE: <?php echo $booking_info_out['date']; ?>
          <br>
        <form action="./invoice.php" method="POST">
          <input type="submit" value="Print the invoice & Ticket" id="submit-btn" style="float: left; margin:10px 30px;">
        </form>
        </p>
      <?php
      } ?>
    </section>


  </main>
  <footer id="myFooter" class="footer">

    <form action="./currentbookings.php" method="POST" style="width: 50%;">
      <div>Check your previous booking info:</div>
      <br>
      <input type="text" name="booking_name" id="booking_name" placeholder="Your Name" required>
      <input type="email" name="booking_email" id="booking_name" placeholder="Your email" required>

      <input type="submit" value="Check" style="padding: 10px; ">
    </form>
    <br>
    <div>
      &copy;
      <script>
        document.write(new Date().getFullYear());
      </script>
      Put your name(s), student number(s) and group name here. Last modified
      <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
    </div>
    <div>
      Disclaimer: This website is not a real website and is being developed as
      part of a School of Science Web Programming course at RMIT University in
      Melbourne, Australia.
    </div>

  </footer>
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

<script src="./main.js"></script>
<script src="./script.js"></script>
<script>
  if (personal_info) {
    $("#remember").prop("checked", true);
    $("#forget").prop("checked", false);

    $("#user_name").val(personal_info[0]);
    $("#user_email").val(personal_info[1]);
    $("#user_phone").val(personal_info[2]);
  } else {
    $("#remember").prop("checked", false);
    $("#forget").prop("checked", true);
  }
</script>