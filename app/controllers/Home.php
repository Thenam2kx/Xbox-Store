<?php
  class Home extends Controller {
    function GetModels() {
      echo $this->model('ProductModel');
    }

    function GetViews() {
      echo $this->view('ProductView', []);
    }
  }
?>