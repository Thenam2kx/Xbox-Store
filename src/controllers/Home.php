<?php
  class Home extends Controller {
    function SayHi () {
      $nam = $this->model('Product_Mdl');
      echo $nam->GetProducts();
    }

    function Cate ($m, $n) {
      $tong = $this->model('Product_Mdl');
      echo $tong->Tong($m, $n);
    }

    function Account () {
      echo 'Home > Account';
    }

  }
?>