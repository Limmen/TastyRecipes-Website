<?php


namespace Tasty\View;

/**
 * Invoked when the user has specified an instruction to simulate.
 */
class getNewComments extends \Tasty\View\AbstractExecutor {
    private $id;
    
    
        public function setid($id) {
        $this->id = $id;
    }

    /**
     * Shows the entire conversation.
     */
    protected function doExecute() 
    {
        $conversation = $this->controller->getNewerEntries($this->id);
        $this->returnJSON($conversation);   
    }

}

