<?php


namespace Tasty\View;

/**
 * Invoked when the user has specified an instruction to simulate.
 */
class ShowMeatballs extends \Tasty\View\AbstractExecutor {

    /**
     * Shows the entire conversation.
     */
    protected function doExecute() {
        //$meatballcomments = $this->controller->getMeatballComments();
        $this->renderMeatballs('meatballComments');
    }

}