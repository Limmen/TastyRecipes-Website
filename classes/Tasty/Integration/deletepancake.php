<?php

namespace Tasty\Integration;

/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class deletepancake {

   
    /**
     * Creates a new instance.
     */
    public function __construct() {
        
    }

    public function delete($commentid)
    {
        $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
      $sql = "DELETE FROM pancakescomments WHERE comment_id = '$commentid'";
                 $result = mysql_query($sql);
    }

}

