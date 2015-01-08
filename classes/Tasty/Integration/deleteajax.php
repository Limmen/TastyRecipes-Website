<?php

namespace Tasty\Integration;

/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class deleteajax {

   
    /**
     * Creates a new instance.
     */
    public function __construct() {
        
    }

    public function delete($username, $comment)
    {
        $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
        mysql_select_db("ID1354", $dbLogin);
        $username = str_replace('"', "", $username);
        $comment = str_replace('"', "", $comment);
        $resulti = mysql_query("SELECT comment_id FROM ajax WHERE username='$username' AND comment='$comment'");
        $row = mysql_fetch_row($resulti);
        $commentid = $row[0];
        
        
		
      $sql = "DELETE FROM ajax WHERE comment_id = '$commentid'";
                 $result = mysql_query($sql);
         
         
    }

}
