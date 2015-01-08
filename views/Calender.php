<?php
header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)
header("Pragma: cache");
header("Expires: Fri, 31 Oct 2014 14:16:41 GMT");
header("Last-Modified: Mon, 13 Oct 2014 13:49:51 GMT")
?>
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
        <!-- En <table> tagg innehållandes en tabell/matris med
        7st kolumner (2st kolumner med class="weekend"-->
         <table class ="calender col span_4_of_4">
         <!-- en <caption> tagg med en rubrik för tabellen-->
  <caption>September</caption>
  <col span="5">
  <col class="weekend">
  <col class="weekend">
  <!-- Ett <thead> element med 1 rad <tr> innehållandes 7 celler <th>
  thead-raden fungerar som underrubriker för var och en av kolumnerna.-->
  <thead>
    <tr>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
      <th>Sun</th>
    </tr>
  </thead>
  <!-- tabellens "body" innehållandes rader och celler -->
  <tbody>
    <tr>
      <td><div class="day">1</div></td>
      <td><div class="day">2</div></td>
      <td><div class="day">3</div></td>
      <td><div class="day">4</div></td>
      <td><div class="day">5</div></td>
      <td><div class="day">6</div></td>
      <td><div class="day">7</div></td>
    </tr>
    <tr>
      <td><div class="day">8</div></td>
      <td><div class="day">9</div><a href="views/pancakes.php"><img src="resources/images/pancakes.jpg" alt="pancakes" class="calenderimg"></a></td>
      <td><div class="day">10</div></td>
      <td><div class="day">11</div></td>
      <td><div class="day">12</div></td>
      <td><div class="day">13</div></td>
      <td><div class="day">14</div></td>
    </tr>
    <tr>
      <td><div class="day">15</div></td>
      <td><div class="day">16</div></td>
      <td><div class="day">17</div></td>
      <td><div class="day">18</div></td>
      <td><div class="day">19</div></td>
      <td><div class="day">20</div><a href="views/meatballs.php"><img src="resources/images/meatballs.jpg" alt="meatballs" class="calenderimg"></a></td>
      <td><div class="day">21</div></td>
    </tr>
    <tr>
      <td><div class="day">22</div></td>
      <td><div class="day">23</div></td>
      <td><div class="day">24</div></td>
      <td><div class="day">25</div></td>
      <td><div class="day">26</div></td>
      <td><div class="day">27</div></td>
      <td><div class="day">28</div></td>
    </tr>
    <tr>
      <td><div class="day">29</div></td>
      <td><div class="day">30</div></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

    </body>
</html>
