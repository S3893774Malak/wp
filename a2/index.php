<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link
      id="wireframecss"
      type="text/css"
      rel="stylesheet"
      href="../wireframe.css"
      disabled
    />
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=
    <?= filemtime("style.css"); ?>
    ">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="../wireframe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>
    <header class="header" id="myHeader">
      <div class="topHeader">
        <span class="logo"
          ><img class="logoImg" src="../../media/RMIT-Logo.png" alt="Logo pic"
        /></span>
        <p class="companyName">Lunarado Cinema</p>
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
            <a
              style="
                color: white;
                background: rgba(0, 0, 0, 0.7);
                padding: 1px 4px;
              "
              target="_blank"
              href="https://www.dolby.com/us/en/cinema/"
              >https://www.dolby.com/us/en/cinema/</a
            >
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
      </section>
      <section id="shows" class="shows">
        <div id="show" class="show">
          <!-- partial:index.partial.html -->
          <!-- flip-card-container -->
          <div class="flip-card-container" style="--hue: 220">
            <div class="flip-card">
              <div class="card-front">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img
                    class="img1"
                    src="../../media/shawshank_redemption.jfif"
                  />
                  <figcaption class="title">
                    The Shawshank Redemption
                  </figcaption>

                  <span class="rating">Rating: R</span>
                </figure>
              </div>

              <div class="card-back">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img
                    class="img2"
                    src="../../media/shawshank_redemption.jfif"
                  />
                  <button
                    onclick="window.location.href='./booking.php?movie=SHAWSHANK'"
                  >
                    Book Now
                  </button>
                </figure>

                <ul>
                  <li>
                    Two imprisoned men bond over a number of years, finding
                    solace and eventual redemption through acts of common
                    decency.
                  </li>
                  <br />
                  <li style="font-weight: 800">Show Timings:</li>
                  <li>
                    - Saturday, Jun 25, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                  <br />
                  <li>
                    - Sunday, Jun 26, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /flip-card-container -->

          <!-- flip-card-container -->
          <div class="flip-card-container" style="--hue: 170">
            <div class="flip-card">
              <div class="card-front">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img1" src="../../media/godfather.jfif" />
                  <figcaption class="title">The Godfather</figcaption>
                  <span class="rating">Rating: R, TV-14</span>
                </figure>
              </div>

              <div class="card-back">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img2" src="../../media/godfather.jfif" />
                  <button
                    onclick="window.location.href='./booking.php?movie=GODFATHER'"
                  >
                    Book Now
                  </button>
                </figure>
                <ul>
                  <li>
                    The aging patriarch of an organized crime dynasty in postwar
                    New York City transfers control of his clandestine empire to
                    his reluctant youngest son.
                  </li>
                  <br />
                  <li style="font-weight: 800">Show Timings:</li>
                  <li>
                    - Saturday, Jun 25, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                  <br />
                  <li>
                    - Sunday, Jun 26, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /flip-card-container -->

          <div class="flip-card-container" style="--hue: 220">
            <div class="flip-card">
              <div class="card-front">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img1" src="../../media/dark_knight.jfif" />

                  <figcaption class="title">The Dark Knight</figcaption>
                  <span class="rating">Rating: PG-13</span>
                </figure>
              </div>

              <div class="card-back">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img2" src="../../media/dark_knight.jfif" />
                  <button
                    onclick="window.location.href='./booking.php?movie=DARK'"
                  >
                    Book Now
                  </button>
                </figure>
                <ul>
                  <li>
                    When the menace known as the Joker wreaks havoc and chaos on
                    the people of Gotham, Batman must accept one of the greatest
                    psychological and physical tests of his ability to fight
                    injustice.
                  </li>
                  <br />
                  <li style="font-weight: 800">Show Timings:</li>
                  <li>
                    - Saturday, Jun 25, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                  <br />
                  <li>
                    - Sunday, Jun 26, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- flip-card-container -->

          <div class="flip-card-container" style="--hue: 350">
            <div class="flip-card">
              <div class="card-front">
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img1" src="../../media/lord_of_the_rings.jfif" />

                  <figcaption class="title">The Lord of the Rings</figcaption>
                  <span class="rating">Rating: PG-13</span>
                </figure>
              </div>

              <div class="card-back">
                <!-- only if the image is necessary -->
                <figure class="figure">
                  <div class="img-bg"></div>
                  <img class="img2" src="../../media/lord_of_the_rings.jfif" />
                  <button
                    onclick="window.location.href='./booking.php?movie=lord'"
                  >
                    Book Now
                  </button>
                </figure>

                <ul>
                  <li>
                    A meek Hobbit from the Shire and eight companions set out on
                    a journey to destroy the powerful One Ring and save
                    Middle-earth from the Dark Lord Sauron.
                  </li>
                  <br />
                  <li style="font-weight: 800">Show Timings:</li>
                  <li>
                    - Saturday, Jun 25, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                  <br />
                  <li>
                    - Sunday, Jun 26, 2022: <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12:00PM , 06:00PM
                  </li>
                </ul>

                <!-- can add svg here and remove these eight spans -->
              </div>
            </div>
          </div>
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
        Malak Obaid Khan, s3893774. Last modified
        <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
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
