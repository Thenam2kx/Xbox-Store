<?php
  class Home extends Controller {
    function SayHi () {
      $viewHome = $this->view('master.php');
      echo $viewHome;
    }

    function Cate ($m, $n) {
      $tong = $this->model('Product_Mdl');
      echo $tong->Tong($m, $n);
    }


  }
?>