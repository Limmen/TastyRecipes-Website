<?php

namespace Tasty\Model;

/**
 * Holds one entry in the conversation.
 */
class Entry {

    private $nick_name;
    private $msg;

    /**
     * 
     * @param string $nick_name The author's nick name.
     * @param string $msg       The message, may contain multiple lines. The lines must be 
     *                           separated by a newline character (ASCCI code 10).
     */
    public function __construct($nick_name, $msg) {
        $this->nick_name = $nick_name;
        $this->msg = \explode("\n", $msg);
    }

    /**
     * @return string The author's nick name.
     */
    public function getNickName() {
        return $this->nick_name;
    }

    /**
     * @return array An array where each element is a line in the message.
     */
    public function getMsg() {
        return $this->msg;
    }

}
