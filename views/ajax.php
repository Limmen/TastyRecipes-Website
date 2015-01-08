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
          <!-- ett <div> element innehållandes en rubrik för sidan -->
        <div class="col span_4_of_4">
            <h2 class="recipehead"> Swedish meatballs </h2>
        </div>
        <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller endast en bild --> 
        <div class="col span_1_of_4">
        <img src="resources/images/meatballs.jpg" alt="pancakes" class="recipeimg">
        </div>
        <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller rubrik och lista -->
        <div class="ingredients col span_1_of_4">
            <h2>Ingredients</h2>
            <ul>
               <li> 2 slices fresh white bread </li>
                <li>1/4 cup milk </li>
                <li>3 tablespoons clarified butter, divided</li>
                <li> 1/2 cup finely chopped onion </li>
                <li>A pinch plus 1 teaspoon kosher salt </li>
                <li> etc.................. </li>
                <li> .................. </li>
                <li> .................. </li>
                <li> .................. </li>
            </ul>
            <!-- En <div>-kolumn av 4 på rad, denna kolumn innehåller rubrik och text -->
            </div>
        <div class="directions col span_1_of_4">
            <h2>Directions</h2>
            <p> Preheat oven to 200 degrees F.
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
        
        <?php
         $cookies = \Flight::request()->cookies;
          if(isset($cookies['username']))
          {
              
          ?>
        <!-- ett <div> element innehållandes text-rutor för Username och kommentar
        Samt 2st exempel-kommentarer -->
        <div class="col span_4_of_4">
        <div class="comments"> 

             <!-- ko with: comments -->
            <label>Username</label>
            <div>
             <input type="text" data-bind="value: username"/>
            </div>
            <label>Comment</label>
             <div>
             <textarea id= "entry" rows = 5 data-bind='value: newComment'
             placeholder="Write your comment here.">    
            </textarea>
            </div>
            <button data-bind="click: addEntry">Send</button> 
            <!--/ko -->
            
            <h2 class="commenting" data-bind="visible:entries().length >0  ">
            Comments:
            </h2>
            <button data-bind="click: getNewEntries()">Load New Comments</button>
            <ul data-bind="foreach: entries">
                <li>
                    <p class="username" data-bind="visible: !Editbool()">
                    <span data-bind="text: username, visible: !Editbool()"></span>
                    :
                    </p>
                    <input type="text" data-bind="value: username, visible: Editbool()"/>
                    <p class="entry">
                    <span data-bind="text: newComment, visible: !Editbool()"></span>
                    <textarea id= "entry" rows = 5 data-bind="value: newComment,
                              visible: Editbool()" placeholder="Write your comment here.">    
                    </textarea>
                    </p>
                    <button data-bind="click: removeEntry">Delete</button>
                    <button data-bind="click: Edit, visible: !Editbool()">Edit</button>
                    <button data-bind="click: Edit, visible: Editbool()">Save</button>
                    <hr>
                </li>
            </ul>
            </div>
            </div>
             <?php
          }
          else
          {
          ?>
        <div class="col span_4_of_4">
        <div class="comments">
            <p class="regandlog">You need to be logged in to write Comments</p>
            <p>Comments:</p>
            
            <h2 class="commenting" data-bind="visible:entries().length >0  ">
            Comments:
            </h2>
            <button data-bind="click: getNewEntries()">Load New Comments</button>
            <ul data-bind="foreach: entries">
                <li>
                    <p class="username" data-bind="visible: !Editbool()">
                    <span data-bind="text: username, visible: !Editbool()"></span>
                    :
                    </p>
                    <input type="text" data-bind="value: username, visible: Editbool()"/>
                    <p class="entry">
                    <span data-bind="text: newComment, visible: !Editbool()"></span>
                    <textarea id= "entry" rows = 5 data-bind="value: newComment,
                              visible: Editbool()" placeholder="Write your comment here.">    
                    </textarea>
                    </p>
                    <hr>
                </li>
            </ul>
            </div>
            </div>
          <?php
          }
          ?>
        
      
        
    </body>
</html>