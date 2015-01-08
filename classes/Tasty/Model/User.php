<?php

namespace Tasty\Model;

/**
 * Holds one entry in the conversation.
 */
class User{

    private $username;
    private $pw;

    /**
     * 
     * @param string $nick_name The author's nick name.
     * @param string $msg       The message, may contain multiple lines. The lines must be 
     *                           separated by a newline character (ASCCI code 10).
     */
    public function __construct($username, $pw) {
        $this->username = $username;
        $this->pw = $pw;
    }

    /**
     * @return string The author's nick name.
     */
    public function getUserName() {
        return $this->username;
    }

    /**
     * @return array An array where each element is a line in the message.
     */
    public function getPW() {
        return $this->pw;
    }

}

