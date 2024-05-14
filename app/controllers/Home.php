<?php
  class Home extends Controller {
    function Sayhi() {
      echo $this->model('ProductModel');
    }

    function Show() {
      echo $this->view('ProductView', []);
    }
  }
?>