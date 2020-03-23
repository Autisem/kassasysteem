<?php require('header.php'); ?>

<div class="wrapper sectionspacing">

    <a href="selectmovie.php" class="btn btn-warning">stap terug</a>
    <?php  ?>
    <form action="php/processOrder.php" method="post"></form>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th class="h1">Tijd</th>
            </tr>
        </thead>
        <tbody>
        <form action="php\processsOrder.php" method="post">
        <select name="time">
        <option value="10:10 - 12:04">10:10 - 12:04</option>
        <option value="12:10 - 14:04">12:10 - 14:04</option>
        <option value="14:10 - 16:04">14:10 - 16:04</option>
        <option value="18:10 - 20:04">18:10 - 20:04</option>
        <option value="21:10 - 23:04">21:10 - 23:04</option>
        <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <input type="submit">
        </form>

        </select>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>

        </tbody>
    </table>

    <a href="index.php" class="btn btn-danger">cancel</a>

</div>

<footer class="footer">

<?php require('footer.php'); ?>
