<?php
  class USer {
    public $UserID;
    public $Email;
    public $Phone;
    public $Password;

    public function __construct() {
      echo 'User';
    }

    function register($email, $Password) {

    }

    function login($email, $Password) {
      
    }

    function logout($email, $Password) {
      
    }
  }

  $nam = new User();

?>