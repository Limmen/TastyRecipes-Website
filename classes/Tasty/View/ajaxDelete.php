<?php

namespace Tasty\View;


class ajaxDelete extends \Tasty\View\AbstractExecutor {

    private $author;
    private $msg;

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setMessage($msg) {
        $this->msg = $msg;
    }


    protected function doExecute() {
        
        
            $this->controller->deleteajax($this->author, $this->msg);
            $this->renderMeatballs('meatballComments');
    }
    

}