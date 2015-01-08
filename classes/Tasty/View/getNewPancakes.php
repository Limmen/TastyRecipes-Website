<?php
/**
 * Invoked when the user has specified an instruction to simulate.
 */
class getNewPancakes extends \Tasty\View\AbstractExecutor {
   // private $lastread;
    
    /*
        public function setLast_Read_Time($lastread) {
        $this->lastread = $lastread;
    }
*
     * 
     */
    /**
     * Shows the entire conversation.
     */
    protected function doExecute() 
    {
        $conversation = $this->controller->getNewerPancakes();
        $this->returnJSON($conversation);   
    }

}

