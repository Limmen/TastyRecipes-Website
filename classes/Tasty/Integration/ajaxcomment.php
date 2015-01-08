<?php

namespace Tasty\Integration;

/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class ajaxcomment {

   
    /**
     * Creates a new instance.
     */
    public function __construct() {
        
    }

    public function comment($author,$msg)
    {
        
        $login = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
         mysql_select_db("ID1354", $login);
         
        $author = str_replace('"', "", $author);
        $msg = str_replace('"', "", $msg);
        $sql = "
		INSERT INTO ajax (username, comment)
		VALUES('$author', '$msg')";
		
		mysql_query($sql);
		
    }
     public function checkUsername($username)
    {  
         $cookies = \Flight::request()->cookies;
         if($cookies['username'] == $username)
         {
             return true;
         }
         return false;
    }

}
