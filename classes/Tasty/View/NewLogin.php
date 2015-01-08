<?php

namespace Tasty\View;

/**
 * Invoked when the user has submitted a new Message.
 */
class NewLogin extends \Tasty\View\AbstractExecutor {

    private $cookies;
    private $username;
    private $pw;

    /**
     * @param string $author The nick name of the person who wrote the message.
     */
    public function setUsername($username) {
        $this->username = htmlentities($username, ENT_QUOTES);
    }

    /**
     * @param string $msg The new Message.
     */
    public function setPassword($PW) {
        $this->pw = htmlentities($PW, ENT_QUOTES);
    }

 

    /**
     * @param string $msg The new Message.
     */
    public function setCookies($param) {
        $this->cookies = $param;
    }
 
    protected function doExecute() {

                  $login = $this->controller->login($this->username, $this->pw);
                  if($login ===false)
                  {
                      $this->renderloginError();
                  }
                else 
                    {
          $newUser = $this->controller->newUser($this->username, $this->pw);
          $this->renderLoggedIn('loggedIn', 'newUser', $newUser);
                    
                        }
                  
                
        
         
          
         

    }


}
