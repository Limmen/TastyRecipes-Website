<?php

namespace Tasty\View;

/**
 * Invoked when the user has submitted a new Message.
 */
class NewUserDB extends \Tasty\View\AbstractExecutor {

    private $username;
    private $pw;
    private $nickname;

  
    public function setUsername($username) {
        $this->username = htmlentities($username, ENT_QUOTES);
    }

    public function setPassword($PW) {
        $this->pw = htmlentities($PW, ENT_QUOTES);
    }

    public function setNickname($nickname) {
        $this->nickname = htmlentities($nickname, ENT_QUOTES);
    }
        
    public function formsEmpty()
    {
     if ($this->username != null and $this->pw !=null and $this->nickname != null)
     {
         
         return false;
     }
     
     return true;
    }
    
    public function validate()
    {
        if(ctype_alnum($this->username) and ctype_alnum($this->pw) and ctype_alpha($this->nickname))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    
  
    protected function doExecute() {
          
                $bool;
                if ($this->controller->user_exists($this->username)== true)
                {
                 $bool=true;
                 $this->renderError('regFail', 'bool',$bool);
                }
                else
                {
                  if($this->formsempty() == false and $this->validate() == true)
                  { 
                  $this->controller->register($this->username, $this->pw, $this->nickname);
                  $username = $this->username;
                  $this->renderRegistration('regSucess', 'username', $username);
                  }
                  else
                  {
                 $bool=false;
                 $this->renderError('regFail', 'bool',$bool);
                  }
                  
                }
        
         

    }


}
