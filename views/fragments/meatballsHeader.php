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
         
        <div class="col span_4_of_4">
        <div class="comments">
     
         <form action="meatballComment" method="post">
                
            <label for="nickName">Username</label>
                <div>
            <input id="nickName" name="author" />
                </div>
            <label>Comment</label>
            <div>
            <textarea id= "entry" name="message" rows = 5
                      placeholder="Write your entry here."></textarea>
            </div>
            <button>Send</button>
            </form>
    

        <?php
          }
          else
          {
          ?>
        <div class="col span_4_of_4">
        <div class="comments">
            <p class="regandlog">You need to be logged in to write Comments</p>
            <p>Comments:</p>
            
          <?php
          }