<?php

require 'flight/Flight.php';
require 'classes/Tasty/Util/Util.php';

\Tasty\Util\Util::initRequest();
      

\Flight::route('/new-msg',
               function() {
    $params = array(
        TASTY_AUTHOR_KEY => \Flight::request()->data[TASTY_AUTHOR_KEY],
        TASTY_MSG_KEY => \Flight::request()->data[TASTY_MSG_KEY],
    );
    \Flight::executeAction(new \Tasty\View\NewMessage('\Tasty\Controller\Controller'), $params);
});

\Flight::route('/meatballComment',
               function() {
    $params = array(
        TASTY_AUTHOR_KEY => \Flight::request()->data[TASTY_AUTHOR_KEY],
        TASTY_MSG_KEY => \Flight::request()->data[TASTY_MSG_KEY],
    );
    \Flight::executeAction(new \Tasty\View\NewMeatballComment('\Tasty\Controller\Controller'), $params);
});
\Flight::route('/dbReg',
               function() {
    $params = array(
        TASTY_USER_KEY => \Flight::request()->data[TASTY_USER_KEY],
        TASTY_PW_KEY => \Flight::request()->data[TASTY_PW_KEY],
        TASTY_NICKNAME_KEY => \Flight::request()->data[TASTY_NICKNAME_KEY]
    );
    \Flight::executeAction(new \Tasty\View\NewUserDB('\Tasty\Controller\Controller'), $params);
});

\Flight::route('/userLog',
               function() {
    $param = \Flight::request()->cookies;
    $params = array(
        TASTY_USER_KEY => \Flight::request()->data[TASTY_USER_KEY],
        TASTY_PW_KEY => \Flight::request()->data[TASTY_PW_KEY],
    );
    \Flight::executeAction(new \Tasty\View\NewLogin('\Tasty\Controller\Controller'), $params,$param);
});


\Flight::route('/LogOut',
               function() {
    $param = \Flight::request()->cookies;
    $params = array(
        TASTY_USER_KEY => \Flight::request()->data[TASTY_USER_KEY],
        TASTY_PW_KEY => \Flight::request()->data[TASTY_PW_KEY],
    );
    \Flight::executeAction(new \Tasty\View\LogOut('\Tasty\Controller\Controller'), $params,$param);
});

\Flight::route('/',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowHome('\Tasty\Controller\Controller'));
});
\Flight::route('/home',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowHome('\Tasty\Controller\Controller'));
});
\Flight::route('/pancakes',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowPancakes('\Tasty\Controller\Controller'));
});
\Flight::route('/meatballs',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowMeatballs('\Tasty\Controller\Controller'));
});
\Flight::route('/Calender',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowCalender('\Tasty\Controller\Controller'));
});
\Flight::route('/Aboutus',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowAboutus('\Tasty\Controller\Controller'));
});
\Flight::route('/Contact',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowContact('\Tasty\Controller\Controller'));
});
\Flight::route('/Register',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowRegister('\Tasty\Controller\Controller'));
});
\Flight::route('/Login',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowLogin('\Tasty\Controller\Controller'));
});
\Flight::route('/Ajax',
               function() {
    \Flight::executeAction(new \Tasty\View\ShowAjax('\Tasty\Controller\Controller'));
});
\Flight::route('/editComment',
               function() {
    $params = array(
        TASTY_EDIT_KEY => \Flight::request()->data[TASTY_EDIT_KEY],
        );
    \Flight::executeAction(new \Tasty\View\editComment('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/editComment2',
               function() {
    $params = array(
        TASTY_EDIT_KEY => \Flight::request()->data[TASTY_EDIT_KEY],
        );
    \Flight::executeAction(new \Tasty\View\editComment2('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/deleteComment',
               function() {
    $params = array(
        TASTY_DELETE_KEY => \Flight::request()->data[TASTY_DELETE_KEY],
        );
    \Flight::executeAction(new \Tasty\View\deleteComment('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/deleteComment2',
               function() {
    $params = array(
        TASTY_DELETE_KEY => \Flight::request()->data[TASTY_DELETE_KEY],
        );
    \Flight::executeAction(new \Tasty\View\deleteComment2('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/ajaxJson/@username/@comment',
             function($username, $comment) { 
  $params = array(
        TASTY_AUTHOR_KEY => $username,
        TASTY_MSG_KEY => $comment);
       
    \Flight::executeAction(new \Tasty\View\newAjax('\Tasty\Controller\Controller'),$params);
});

\Flight::route('/newComments/@id',
             function($id) { 
   $params = array(TASTY_ID_KEY => $id);
    \Flight::executeAction(new \Tasty\View\getNewComments('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/ajaxdelete/@username/@comment',
             function($username, $comment) { 
  $params = array(
        TASTY_AUTHOR_KEY => $username,
        TASTY_MSG_KEY => $comment);
       
    \Flight::executeAction(new \Tasty\View\ajaxDelete('\Tasty\Controller\Controller'),$params);
});
\Flight::route('/newPancakes',
             function() { 
   // $params = array(TASTY_LASTREAD_KEY => $last_read_time);
    \Flight::executeAction(new \Tasty\View\getNewPancakes('\Tasty\Controller\Controller'));
});

\Flight::route('*', function() {
    \Flight::notFound();
});

\Flight::start();
