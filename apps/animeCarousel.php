<?php 
    $title = "Anime Carousel";
?>
<!-- 
    A carousel I made for fun
 -->
<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/head.php' ?>
    <body onkeydown="DetectKey()">
        <?php include '../includes/navbar.php' ?>
        <h1>Tinder</h1>
        <div class="carousel">
            <img  id="animeCarousel" src="..\images\slideshow\1.jpg">
            <button id="prevBtn" onclick="PreviousImage()" type="button"><</button>
            <button id="nextBtn" onclick="NextImage()">></button>
            <button id="arranged" onclick="ArrangedMarriage()">Arranged Marriage</button>
        </div>
    </body>
</html>