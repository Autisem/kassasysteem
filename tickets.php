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
                        <div class="bar selected">1. CHOSING TICKETS</div>
                    </a>
                    <a href="#">
                        <div class="bar">2. SELECTING CHAIRS</div>
                    </a>
                    <a href="ordering.php">
                        <div class="bar">3. ORDERING</div>
                    </a>
                    <a href="#">
                        <div class="bar">4. PAYOUT</div>
                    </a>
                </div>
                <p>You can order up to a max of 12 tickets.</p>
                <table>
                    <thead>
                        <tr>
                            <td>TYPE</td>
                            <td>PRICE</td>
                            <td>AMOUNT</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NORMAl</td>
                            <td>€9,95</td>
                            <td>
                                <form action=""><input type="number" placeholder="0" min="0" max="10"></form>
                            </td>
                        </tr>
                        <tr>
                            <td>NORMAl</td>
                            <td>€9,95</td>
                            <td>
                                <form action=""><input type="number" placeholder="0" min="0" max="10"></form>
                            </td>
                        </tr>
                        <tr>
                            <td>CHILD</td>
                            <td>€9,95</td>
                            <td>
                                <form action=""><input type="number" placeholder="0" min="0" max="10"></form>
                            </td>
                        </tr>
                        <tr>
                            <td>CHILD</td>
                            <td>€9,95</td>
                            <td>
                                <form action=""><input type="number" placeholder="0" min="0" max="10"></form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="voucher">
                    <h3>Voucher</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, sit odio vel beatae asperiores</p>
                    <form action=""><input type="text" placeholder="code"><input type="submit" class="submit" value="add"></form>
                </div>
                <form class="go-to-next-stage" action="chairselection.php"><input type="submit" value="STEP 2: CHOOSE YOUR CHAIRS"></form>
            </div>
            <div class="order-confirmation">
                <h3>YOUR ORDER</h3>
                <div class="order-movie-info">
                    <div class="img">
                        <img src="https://media.pathe.nl/thumb/180x254/gfx_content/posterhr/Sonic-OV-_ps_2_jpg_sd-high_Copyright-2019-Paramount-Pictures-and-Sega-of-America-Inc-All-Rights-Reserved.jpg" alt="">
                    </div>
                    <h4>SONIC (ORIGINAL VERSON)</h4>
                    <h5>Theatre</h5>
                    <p>Bioscoop AMO</p>
                    <h5>When</h5>
                    <p>Friday 14 Feb, 18:10 till 19:49</p>
                    <h5>Version</h5>
                    <p>EN</p>
                </div>
                <div class="warning">
                    <p>Pay attention:
                        Recommended for 9 years and older.
                        <br><br>
                        Child tickets are valid for children up to and including 11 years.
                        <br><br>
                        Regular Unlimited subscribers pay a surcharge for 3D films, IMAX, Dolby Cinema, 4DX and ScreenX.
                        <br><br>
                        The 'Discount' ticket is only valid for 65+, teenagers (12 to 17) or on presentation of a student / CJP pass. Morning discount applies to everyone.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>

    <?php require('footer.php'); ?>
