<?php

namespace Tasty\View;


class NewMeatballComment extends \Tasty\View\AbstractExecutor {

    private $author;
    private $msg;

    public function setAuthor($author) {
        $this->author = htmlentities($author, ENT_QUOTES);
    }

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

        $bool = $this->controller->meatballusername($this->author);
        $bool2 = $this->validate($this->author, $this->msg);
        if($bool == true && $bool2 == true)        
        {
            $this->controller->meatballcomment($this->author, $this->msg);
            $this->renderMeatballs('meatballComments');
        }
        else
        {
            $this->renderCommentError2 ('meatballComments');
        }
    }

}