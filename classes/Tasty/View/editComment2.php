<?php

namespace Tasty\View;

class editComment2 extends \Tasty\View\AbstractExecutor {

    
   
    private $id;

  
    public function setEdit($id) {
        $this->id = $id;
    }

    protected function doExecute() {
        $commentid = $this->id;   
        $this->renderEdit('Editing2', 'commentid', $commentid);
    }

}
