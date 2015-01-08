<?php

namespace Tasty\View;


class newAjax extends \Tasty\View\AbstractExecutor {

    private $author;
    private $msg;

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setMessage($msg) {
        $this->msg = $msg;
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
        $bool2 = $this->validate($this->author, $this->msg);
        if($bool2 == true)
        {
         $this->controller->ajaxcomment($this->author, $this->msg);
        }
    }
    

}