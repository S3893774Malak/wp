<?php
include_once './tools.php';
include_once './post-validation.php';

if (!isset($_GET['movie'])) {
  header('Location: ./index.php');
}
$movie = $_GET['movie'];
if ($movie == "") {
  header('Location: ./index.php');
}

$pass = 0;
for ($i = 0; $i < count($movies); $i++) {
  if ($movie == $movies[$i]['code']) {
    $movie_details = $movies[$i];
    $pass = 1;
  }
}
if ($pass == 0) {
  header('Location: ./index.php');
}
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
    <section class="movie-info">
      <h1>Synopsis</h1>
      <p>
        <?php foreach ($movie_details['synopsis'] as $items) {
          echo $items . "<br><br> ";
        }
        ?>

      </p>

      <h1>Actors</h1>
      <p>
        <?php foreach ($movie_details['actors'] as $items) {
          echo '- ' . $items . "<br> ";
        }
        ?>
      </p>

      <h1>Director</h1>
      <p>- <?php echo $movie_details['director']; ?></p>
    </section>

    <section class="trailer">
      <h2 style="font-weight: 900 !important">TRAILER</h2>
      <br />
      <iframe src="<?php echo $movie_details['trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section class="booking-form">
      <div class="container1">
        <form action="" method="post" id="submit-form">
          <input type="text" name="movie" value="<?php echo $movie; ?>" hidden />
          <input type="text" name="movie_name" value="<?php echo $movie_details['name']; ?>" hidden />
          <div class="row">
            <div class="col-25">
              <label for="fname">Standard Adult</label>
            </div>
            <div class="col-60">

              <select name="seats[STA]">

                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="20.50" data-discprice="15.00">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="20.50" data-discprice="15.00">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="20.50" data-discprice="15.00">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="20.50" data-discprice="15.00">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="20.50" data-discprice="15.00">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="20.50" data-discprice="15.00">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="20.50" data-discprice="15.00">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="20.50" data-discprice="15.00">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="20.50" data-discprice="15.00">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="20.50" data-discprice="15.00">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="sta_label" id="sta_label" readonly="readonly" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Standard Concession</label>
            </div>
            <div class="col-60">
              <select name="seats[STP]">
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="18.00" data-discprice="13.50">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="18.00" data-discprice="13.50">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="18.00" data-discprice="13.50">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="18.00" data-discprice="13.50">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="18.00" data-discprice="13.50">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="18.00" data-discprice="13.50">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="18.00" data-discprice="13.50">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="18.00" data-discprice="13.50">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="18.00" data-discprice="13.50">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['stp']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="18.00" data-discprice="13.50">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="stp_label" id="stp_label" readonly="readonly" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Standard Child</label>
            </div>
            <div class="col-60">
              <select name="seats[STC]">
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="16.50" data-discprice="12.00">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="16.50" data-discprice="12.00">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="16.50" data-discprice="12.00">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="16.50" data-discprice="12.00">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="16.50" data-discprice="12.00">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="16.50" data-discprice="12.00">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="16.50" data-discprice="12.00">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="16.50" data-discprice="12.00">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="16.50" data-discprice="12.00">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['stc']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="16.50" data-discprice="12.00">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="stc_label" id="stc_label" readonly="readonly" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">First Class Adult</label>
            </div>
            <div class="col-60">
              <select name="seats[FCA]">
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="30.00" data-discprice="24.00">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="30.00" data-discprice="24.00">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="30.00" data-discprice="24.00">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="30.00" data-discprice="24.00">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="30.00" data-discprice="24.00">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="30.00" data-discprice="24.00">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="30.00" data-discprice="24.00">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="30.00" data-discprice="24.00">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="30.00" data-discprice="24.00">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['fca']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="30.00" data-discprice="24.00">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="fca_label" id="fca_label" readonly="readonly" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">First Class Concession</label>
            </div>
            <div class="col-60">
              <select name="seats[FCP]">
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="27.00" data-discprice="22.50">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="27.00" data-discprice="22.50">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="27.00" data-discprice="22.50">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="27.00" data-discprice="22.50">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="27.00" data-discprice="22.50">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="27.00" data-discprice="22.50">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="27.00" data-discprice="22.50">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="27.00" data-discprice="22.50">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="27.00" data-discprice="22.50">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['fcp']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="27.00" data-discprice="22.50">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="fcp_label" id="fcp_label" readonly="readonly">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">First Class Child</label>
            </div>
            <div class="col-60">
              <select name="seats[FCC]">
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '') ? 'selected' : ''; ?> value="">Please Select</option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '1') ? 'selected' : ''; ?> value="1" data-fullprice="24.00" data-discprice="21.00">
                  1
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '2') ? 'selected' : ''; ?> value="2" data-fullprice="24.00" data-discprice="21.00">
                  2
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '3') ? 'selected' : ''; ?> value="3" data-fullprice="24.00" data-discprice="21.00">
                  3
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '4') ? 'selected' : ''; ?> value="4" data-fullprice="24.00" data-discprice="21.00">
                  4
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '5') ? 'selected' : ''; ?> value="5" data-fullprice="24.00" data-discprice="21.00">
                  5
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '6') ? 'selected' : ''; ?> value="6" data-fullprice="24.00" data-discprice="21.00">
                  6
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '7') ? 'selected' : ''; ?> value="7" data-fullprice="24.00" data-discprice="21.00">
                  7
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '8') ? 'selected' : ''; ?> value="8" data-fullprice="24.00" data-discprice="21.00">
                  8
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '9') ? 'selected' : ''; ?> value="9" data-fullprice="24.00" data-discprice="21.00">
                  9
                </option>
                <option <?php echo ($booking_info_out['seats']['sta']['qty'] == '10') ? 'selected' : ''; ?> value="10" data-fullprice="24.00" data-discprice="21.00">
                  10
                </option>
              </select>
            </div>
            <div class="col-15">
              <input type="text" name="fcc_label" id="fcc_label" readonly="readonly" />
            </div>
          </div>
          <div class="row">
            <div class="col-100">
              <?php foreach ($movie_details['timings'] as $items) {
              ?>
                <span class="inpt-btn">
                  <input type="radio" id="<?php echo $items[2]; ?>" <?php echo ($booking_info_out['day'] . "-" . $booking_info_out['time'] == $items[0]) ? 'checked' : ''; ?> name="DAY" value="<?php echo $items[0]; ?>" data-pricing="<?php echo $items[1]; ?>" />
                  <label for="<?php echo $items[2]; ?>"><?php echo $items[0]; ?></label>
                </span>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Full name</label>
            </div>
            <div class="col-75">
              <input type="text" name="user[name]" id="user_name" pattern="([a-zA-Z\s']){2,}" value="<?php echo $booking_info_out['user']['name']; ?>" required placeholder="Enter Full Name" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Email Address</label>
            </div>
            <div class="col-75">
              <input type="email" name="user[email]" id="user_email" required value="<?php echo $booking_info_out['user']['email']; ?>" placeholder="Enter Email" />
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Mobile</label>
            </div>
            <div class="col-75">
              <input type="text" name="user[mobile]" id="user_phone" value="<?php echo $booking_info_out['user']['mobile']; ?>" pattern="^(?:\+?(61))? ?(?:\((?=.*\)))?(0?[2-57-8])\)? ?(\d\d(?:[- ](?=\d{3})|(?!\d\d[- ]?\d[- ]))\d\d[- ]?\d[- ]?\d{3})$" placeholder="(02) 1234 5678" required />
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-75">
              <span class="inpt-btn">
                <input type="radio" id="remember" name="remember" value="remember" />
                <label for="remember">Remember me</label>
              </span>
              <span class="inpt-btn">
                <input type="radio" id="forget" name="forget" value="forget" />
                <label for="forget">Forget me</label>
              </span>
            </div>
            <div class="col-25">
              <br>
              <input type="submit" value="Submit" id="submit-btn" />
            </div>

          </div>
        </form>
      </div>
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