<?php require('header.php'); ?>

<div class="wrapper sectionspacing">

    <a href="selectmovie.php" class="btn btn-warning">stap terug</a>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th class="h1">Tijd</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href='inputid.php'>10:10 - 12:04</a></td>
            </tr>
            <tr>
                <td><a href='inputid.php'>12:10 - 14:04</a></td>
            </tr>
            <tr>
                <td><a href='inputid.php'>14:10 - 16:04</a></td>
            </tr>
            <tr>
                <td><a href='inputid.php'>18:10 - 20:04</a></td>
            </tr>
            <tr>
                <td><a href="inputid.php?time=<?= $date = date('Y-m-d H:i:s', mktime(21,10,0,3,20,2020)) ?>">21:10 - 23:04</a></td>
            </tr>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-danger">cancel</a>

</div>

<footer class="footer">

<?php require('footer.php'); ?>
