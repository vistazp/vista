<?php

class bootstrap {

    private $_url = null;
    private $_controller = null;

    function __construct() {

        $this->_getUrl();
        //print_r($url);

        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }

        $this->_loadExistingController();
        
        $this->_loadControllerMethod();
    }

    private function _getUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }

    private function _loadDefaultController() {
        require 'controllers/index.php';
        $this->_controller = new index;
        $this->_controller->loadModel('index');
        $this->_controller->index();
     }

    private function _loadExistingController() {
        $file = 'controllers/' . $this->_url[0] . '.php';
        if (file_exists($file)) {
            require $file;
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0]);
        } else {
            $this->_error();
            exit();
        }
    }

    private function _loadControllerMethod() {
        // calling methods
        if (isset($this->_url[2])) {
            if (method_exists($this->_controller, $this->_url[1])) {
                $this->_controller->{$this->_url[1]}($this->_url[2]);
            } else {
                $this->_error();
            }
        } else {
            if (isset($this->_url[1])) {
                if (method_exists($this->_controller, $this->_url[1])) {
                    $this->_controller->{$this->_url[1]}();
                } else {
                    $this->_error();
                }
            } else {
                $this->_controller->index();
            }
        }
    }

    private function _error() {
        require 'controllers/error.php';
        $this->_controller = new error();
        $this->_controller->index();
        return false;
    }

}
