<?php

/* Call this function in the booking page like so: 
   $fieldErrors = validateBooking();
   If the array is empty, then no errors were generated
*/

$booking_info_out['day'] = "";
$booking_info_out['time'] = "";
$booking_info_out['movie'] = "";
$booking_info_out['movie_name'] = "";

$booking_info_out['user']['name'] = "";
$booking_info_out['user']['email'] = "";
$booking_info_out['user']['mobile'] = "";

$booking_info_out['seats']['sta']['qty'] = "";
$booking_info_out['seats']['stp']['qty'] = "";
$booking_info_out['seats']['stc']['qty'] = "";
$booking_info_out['seats']['fca']['qty'] = "";
$booking_info_out['seats']['fcp']['qty'] = "";
$booking_info_out['seats']['fcc']['qty'] = "";

function validateBooking($booking_info, $movies)
{
  $errors = []; // new empty array to return error messages
  $err=0;
  // Name
  if ($_POST['user']['name'] == '') {
    $errors['user']['name'] = "Name can't be blank";
  } else {
    if (preg_match("([a-zA-Z\s']){2,}", $_POST['user']['name'])) {
      $errors['user']['name'] = "Incorrect name format";
    }
  }
  // Mobile 
  if ($_POST['user']['mobile'] == '') {
    $errors['user']['mobile'] = "Phone # can't be blank";
  } else {
    if (preg_match("^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$", $_POST['user']['mobile'])) {
      $errors['user']['mobile'] = "Incorrect mobile format";
    }
  }
  // Email
  if ($_POST['user']['email'] == '') {
    $errors['user']['email'] = "Email can't be blank";
  } else {
    if (!filter_var($_POST['user']['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['user']['email'] = "Incorrect Email";
    }
  }
  // Checking if movie code is valid
  $pass = 0;
  $x = 0;
  for ($i = 0; $i < count($movies); $i++) {
    if ($_POST['movie'] == $movies[$i]['code']) {
      $pass = 1;
      $x = $i;
    }
  }
  if ($pass == 0) {
    $err=1;
    $errors['movie'] = "Incorrect Movie code";
  }

  // Checking if the day is valid
  $pass = 0;
  foreach ($movies[$x]['timings'] as $items) {
    if ($items[0] == $_POST['DAY']) {
      
      $pass = 1;
    }
  }
  if ($pass == 0) {
    $err=1;
    $errors['day'] = "Incorrect Movie day";
  }

  // Checking quantities
  if (!(($_POST['seats']['STA'] == "" || $_POST['seats']['STA'] < 11) &&
    ($_POST['seats']['STP'] == "" || $_POST['seats']['STP'] < 11) &&
    ($_POST['seats']['STC'] == "" || $_POST['seats']['STC'] < 11) &&
    ($_POST['seats']['FCA'] == "" || $_POST['seats']['FCA'] < 11) &&
    ($_POST['seats']['FCP'] == "" || $_POST['seats']['FCP'] < 11) &&
    ($_POST['seats']['FCC'] == "" || $_POST['seats']['FCC'] < 11))) {
    $err=1;
    $errors['seats']['qty'] = "Incorrect SEATS QTY";
  }

  // Checking length
  if (($_POST['seats']['STA'] == "" &&
    $_POST['seats']['STP'] == ""  &&
    $_POST['seats']['STC'] == ""  &&
    $_POST['seats']['FCA'] == ""  &&
    $_POST['seats']['FCP'] == ""  &&
    $_POST['seats']['FCC'] == "")) {
    $errors['seats']['qty_length'] = "Please select seats";
  }
  print_r($errors);

  if($err==1){
    header('Location: ./index.php');
  }


  if (count($errors) != 0) {
    return $errors;
  } else {
    receipt($booking_info);
  }
}

if (isset($_POST['user']['name'])) {
  $day = explode("-", $_POST['DAY']);
  $booking_info['day'] = $day[0];
  $booking_info['time'] = $day[1];
  $booking_info['movie'] = $_POST['movie'];
  $booking_info['movie_name'] = $_POST['movie_name'];
  $booking_info['total'] = 0;


  $booking_info['user']['name'] = $_POST['user']['name'];
  $booking_info['user']['email'] = $_POST['user']['email'];
  $booking_info['user']['mobile'] = $_POST['user']['mobile'];

  if ($_POST['seats']['STA'] != "") {
    $booking_info['seats']['sta']['qty'] = $_POST['seats']['STA'];
    $total = explode("$", $_POST['sta_label']);
    $booking_info['seats']['sta']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['sta']['qty'] = '0';
    $booking_info['seats']['sta']['total'] = '0.0';
  }

  if ($_POST['seats']['STP'] != "") {
    $booking_info['seats']['stp']['qty'] = $_POST['seats']['STP'];
    $total = explode("$", $_POST['stp_label']);
    $booking_info['seats']['stp']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['stp']['qty'] = '0';
    $booking_info['seats']['stp']['total'] = '0.0';
  }

  if ($_POST['seats']['STC'] != "") {
    $booking_info['seats']['stc']['qty'] = $_POST['seats']['STC'];
    $total = explode("$", $_POST['stc_label']);
    $booking_info['seats']['stc']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['stc']['qty'] = '0';
    $booking_info['seats']['stc']['total'] = '0.0';
  }

  if ($_POST['seats']['FCA'] != "") {
    $booking_info['seats']['fca']['qty'] = $_POST['seats']['FCA'];
    $total = explode("$", $_POST['fca_label']);
    $booking_info['seats']['fca']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['fca']['qty'] = '0';
    $booking_info['seats']['fca']['total'] = '0.0';
  }

  if ($_POST['seats']['FCP'] != "") {
    $booking_info['seats']['fcp']['qty'] = $_POST['seats']['FCP'];
    $total = explode("$", $_POST['fcp_label']);
    $booking_info['seats']['fcp']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['fcp']['qty'] = '0';
    $booking_info['seats']['fcp']['total'] = '0.0';
  }

  if ($_POST['seats']['FCC'] != "") {
    $booking_info['seats']['fcc']['qty'] = $_POST['seats']['FCC'];
    $total = explode("$", $_POST['fcc_label']);
    $booking_info['seats']['fcc']['total'] = $total[1];
    $booking_info['total'] += (float)$total[1];
  } else {
    $booking_info['seats']['fcc']['qty'] = '0';
    $booking_info['seats']['fcc']['total'] = '0.0';
  }
  $booking_info_out = $booking_info;
  validateBooking($booking_info, $movies);
}
