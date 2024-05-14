<?php
  class App {
    protected $controller = 'Home';
    protected $action = 'Sayhi';
    protected $params = [];

    public function __construct() {
      // Array ( [0] => Home [1] => Sayhi [2] => 1 [3] => 2 [4] => 3 ) 
      $arr = $this->UrlProcess();

      // Handle Controller
      if (file_exists('./app/controllers/'.$arr[0].'.php')) {
        $this->controller = $arr[0];
        unset($arr[0]);
      }
      // Alway return Home when url error
      require_once './app/controllers/'.$this->controller.'.php';

      // Handle Action
      if (isset($arr[1])) {
        if (method_exists($this->controller, $arr[1])) {
          $this->action = $arr[1];
        }
        unset($arr[1]);
      }

      // Handle Params
      $this->params = $arr ? array_values($arr) : [];

      call_user_func_array([new $this->controller, $this->action], $this->params);

    }

    function UrlProcess() {
      if (isset($_GET["url"])) {
        return explode("/", filter_var(trim($_GET['url'], "/")));
      }
    }
  }
?>