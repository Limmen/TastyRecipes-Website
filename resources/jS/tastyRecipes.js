

/*
 *document.ready funktionen är en jQuery funktion som upptäcker dokumentets
 *tillstånd. Varför är detta viktigt? Jo för en sida kan inte manipuleras
 *på ett säkert sätt förnst hela DOM är "redo" för JavaScript exekvering.
 *
 *genom att skriva JavaScript kod inuti denna funktion så slipper vi tänka
 *på sådan eventuella problem.
 */
$(document).ready(function() 
{
var baseUrl = new String(location.href).replace("ajax", "");

    /*
     * The URL used for writing entries.
     */
    var writeUrl = baseUrl + "home";

    /*
     * The URL used for reading entries.
     */
    var readUrl = baseUrl + "new-entries.php";

/*
 * Denna funktion anropas när vi håller musen över ett <li> element i vår meny,
 * funktionen kommer att kolla om det finns ett <ul> element i <li> elementet,
 * gör det det så sätter vi css-propertyn "display" för det <ul> elementet
 *  till "block" 
 */		
		function openSubMenu() {
			$(this).find('ul').css('display', 'block');	
		};
/*
 * Denna funktion anropas när vi har hållt musen över ett <li> element i vår
 * meny och sedan drar bort musen kommer att kolla om det finns ett <ul> element
 * i <li> elementet, gör det de så sätter vi css-propertyn "display"
 * för det <ul> elementet till "none" 
 */		
		function closeSubMenu() {
			$(this).find('ul').css('display', 'none');	
		};
 /*
  * Denna JavaScript funktion gör så att när vi håller musen över ett li-element
  * i vår meny så anropas funktionen : openSubMenu
  */   
                $('.menu > li').bind('mouseover', openSubMenu);
                
  /*
  * Denna JavaScript funktion gör så att när vi har hållt musen över ett li-element
  * i vår meny och sedan drar bort musen så anropas funktionen : closeSubMenu
  */
		$('.menu > li').bind('mouseout', closeSubMenu);
/*
 * Detta är en funktion som vi kommer att använda mha. KnockOut för att 
 * "observera" våra kommentarer.
 * 
 * username är en observable som kommer att "observera" alla element i 
 * vår html kod som har data-bindningen: value: username
 * 
 * newComment är en observable som kommer att "observera" alla element i 
 * vår html kod som har data-bindningen: value: newComment
 * 
 * Editbool är en observable som kommer att "observera" alla element i 
 * vår html kod som har data-bindningen: Editbool
 */          

//var baseUrl = new String(localhost/sem3);
//var writeUrl = baseUrl + "meatballComment";
          function Comment()
          {
              var self = this;
              self.username = ko.observable();
              self.newComment = ko.observable();
              self.Editbool = ko.observable(false);
              self.id = ko.observable();
              
/*
 * addEntry är en funktion inuti Comment-objetet som kommer att addera
 * "sig själv" i observable-arrayen: entries (som finns i vår vy-modell).
 * 
 * funktionen skapar även en ny instans av Comment inuti obersvable-objektet
 * comments i vy-modellen.
 */  
              self.addEntry = function()
              {
                   var jsonuser = ko.toJSON(self.username);
                   var jsoncomment = ko.toJSON(self.newComment);
                 if (jsonuser !== undefined && jsonuser !== null && jsoncomment !== undefined && jsoncomment !== null) 
                  {
                  //vm.entries.push(self);
                   vm.entries.unshift(self);
                   vm.comments(new Comment());
                   $.post("ajaxJson" + "/" + jsonuser + "/" + jsoncomment);
                 }
                  
              };
              
              
            
/*
 * removeEntry tar bort "sig själv" från observableArrayen entries inuti
 * vy-modellen.
 */             
              self.removeEntry = function()
              {
                  vm.entries.remove(self);
                  jsonuser = ko.toJSON(self.username);
                  jsoncomment = ko.toJSON(self.newComment);
                  $.post("ajaxdelete" + "/" + jsonuser + "/" + jsoncomment);
              };
/*
 * Edit byter värde på observable-objektet Editbool (false/true).
 */            
              self.Edit = function()
          {
             self.Editbool(!self.Editbool()); 
          };
          
          }
          
/*
 * Detta är objektet för vår vy-modell. Notera att vy-modellen inte ligger inuti
 * det tidigare objektet: comment.
 * 
 * viewModel innehåller en observableArray som används för att upptäcka ändringar
 * i en samling av objekt och uppdatera UI. (Observables som vi använde tidigare
 * har samma syfte men för enskilda objekt).
 * 
 * comments är en observable för att observera comment() objekt.
 * 
 */
          function viewModel()
          {
              var self = this;
              
              self.entries = ko.observableArray();
              self.comments = ko.observable(new Comment());
              self.id = 0;
          
                  self.getNewEntries = function () {
                      jsonid = ko.toJSON(self.id);
            $.getJSON("newComments" + "/" + jsonid, function (result) {
                for (i = 0; i < result.length; i++) {
                    var entry = result[i];
                    entryd = new Comment();
                    entryd.username = entry.username;
                    entryd.newComment = entry.comment;
                    entryd.id = entry.comment_id;
                    if(entryd.id > self.id)
                    {
                    self.id = entryd.id;
                    self.entries.unshift(entryd);
                    }
                } 
                console.log(self.entries());
            });
        };
          
          }
          
/*
 * Skapar en instans av viewModel
 */
          var vm = new viewModel();
/*
 * applyBindings används för att aktivera knockOut koden.
 */          
          ko.applyBindings(vm);
          
          vm.getNewEntries();
				   
	});
 


