<?php 
    $title = "Home";
    $num = 20;
?>

<!-- 
    Home page will likely be a place for blog posts

    Languages and frameworks that are going to be used:
    * HTML, CSS, JavaScript and PHP
    * AJAX
    * Bootstrap
    * Vue.js
 -->
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/head.php' ?>
    <body>
        <?php include 'includes/navbar.php' ?>
        <div class="mainPage">
            <div class="titleContainer">
                <h1>Home Page</h1>
            </div>
            <div id="blogContainer"></div>
        </div>
        <p>The number is <?= $num ?>.</p>
        <?php include 'includes/scripts.php' ?>
    </body>
</html>