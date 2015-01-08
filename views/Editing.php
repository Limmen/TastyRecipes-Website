
<?php
  
$dbLogin = mysql_connect("localhost", "root", "mockpw")
		or die (mysql_error());
		
		mysql_select_db("ID1354", $dbLogin);
                
               $newUsername =  \Flight::request()->data[TASTY_newUsername_KEY];
               $newComment = \Flight::request()->data[TASTY_newComment_KEY];
               $commentid = \Flight::request()->data[TASTY_EDIT_KEY];
             
                 
                if(isset($newUsername) and isset($newComment) and isset($commentid))
                {
                 $cookies = \Flight::request()->cookies;
                 if($cookies['username'] == $newUsername)
                   {
                 
                 $sql = "UPDATE pancakescomments SET username = '$newUsername' WHERE comment_id = '$commentid'";
                 $result = mysql_query($sql);
                 $sql2 = "UPDATE pancakescomments SET comment = '$newComment' WHERE comment_id = '$commentid'";
                 $result2 = mysql_query($sql2);
                 ?>
                <meta http-equiv="refresh" content="0; url=http://localhost/sem3/pancakes" />
                <?php
                   }
                   else
                   {
                   ?>
                <p class="redcolor">Invalid username. You can only comment with your own username</p>
                <?php
                   }
                }
               
?>


         <form method="post">
                
            <label for="nickName">Username</label>
                <div>
            <input id="nickName" name="newUsername" />
                </div>
            <label>Comment</label>
            <div>
            <textarea id= "entry" name="newComment" rows = 5
                      placeholder="Write your entry here."></textarea>
            </div>
            <div>
              <input type="hidden" name="edit" value="<?php echo $commentid ?>" />
            </div>
            <button>Save</button>
            </form>
