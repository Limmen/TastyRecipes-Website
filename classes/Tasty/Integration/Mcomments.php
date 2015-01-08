<?php

namespace Tasty\Integration;

/**
 * A facade for the conversation data store. Manages all create/read/update/delete operations on 
 * entries in the conversation.
 */
class Mcomments {

   
    /**
     * Creates a new instance.
     */
    public function __construct() {
        
    }
    
    public function newComments($id)
    {
            $comments = array();
            $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
		$query = mysql_query("SELECT * FROM ajax order by comment_id asc");
		$nums = mysql_num_rows($query);
		if($nums > 0)
		{
		while($row = mysql_fetch_assoc($query))
		{
                    if($row['comment_id'] > $id)
                    {
                    $comments[] = $row;
                    }
                  
                }
                }
                return $comments;
    }
 

}