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
          
          <p class="regandlog">Please register as a user below</p>
          <div>
           <form action="dbReg" method="post">
            <label>Nick-Name</label>
                <div>
            <input name="nickname" />
                </div>
            <label for="username">Username</label>
                <div>
            <input id="username" name="username" class='text-author'/>
                </div>
            <label>Password</label>
            <div>
                <input type="password" name="password"/>
            </div>
            <button>Register</button>
            </form>
          </div>
    </body>
</html>
