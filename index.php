<?php
  class USer {
    public $UserID;
    public $Email;
    public $Phone;
    public $Password;

    public function __construct($email, $Password) {
      $this->Email = $email;
    }

    function register($email, $Password) {

    }

    function login($email, $Password) {
      
    }

    function logout($email, $Password) {
      
    }
  }

  $nam = new User('thenam2kx@gmail.com', '12345');
  var_dump($nam);
?>
