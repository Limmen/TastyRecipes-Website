<?php

namespace Tasty\View;

/**
 * Invoked when the user has submitted a new Message.
 */
class NewMessage extends \Tasty\View\AbstractExecutor {

    private $author;
    private $msg;

    /**
     * @param string $author The nick name of the person who wrote the message.
     */
    public function setAuthor($author) {
        $this->author = htmlentities($author, ENT_QUOTES);;
    }

    /**
     * @param string $msg The new Message.
     */
    public function setMessage($msg) {
        $this->msg = htmlentities($msg, ENT_QUOTES);
    }
    
    public function validate()
    {
        if(ctype_print($this->author) and ctype_print($this->msg))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    protected function doExecute() {         
         $bool = $this->controller->pancakesusername($this->author);
         $bool2 = $this->validate($this->author, $this->msg);
        if($bool == true && $bool2 == true)        
        {
            $this->controller->pancakescomment($this->author, $this->msg);
        
        $this->renderPancakes('comments');
        }
        else
        {
            $this->renderCommentError ('comments');
        }
    }

}
