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
          
          <?php
          $cookies = \Flight::request()->cookies;
          if(isset($cookies['username']) and isset($cookies['password']))
          {
          ?>
           <p class="regandlog"> You are already logged in </p>
           <button><a href="LogOut">LogOut</a></button>
          <?php
          }
          else
          {
          ?>        
           <p class="regandlog">Login with your username and password below
              , or register <a href="register">here </a></p>
                     <form action="userLog" method="post">
                
            <label for="username">Username</label>
                <div>
            <input id="username" name="username" class='text-author'/>
                </div>
            <label>Password</label>
            <div>
                <input type="password" name="password"/>
            </div>
            <button>Log in</button>
            </form>
         <?php 
         $cookies = \Flight::request()->cookies;
         if(isset($cookies['username']))
         {
           echo"cookie is set";  
         }
         else
         {
          echo"cookies is not set";   
         }
          }
?>