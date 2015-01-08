<?php

setcookie("username", $newUser->getUserName(), time()-3600);
setcookie("password", $newUser->getPW(), time()-3600);
   ?>
