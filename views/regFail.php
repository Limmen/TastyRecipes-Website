<p class="regandlog">Please register as a user below</p>
          <div>
           <form action="dbReg" method="post">
             <label>Nick-Name</label>
                <div>
            <input name="nickname" />
                </div> 
            <label for="username">Username</label>
                <div>
            <input id="username" name="username" class='text-author'/>
                </div>
            <label>Password</label>
            <div>
                <input type="password" name="password"/>
            </div>
            <button>Register</button>
            </form>
          </div>

<?php

    if($bool == true)   
    {
        ?>

<p class="redcolor"> Username already exists </p>
     
<?php
    }
    else        
{
?>

<p class="redcolor">You need to enter all fields (Only letters and digits are allowed)</p>

<?php
}
?>          