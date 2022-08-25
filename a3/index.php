<?php
include_once './tools.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging , add your css to style.css -->
  <link id="wireframecss" type="text/css" rel="stylesheet" href="../wireframe.css" disabled />
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=
    <?= filemtime("style.css"); ?>
    ">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
    <div class="topnav" id="myTopnav">
      <a href="#about">About Us</a>
      <a href="#seatAndPrice">Seats and Price</a>
      <a href="#shows">Shows</a>
      <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </nav>

  <main class="content1" id="myMain">
    <section id="about" class="about">
      <ul style="line-height: 30px">
        <li style="padding-bottom: 20px">
          The Cinema has reopend after extensive improvements and renovations.
        </li>
        <li style="padding-bottom: 20px">
          There are new seats: standard seats and reclinable first class
          seats.
        </li>
        <li style="padding-bottom: 20px">
          The projection and sound systems are upgraded with 3D Dolby Vision
          projection and Dolby Atmos Sound.
        </li>
        <li style="padding-bottom: 20px">
          See
          <a style="
                color: white;
                background: rgba(0, 0, 0, 0.7);
                padding: 1px 4px;
              " target="_blank" href="https://www.dolby.com/us/en/cinema/">https://www.dolby.com/us/en/cinema/</a>
          for more information
        </li>
      </ul>
    </section>
    <section id="seatAndPrice" class="seatAndPrice">
      <div class="container">
        <div class="seats">
          <img src="./../../media/Profern-Standard-Twin.png" alt="" />
          <p>Profern Standard Twin</p>
        </div>
        <div class="seats">
          <img src="./../../media/Profern-Verona-Twin.png" alt="" />
          <p>Profern Verona Twin</p>
        </div>
      </div>

      <hr />
      <br />
      <p style="text-align: center">Seat Prices</p>
      <div style="overflow-x: auto">
        <table>
          <tr>
            <th>Seat Type</th>
            <th>Seat Cost</th>
            <th>Discounted Prices</th>
            <th>Normal Prices</th>
          </tr>
          <tr>
            <td>Standard Adult</td>
            <td>STA</td>
            <td>15.00</td>
            <td>20.50</td>
          </tr>
          <tr>
            <td>Standard Concession</td>
            <td>STP</td>
            <td>13.50</td>
            <td>18.00</td>
          </tr>
          <tr>
            <td>Standard Child</td>
            <td>STC</td>
            <td>12.00</td>
            <td>16.50</td>
          </tr>
          <tr>
            <td>First Class Adult</td>
            <td>FCA</td>
            <td>24.00</td>
            <td>30.00</td>
          </tr>
          <tr>
            <td>First Class Concession</td>
            <td>FCT</td>
            <td>22.50</td>
            <td>27.00</td>
          </tr>
          <tr>
            <td>First Class Child</td>
            <td>FCC</td>
            <td>21.00</td>
            <td>24.00</td>
          </tr>
        </table>
      </div>
      <br>

      <hr />
      <br />
      <p style="text-align: center">Movies and Weekly Session Times</p>
      <div style="overflow-x: auto;">
        <table style="width: 80%">
          <tr>
            <th>Movie Title</th>
            <th>Code</th>
            <th>Mon - Tue</th>
            <th>Wed - Fri</th>
            <th>Sat - Sun</th>
            <th>IMDB Link</th>
          </tr>
          <tr>
            <td>Top Gun: Maverick</td>
            <td>ACT</td>
            <td>9pm</td>
            <td>9pm</td>
            <td>6pm</td>
            <td><a href="https://www.imdb.com/title/tt1745960/">https://www.imdb.com/title/tt1745960/</a></td>
          </tr>
          <tr>
            <td>Mrs Haris goes to paris</td>
            <td>RMC</td>
            <td>-</td>
            <td>12pm</td>
            <td>3pm</td>
            <td><a href="https://www.imdb.com/title/tt5151570/">https://www.imdb.com/title/tt5151570/</a></td>
          </tr>
          <tr>
            <td>Lightyear</td>
            <td>FAM</td>
            <td>12pm</td>
            <td>6pm</td>
            <td>12pm</td>
            <td><a href="https://www.imdb.com/title/tt10298810/">https://www.imdb.com/title/tt10298810/</a></td>
          </tr>
          <tr>
            <td>Prithviraj</td>
            <td>AHF</td>
            <td>6pm</td>
            <td>-</td>
            <td>9pm</td>
            <td><a href="https://www.imdb.com/title/tt9637132/">https://www.imdb.com/title/tt9637132/</a></td>
          </tr>

        </table>
      </div>
    </section>
    <section id="shows" class="shows">
      <div id="show" class="show">
        <!-- partial:index.partial.html -->
        <!-- flip-card-container -->

        <?php for ($i = 0; $i < count($movies); $i++) { ?>
          <div class="flip-card-container" style="--hue: 220">
            <div class="flip-card">
              <div class="card-front">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img1" src="<?php echo $movies[$i]['image']; ?>" />
                  <figcaption class="title">
                    <?php echo $movies[$i]['name']; ?>
                  </figcaption>

                  <span class="rating">Rating: <?php foreach ($movies[$i]['ratings'] as $items) {
                                                  echo $items . ", ";
                                                }
                                                ?></span>
                </figure>
              </div>

              <div class="card-back">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img2" src="<?php echo $movies[$i]['image']; ?>" />
                  <button onclick="window.location.href='./booking.php?movie=<?php echo $movies[$i]['code']; ?>'">
                    Book Now
                  </button>
                </figure>

                <ul>
                  <li>
                    <?php echo $movies[$i]['summary']; ?>
                  </li>
                  <br />
                  <br>
                  <br>
                  <li style="font-weight: 800">Show Timings:</li>
                  <li>
                    <?php foreach ($movies[$i]['timings'] as $items) {
                      echo '- ' . $items[0] . "<br> ";
                    }
                    ?>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
        <!-- /flip-card-container -->
      </div>
    </section>
  </main>

  <footer id="myFooter" class="footer">
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
</body>

</html>
<script src="./main.js"></script>
<script src="./script.js"></script>
