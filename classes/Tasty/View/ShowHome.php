<?php

namespace Tasty\View;

class ShowHome extends \Tasty\View\AbstractExecutor {

    
    protected function doExecute() {
        $this->renderHome();
    }

}
