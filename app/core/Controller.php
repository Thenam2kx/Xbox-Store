<?php
  class Controller {
    function model ($model) {
      require_once './app/models/'.$model.'.php';
      return new ProductModel();
    }
    function view ($view, $data=[]) {
      require_once './app/views/'.$view.'.php';
    }
  }
?>