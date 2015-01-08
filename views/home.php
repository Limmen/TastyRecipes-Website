<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tasty Recipes</title>
        <!-- <meta> taggen används för att definera symbol-uppsättning samt att
        hemsidan ska agera responsivt för olika enheter -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- länkar till stylesheets -->
        <link rel="stylesheet" type="text/css" href="resources/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="resources/css/tasty.css" />
        <link rel="stylesheet" type="text/css" href="resources/css/4cols.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js"></script>
        <script src="resources/jS/tastyRecipes.js"></script>
    </head>
    <body>
        <!-- <header> innehållandes en logga samt en paragraf-->
         <header class="headsection">
         <div class="col span_4_of_4">  
             <img class="logo" src="resources/images/cook2.jpg" alt="logo">
             <p class="titleheadertext"> Welcome to TastyRecipes.com </p>
         </div>
         </header>
        <!-- border är ett block innehållandes en sök-ruta med tillhörande
        etikett: "search" -->
            <div class="border col span_4_of_4">
         <label for="search">Search</label>   
         <input type ="text" name ="searchform" id="search"/>
            </div>
                <!-- headmenu är ett block innehållandes en meny för
                sid-navigering. Menyn är en <ul> lista med 5st element,
                varav "mouse-over" över ett av elementet visar ytterligare
                en <ul> lista innehållandes 2st element -->
                <div class ="headmenu col span_4_of_4">
           <ul class="menu">
    <li><a href="home">Home</a></li>
    <li><a href="Calender">Calendar</a></li>
    <li><a href="#">Recipes</a>
         <ul class="sub-menu">
            <li><a href="Pancakes">Pancakes</a></li>
            <li> <a href="Meatballs">MeatBalls</a></li>
            </ul></li>
    <li><a href="#">Contact</a>
        <ul class ="sub-menu2">
            <li> <a href="contact">Contact us</a></li>
            <li><a href="aboutus">About us</a></li>
        </ul></li>
	<li><a href = "register">Register</a></li>
	<li><a href = "login">Login</a></li>
        <li><a href = "Ajax">Ajax</a></li>
    </ul> </div>
         <!-- klassen bold specifierar fet text -->
                    <p class="bold col span_4_of_4">
                    Welcome to TastyRecipes.com
                    </p> 
            <p class ="col span_4_of_4">
                Our company is well known for our delicous and easy to follow recipes.
            </p>
            <p class="col span_4_of_4"> Our Recipes: </p>
            <!-- En lista <ul> med två st element <li> -->
            <ul class="col span_4_of_4">
                <li> <a href="Meatballs.php">Swedish meatballs</a> </li>
                <li> <a href="pancakes.php"> Swedish pancakes </a> </li>   
            </ul>
            
             <?php
        if (!empty($conversation)) {
            foreach ($conversation as $entry) {
                echo("<p class='author'>" . $entry->getNickName() . ":</p>");
                foreach ($entry->getMsg() as $line) {
                    echo("<p class='entry'>" . $line . "</p>");
                }
            }
        }
        ?>
    </body>
</html>
