<?php

class Core {


    public function __construct() {
        
        $this->run();
    }

    public function run() {

        $parametros = array();

        if(isset($_GET['pag'])) {
            $url = $_GET['pag'];
        }
        if(!empty($url)) {
            $url = explode('/', $url);
            $controller = ucfirst($url[0])."Controller";
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])) {
                $method = $url[0];
                array_shift($url);
            } else {
                $method = 'index';
            }

            if(count($url) > 0) {
                $parametros = $url;
            }

        } else {
            $controller = 'DashboardController';
            $method = 'index';
        }

        $path = 'Controller/' . $controller . '.php'; 
        if(!file_exists($path)) {
            $controller = 'DashboardController';
            $method = 'index';
        }

        require_once $path;
        $c = new $controller();

        if(!method_exists($c, $method)) {
            $method = 'index';
        }

        call_user_func_array(array($c, $method), $parametros);
    }
}
?>
