<?php

namespace Tasty\View;

/**
 * Invoked when the user has specified an instruction to simulate.
 */
class deleteComment extends \Tasty\View\AbstractExecutor {

    
   
    private $id;

    /**
     * @param string $author The nick name of the person who wrote the message.
     */
    public function setDelete($id) {
        $this->id = $id;
    }


    /**
     * Shows the entire conversation.
     */
    protected function doExecute() {
        $commentid = $this->id;
        $this->controller->deletepancakes($commentid);
        $this->renderPancakes('comments');
    }

}