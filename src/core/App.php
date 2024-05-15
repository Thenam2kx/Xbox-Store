<?php
  class App {
    protected $controller = 'Home';
    protected $action = 'Contact';
    protected $params = [];

    public function __construct() {
      $url = $this->UrlHandle();
      
      // $this->ControllerHandle($url);
      // $this->ActionHandle($url);
      // $this->ParamsHandle($url);

      // Handle Controller
      if (file_exists('./src/controllers/'.$url[0].'.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
      // Alway return Home when url error
      require_once './src/controllers/'.$this->controller.'.php';

      // Handle Action
      if (isset($url[1])) {
        if (method_exists($this->controller, $url[1])) {
          $this->action = $url[1];
        }
        unset($url[1]);
      }

      // Handle Params
      $this->params = $url ? array_values($url) : [];
      call_user_func_array([new $this->controller, $this->action], $this->params);
    }

    function UrlHandle () {
      if (isset($_GET['url'])) {
        return explode("/", filter_var(trim($_GET['url'], "/")));
      }
    }

    function ControllerHandle ($url) {
      if (file_exists('./src/controllers/'.$url[0].'.php')) {
        $this->controller = $url[0];
        unset($url[0]);
      }
      require_once './src/controllers/'.$this->controller.'.php';
    }

    function ActionHandle ($url) {
      if (isset($url[1])) {
        if (method_exists($this->controller, $url[1])) {
          $this->action = $url[1];
        }
        unset($url[1]);
      }
    }

    function ParamsHandle ($url) {
      $this->params = $url ? array_values($url) : [];
    }
  }
?>