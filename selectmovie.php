<?php require('header.php');
require('php/dbconnect.php') ?>


<div class="wrapper sectionspacing">

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th class="h1">Film</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $quary = "SELECT * FROM films";
          foreach($db->query($quary) as $row){
          $id = $row['id'];
          $name = $row['name'];
          echo "
          <tr>
          <td><a href='selecttime.php?id=$id'>$name</a></td>
          </tr>";
          }
          ?>
        </tbody>
    </table>

    <a href="index.php" class="btn btn-danger">cancel</a>

</div>

<footer class="footer">

    <?php require('footer.php'); ?>
