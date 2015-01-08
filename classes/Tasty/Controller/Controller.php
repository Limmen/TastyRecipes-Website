<?php

namespace Tasty\Controller;


/**
 * This is the application's sole controller. All calls from view to lower layers pass through here.
 */
class Controller {
  private $login;
  private $meatball;
  private $pancakes;
  private $user;
  private $deletemeatball;
  private $deletepancake;
  private $Mcomments;
  private $deleteajax;
  private $ajax;
  
    public function __construct() {
     $this->login = new \Tasty\Integration\login();
     $this->meatball = new \Tasty\Integration\meatballComment();
     $this->pancakes = new \Tasty\Integration\pancakesComment();
     $this->user = new \Tasty\Integration\user();
     $this->deletemeatball = new \Tasty\Integration\deletemeatball();
     $this->deletepancake = new \Tasty\Integration\deletepancake();
     $this->Mcomments = new \Tasty\Integration\Mcomments();
     $this->deleteajax = new \Tasty\Integration\deleteajax();
     $this->ajax = new \Tasty\Integration\ajaxcomment();
    }
    
    public function newUser($username, $password) {
      $newUser = new \Tasty\Model\User($username, $password);
      return $newUser;
    }

     public function login($username, $password) {
       $log =  $this->login->login($username, $password);
       return $log;
    }
         public function meatballusername($username) {
       $meatballusername =  $this->meatball->checkUsername($username);
       return $meatballusername;
         }
         
           public function meatballcomment($username, $password) {
       $this->meatball->comment($username, $password);
         }
         
        public function pancakesusername($username) {
       $pancakesusername =  $this->pancakes->checkUsername($username);
       return $pancakesusername;
         }
         
           public function pancakescomment($username, $password) {
       $this->pancakes->comment($username, $password);
         }
         
           public function user_exists($username) {
       $userexists =  $this->user->user_exists($username);
       return $userexists;
         }
         
           public function register($username, $password, $nickname) {
       $this->user->register($username, $password, $nickname);
         }
         
          public function deleteMeatballs($commentid) {
       $this->deletemeatball->delete($commentid);
         }
          public function deletePancakes($commentid) {
       $this->deletepancake->delete($commentid);
         }
        public function getNewerEntries($id) {
        return $this->Mcomments->newComments($id);        
    }
              public function deleteajax($username, $comment) {
       $this->deleteajax->delete($username, $comment);
         }
         
        public function ajaxcomment($username, $comment) {
       $this->ajax->comment($username, $comment);
         }
}
