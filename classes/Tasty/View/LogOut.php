<?php

namespace Tasty\View;

/**
 * Invoked when the user has submitted a new Message.
 */
class LogOut extends \Tasty\View\AbstractExecutor {

    private $cookies;
    private $username;
    private $pw;

    /**
     * @param string $author The nick name of the person who wrote the message.
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @param string $msg The new Message.
     */
    public function setPassword($PW) {
        $this->pw = $PW;
    }

 

    /**
     * @param string $msg The new Message.
     */
    public function setCookies($param) {
        $this->cookies = $param;
    }
    
    protected function doExecute() {
          $newUser = $this->controller->newUser($this->username, $this->pw);
          $this->renderLoggedIn('logOut', 'newUser', $newUser);
        
    }
}