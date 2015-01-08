
<?php

                $dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
		$query = mysql_query("SELECT * FROM meatballcomments order by comment_id desc");
		$nums = mysql_num_rows($query);
		if($nums > 0)
		{
		while($row = mysql_fetch_assoc($query))
		{
              
          
		echo" <p> <b> UserName: </b>".$row['username']."
		</p>
		
		 <p> <b> Comment: </b><br>".nl2br($row['comment'])."
		</p>
		";
               
            $commentID = $row['comment_id'];
                ?>
                 <?php
         $cookies = \Flight::request()->cookies;
          if(isset($cookies['username']) and $cookies['username'] == $row['username'])
          {
              
          ?>
            <form action = "editComment2" method="post">
            <input type="hidden" name="edit" value = "<?php echo $commentID ?>">
            <button>Edit</button>
            
            </form>
            <form action = "deleteComment2" method="post">
            <input type="hidden" name="delete" value = "<?php echo $commentID ?>">
            <button>Delete</button>
            </form>
            <hr>
            <?php
          }
          else
          {
          ?>
            <hr>
                <?php
          }
                }
                }