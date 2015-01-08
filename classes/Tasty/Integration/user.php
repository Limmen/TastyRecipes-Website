<?php

namespace Tasty\Integration;

/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class user {

   
    /**
     * Creates a new instance.
     */
    public function __construct() {
        
    }

    public function user_exists($username)
    {
        $login = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		mysql_select_db("ID1354", $login);
        $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE username = '$username'");
        return (mysql_result($query, 0) ==1) ? true : false;
    }
      public function register($username, $pw, $nickname)
    {
          $login = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		mysql_select_db("ID1354", $login);
          $pw = password_hash($pw, PASSWORD_DEFAULT);
        $sql = "
		INSERT INTO users (username, password,nickname)
		VALUES('$username', '$pw', '$nickname')";
		
		mysql_query($sql);
		
    }

}

