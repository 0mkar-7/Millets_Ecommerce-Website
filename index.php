<?php
    session_start();
    require('session_check.php');
    require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthyMeals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->

    <link src="loginscript.js">
</head>
<body>
    <?php
    include('navbar.php');
    ?>
    <div> 
        <img class="backgroundimage" src="fresh.png">
    </div>
    <div class="about">
            <div class="inner-section">
            <p class="text">
                Indian millets are a group of nutritiously rich, drought tolerant and mostly grown in the arid and semi-arid regions of India. They are small-seeded grasses belonging to the botanical family Poaceae. They constitute an important source of food and fodder for millions of resource-poor farmers and play a vital role in ecological and economic security of India. These millets are also known as "coarse cereals" or "cereals of the poor". Indian Millets are nutritionally superior to wheat and rice as they are rich in protein, vitamins and minerals. They are also gluten-free and have a low glycemic index, making them ideal for people with celiac disease or diabetes. India is among the top 5 exporters of millets in world. World export of millet has increased from $400 million in 2020 to $470 million in 2021 (ITC trade map) India exported millets worth $64.28 million in the year 2021-22, against $59.75 million in 2020-21. Share of Millet based value added products is negligible.

India is the largest producer as well as the largest exporter of cereal products in the world. India's export of cereals stood at Rs. 96,011.42 Crore / 12,872.64 USD Millions during the year 2021-22. Rice (including Basmati and Non-Basmati) occupy the major share in India's total cereals export with 75% (in value terms) during the same period. Whereas, other cereals including wheat represent only a 25 % share of total cereals exported from India during this period.
            </p>
            </div>
        </div>

        <div class="parent">
            <div class="child">
                <p>Diet Friendly</p>
            </div>
            <div class="child">
                <p>100% Healthy</p>
            </div>
            <div class="child">
                <p>Enriched With Protiens</p>
            </div>
        </div>
     <div class="content"> 
        <p class="content-feed"><span>Discount </span>Upto 50% OFF</p>
        <p class="content-feed">Hurry Up Grab the chance Dont miss the Sale</p>
        <p class="content-feed link"><a href="products.php">Buy Now!</a></p>
    </div>


  


    
</body>
</html>