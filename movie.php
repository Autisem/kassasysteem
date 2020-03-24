<?php require('header.php'); ?>
<link rel="stylesheet" href="css/style.css">

<main>
  <div class="backimage"></div>
  <div class="wrapper no-flex">
    <div class="movie-title">
      <div class="img-title">
        <img src="https://media.pathe.nl/thumb/180x254/gfx_content/posterhr/Sonic-OV-_ps_2_jpg_sd-high_Copyright-2019-Paramount-Pictures-and-Sega-of-America-Inc-All-Rights-Reserved.jpg" alt="">
        <h2>SONIC (ORIGINAL VERSION) <br>
          <form action="tickets.php"><input type="submit" value="Tijden en Tickets"></form>
          </h1>
      </div>
    </div>
    <div class="movie-details flex">
      <div class="review">
        <a href="#">&#9733;&#9733;&#9733;&#9733;&#9734;</a>
        <p>99 minutes | English <br><strong>genre: adventure, comedy</strong></p>
      </div>
      <div class="lore">
        <p>Release: 13-02-2020<br><br>Sonic is the new live-action adventure based on the popular Sega video game franchise. Sonic and his new best friend Tom try the bad guy Dr. Stop Robotnik and save the world.</p>
      </div>
    </div>
    <div class="time">
      <?php echo '<h3>' . date("l j F")  . '</h3>'; ?>
      <div class="location"><p><i class="fas fa-map-marker-alt"></i> Bioscoop AMO Breda</p></div>
      <div class="time-container">
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
      </div>
      <?php echo '<h3>' . date("l j F", strtotime(' +1 day')) . '<?h3>';?>
      <div class="location"><p><i class="fas fa-map-marker-alt"></i> Bioscoop AMO Breda</p></div>
      <div class="time-container">
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
      </div>
      <?php echo '<h3>' . date("l j F", strtotime(' +2 day')) . '<?h3>';?>
      <div class="location"><p><i class="fas fa-map-marker-alt"></i> Bioscoop AMO Breda</p></div>
      <div class="time-container">
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
      </div>
      <?php echo '<h3>' . date("l j F", strtotime(' +3 day')) . '<?h3>';?>
      <div class="location"><p><i class="fas fa-map-marker-alt"></i> Bioscoop AMO Breda</p></div>
      <div class="time-container">
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
      </div>
      <?php echo '<h3>' . date("l j F", strtotime(' +4 day')) . '<?h3>';?>
      <div class="location"><p><i class="fas fa-map-marker-alt"></i> Bioscoop AMO Breda</p></div>
      <div class="time-container">
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
        <div class="times invisible">
        </div>
        <div class="times">
          <a href="#">
          <p><span><strong>12:00</strong></span> - 14:05</p>
          <div class="yellow"><a href="#"><p><strong>SPECIAL SEAT</strong></p></a></div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="info-movie">
    <div class="wrapper no-flex">
      <div class="trailers-photos">
        <h4>Trailers</h4><br>
        <div class="trailer flex">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122203_st_sd-high.jpg" alt="">
        </div>
        <h4>Photo`s</h4>
        <div class="stills">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122209_st_sd-high.jpg" alt="">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122207_st_sd-high.jpg" alt="">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122205_st_sd-high.jpg" alt="">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122213_st_sd-high.jpg" alt="">
          <img src="https://media.pathe.nl/thumb/156x156/gfx_content/other/api/filmdepot/v1/movie/download/23754_122203_st_sd-high.jpg" alt="">
        </div>
        <h4>Cast & Crew</h4>
        <div class="cast-crew">
          <div class="cast">
            <img src="https://media.pathe.nl/gfx_content/PathePartners/cast-23898-JeffFowler.jpg" alt=""><br>
            <h5>Jeff Fowler</h5><br>
            <span>Director</span>
          </div>
          <div class="cast">
            <img src="https://media.pathe.nl/nocropthumb/120x160/gfx_content/Profiel/TikaSumpterNobodysFoolProfiel.jpg" alt=""><br>
            <h5>Tika Sumpter</h5><br>
          </div>
          <div class="cast">
            <img src="https://media.pathe.nl/nocropthumb/120x160/gfx_content/allocine/medias/nmedia/18/35/81/james-marsden_6059.jpg" alt=""><br>
            <h5>James Marsden</h5><br>
          </div>
          <div class="cast">
            <img src="https://media.pathe.nl/nocropthumb/120x160/gfx_content/Profiel/JimCarreySonicProfielfoto.jpg" alt=""><br>
            <h5>Jim Carrey</h5><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<footer>

  <?php require('footer.php'); ?>
