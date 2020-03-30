<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
    <div class="background-top-title"></div>
    <div class="wrapper no-flex">
        <div class="title flex">
            <h1>Sonic (ORIGINAL VERSION)<br>Friday 14 februari 2020, 18:10 AMO zaal 1</h1>
            <a class="go-back" href="movie.php">Go Back</a>
        </div>
        <div class="order">
            <div class="tickets">
                <div class="progress">
                    <a href="tickets.php">
                        <div class="bar">1. CHOSING TICKETS</div>
                    </a>
                    <a href="chairselection.php">
                        <div class="bar">2. SELECTING CHAIRS</div>
                    </a>
                    <a href="ordering.php">
                        <div class="bar selected">3. ORDERING</div>
                    </a>
                    <a href="#">
                        <div class="bar">4. PAYOUT</div>
                    </a>
                </div>
                <h3>YOUR ORDER</h3>
                <div class="order-movie-info order-page">
                    <div class="img">
                        <img class="img-responsive" src="https://media.pathe.nl/thumb/180x254/gfx_content/posterhr/Sonic-OV-_ps_2_jpg_sd-high_Copyright-2019-Paramount-Pictures-and-Sega-of-America-Inc-All-Rights-Reserved.jpg" alt="">
                    </div>
                    <div class="order-movie-details">
                        <h4>SONIC (ORIGINAL VERSON)</h4>
                        <h5>Bioscoop</h5>
                        <p>Bioscoop AMO</p>
                        <h5>Wanneer</h5>
                        <p>Maandag 30 Maart, 05:11 tot 07:15</p>
                        <h5>Versie</h5>
                        <p>EN</p>
                        <h5>Stoelen</h5>
                        <?php
                          echo "<p>";
                          if (isset ($_SESSION['selectedSeat[1]'])) {
                            for ($i=1; $i < 12; $i++) {
                              if (isset ($_SESSION['selectedSeat[' . $i . ']'])) {
                                echo $_SESSION['selectedSeat[' . $i . ']'] . "  ";
                              }
                              elseif (!empty($_SESSION['selectedSeat[' . $i . ']']) ) {
                                break;
                              }
                              unset($_SESSION['selectedSeat['. $i .']']);
                            }
                            echo "</p>";
                          }
                          else {
                            echo "<p> no seat selected </p>";
                          }
                        ?>
                        <div class="tickets-total">
                            <h5><span>2x</span> Normaal</h5>
                        </div>
                        <div class="total">
                            <h5>totaal:</h5>
                        </div>
                    </div>
                </div>
                <form class="go-to-next-stage" action=""><input type="submit" value="PAYOUT"></form>
            </div>
            <div class="order-confirmation">

            </div>
        </div>
    </div>
</main>

<footer class="footer">

    <?php require('footer.php'); ?>
