<?php


namespace Tasty\View;

/**
 * Invoked when the user has specified an instruction to simulate.
 */
class ShowRegister extends \Tasty\View\AbstractExecutor {

    /**
     * Shows the entire conversation.
     */
    protected function doExecute() {
        $this->renderRegister();
    }

}
