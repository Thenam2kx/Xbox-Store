<?php
  class Home extends Controller {
    function SayHi () {
<<<<<<< HEAD
      $viewHome = $this->view('master');
=======
      $viewHome = $this->view('master.php');
>>>>>>> 11e2c3cd533b4b1e61f80cd11871aa06fb0fdc9b
      echo $viewHome;
    }

    function Cate ($m, $n) {
      $tong = $this->model('Product_Mdl');
      echo $tong->Tong($m, $n);
    }


  }
?>