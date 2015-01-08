<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tasty RecipesLOL</title>
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
            <li><a href="pancakes">Pancakes</a></li>
            <li> <a href="meatballs">MeatBalls</a></li>
            </ul></li>
    <li><a href="#">Contact</a>
         <ul class ="sub-menu2">
            <li> <a href="contact">Contact us</a></li>
            <li><a href="aboutus">About us</a></li>
        </ul></li>
	<li><a href = "register">Register</a></li>
	<li><a href = "login">Login</a></li>
           </ul> </div>
         <!-- ett <div> element innehållandes en rubrik för sidan -->
        <div class="col span_4_of_4">
            <h2 class="recipehead"> Swedish pancakes </h2>
        </div>
         <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller endast en bild --> 
        <div class="col span_1_of_4">
        <img src="resources/images/pancakes.jpg" alt="pancakes" class="recipeimg">
        </div>
        <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller rubrik och lista --> 
        <div class=" ingredients col span_1_of_4">
            <h2>Ingredients</h2>
            <ul>
                <li> 4 eggs</li>
                <li> 2 cups of milk </li>
                <li>1/2 cup all-purpose flour</li>
                <li> 1 tablespoon sugar </li>
                <li>1 pinch salt </li>
                <li> etc.................. </li>
                <li> .................. </li>
                <li> .................. </li>
                <li> .................. </li>
            </ul>
            </div>
        <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller rubrik och text -->
        <div class="directions col span_1_of_4">
            <h2>Directions</h2>
            <p> In a large bowl, beat eggs with a wire whisk.
              Mix in milk, flour, sugar, salt, and melted butter.
              .................................
              .................................
              .................................
              .................................
            </p>
        </div>
        <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller rubrik och text -->
        <div class="nutrition col span_1_of_4">
            <h2>Nutrition facts </h2>
             <p> This meal is healthy and.....
                 .................
                  ......... .....
                 .....................
                  .............................
             </p>
        </div>
         <!-- ett <div> element innehållandes text-rutor för Username och kommentar
        Samt 2st exempel-kommentarer -->
        <div class="col span_4_of_4">
        <div class="comments">
     
            <!-- "with" betyder att vi skapar ett nytt-bindande sammanhang
            vi bestämmer här att dessa element ska vara bundna till comments
            objektet. 
            Observablen comments kommer i sin tur att skapa
            ett nytt Comment objekt, och där återfinner vi observables:
            username & newComment samt addEntry metoden.-->
            
            <form action="new-msg" method="post">
 
            <label for="nickName">Your Nick Name:</label>
            <input id="nickName" name="author" class='text-author'/>
   
            <textarea id= "entry" name="message" rows = 5
                      placeholder="Write your entry here."></textarea>
       

            <button>Send</button>
</form>
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

                
               
            </div>
            </div>
        
        </body>
</html>
