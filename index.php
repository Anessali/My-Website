<?php 
    $title = "Home";
    $num = 20;
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php' ?>
    <body>
        <?php include 'includes/navbar.php' ?>
        <h1>Home Page</h1>
        <p>The number is <?= $num ?>.</p>
        <?php include 'scripts.php' ?>
    </body>
</html>