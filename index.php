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
        <script src="js/bootstrap.js"></script>
    </body>
</html>