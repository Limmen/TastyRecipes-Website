<?php

namespace Tasty\Integration;


class login {

    

    public function __construct() {
       
    }
 
    
public function getUser_id($username)
    {
    $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
        $query = "SELECT COUNT(user_id) FROM users WHERE username='$username'";
        $result = mysql_query($query) or die(mysql_error);
        $result2 = (mysql_result($result,0)==1) ? 'user_id': false;
        return $result2;
    }
    
  
    public function login($username, $password)
    {
        $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
    $user_id = $this->getUser_id($username);
    $result = mysql_query("SELECT 1 FROM users WHERE username='$username'");
    if (!$result)
    {
        return false;
    }
    $resulti = mysql_query("SELECT password FROM users WHERE username='$username'");
    $row = mysql_fetch_row($resulti);
    $strhash = $row[0];
    if (password_verify($password, $strhash) == true)
    {
            return true;
    }
    else
    {
        return false;
    }

    }
   

}





  