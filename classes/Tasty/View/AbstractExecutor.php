<?php

namespace Tasty\View;

/**
 * All executors must inherit this class. Event handling follows these steps.
 * 
 * 1. If there is a controller in the current session, it is unserialized and stored in the
 *    field $this->controller. If not, a new controller is initialized.
 * 2. Set methods are called. Executors should provide set methods for all parameters.
 * 3. The doExecute method is called. It should perform the actual event handling, which typically
 *    means to call appropriate method(s) in the controller.
 * 4. doExecute calls the renderResponse method to render next view. 
 * 5. doExecute must return immediately after calling renderResponse.
 * 6. The controller is serialized and stored in the session.
 */
abstract class AbstractExecutor {

    /**
     * This field will always contain an instance of the controller class specified
     * to the constructor.
     */
    protected $controller;
    private $contr_class;

    /*
     * These variables contain the path to view parts. The view layout will be in $this->layout. 
     * 
     * The layout may include the file specified in $this->header as $header_content, 
     * the file specified in $this->nav as $nav_content, the file specified in $this->footer 
     * as $footer_content and the file specified by the implementing subclass as $body_content.
     * "view/" is prepended to these paths and ".php" is appended. 
     * 
     * These values should be configurable in a future version.
     */
    private $home = 'home';
    private $pancakesheader = 'fragments/pancakesHeader';
    private $pancakesErrorHeader = 'fragments/pancakesErrorHeader';
    private $pancakeslayout = 'fragments/pancakesLayout';
    private $meatballsheader = 'fragments/meatballsHeader';
    private $meatballsErrorHeader = 'fragments/meatballsErrorHeader';
    private $meatballslayout = 'fragments/meatballsLayout';
    private $calender = 'calender';
    private $aboutus = 'aboutus';
    private $contact = 'contact';
    private $register = 'register';
    private $login = 'login';
    private $ajax = 'ajax';
    private $loginError = 'loginError';
    private $regheader = 'fragments/registrationHeader';
    private $reglayout = 'fragments/registrationLayout';
    private $loginHeader = 'fragments/loginHeader';
    private $loginLayout = 'fragments/loginLayout';
    private $regErrorlayout = 'fragments/registrationErrorLayout';
    private $editHeader = 'fragments/editHeader';
    private $editLayout = 'fragments/editLayout';
    

    /**
     * Constructs a new instance of the implementing concrete executor.
     * 
     * @param type $contr_class The fully qualified class name of the controllar class that
     *                           shall be available in $this->controller when the execute
     *                           function is called.
     */
    public function __construct($contr_class) {
        $this->contr_class = $contr_class;
    }

    private function init() {
        $contr_class = $this->contr_class;
        \Flight::map('get_controller',
                     function () use ($contr_class) {
            if (session_id() === '') {
                \session_start();
            }

            if (isset($_SESSION[$contr_class])) {
                return unserialize($_SESSION[$contr_class]);
            } else {
                return new $contr_class;
            }
        });
        \Flight::map('save_controller',
                     function($controller) use ($contr_class) {
            $_SESSION[$contr_class] = serialize($controller);
        });
    }

    private function setParams($params) {
        foreach ($params as $param => $value) {
            \call_user_func(array($this, 'set' . \ucfirst($param)), $value);
        }
    }

    /**
     * Contains all infrastructure code for event handling. The event handling procedure is
     * explained in the class comment.
     */
    public function execute() {
        $this->init();
        $this->controller = \Flight::get_controller();
        if (\func_get_arg(0) != NULL) {
            $this->setParams(\func_get_arg(0));
        }
        $this->doExecute();
        \Flight::save_controller($this->controller);
    }

    /**
     * Called by sub classes to render a response.
     * 
     * @param string $view       The next view should be in the file "views/" . $view . ".php" 
     * @param string $model_name The specified data will be available to the view in a variable
     *                            with this name.
     * @param string $model      The data to make available to the view.
     */
    protected function renderHome() {
        \Flight::render($this->home, NULL);

    }
    
     protected function renderPancakes($view) {
        \Flight::render($this->pancakesheader, NULL, 'header_content');
        \Flight::render($view,NULL,'body_content'); 
        \Flight::render($this->pancakeslayout, NULL);

    }
    
     protected function renderMeatballs($view) {
        \Flight::render($this->meatballsheader, NULL, 'header_content');
        \Flight::render($view,NULL, 'body_content'); 
        \Flight::render($this->meatballslayout, NULL);

    }

     protected function renderCalender() {
        \Flight::render($this->calender, NULL);

    }
    
     protected function renderAboutus() {
        \Flight::render($this->aboutus, NULL);

    }
     protected function renderContact() {
        \Flight::render($this->contact, NULL);

    }
    protected function renderRegister() {
        \Flight::render($this->register, NULL);

    }    
     protected function renderLogin() {
        \Flight::render($this->login, NULL);

    }
     protected function renderLoggedIn($view, $model_name, $model) {
        \Flight::render($this->loginHeader, NULL, 'header_content');
        \Flight::render($view, array($model_name => $model), 'body_content'); 
        \Flight::render($this->loginLayout, NULL);
       
     }
          protected function renderEdit($view, $model_name, $model) {
        \Flight::render($this->editHeader, NULL, 'header_content');
        \Flight::render($view, array($model_name => $model), 'body_content'); 
        \Flight::render($this->editLayout, NULL);

    }
         protected function renderRegistration($view, $model_name, $model) {
        \Flight::render($this->regheader, NULL, 'header_content');
        \Flight::render($view, array($model_name => $model), 'body_content'); 
        \Flight::render($this->reglayout, NULL);
    }
         protected function renderError($view, $model_name, $model) {
         \Flight::render($this->regheader, NULL, 'header_content');
        \Flight::render($view, array($model_name => $model), 'body_content'); 
        \Flight::render($this->regErrorlayout, NULL);

    }
             protected function renderloginError() {
        \Flight::render($this->loginError, NULL);

    }
             protected function renderCommentError($view) {
         \Flight::render($this->pancakesErrorHeader, NULL, 'header_content');
        \Flight::render($view,NULL, 'body_content'); 
        \Flight::render($this->pancakeslayout, NULL);

    }
    protected function renderCommentError2($view) {
         \Flight::render($this->meatballsErrorHeader, NULL, 'header_content');
        \Flight::render($view,NULL, 'body_content'); 
        \Flight::render($this->meatballslayout, NULL);

    }
         protected function renderAjax() {
        \Flight::render($this->ajax, NULL);

    }
    

    
    protected function returnJSON($JSON_output) {
        echo(\json_encode($JSON_output));
    }
    
    /**
     * Overriden by subclasses to perform the actual event handling, which typically means to call 
     * appropriate method(s) in the controller. The event handling procedure is explained in the 
     * class comment.
     */
    protected abstract function doExecute();
}
