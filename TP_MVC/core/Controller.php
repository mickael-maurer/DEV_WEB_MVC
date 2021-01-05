<?php


final class Controller {

    private $_A_urlParsed = null;

    public function __construct ($S_controller, $S_action)
    {

        if (empty($S_controller)) {
            $this->_A_urlParsed['controller'] = 'DefaultController';
        } else {
            $this->_A_urlParsed['controller'] = ucfirst($S_controller) . 'Controller';
        }

        if (empty($S_action)) {
            $this->_A_urlParsed['action'] = 'defaultAction';
        } else {
            $this->_A_urlParsed['action']  = $S_action . 'Action';
        }

    }

    public function run() {
        call_user_func_array(array(new $this->_A_urlParsed['controller'],
            $this->_A_urlParsed['action']), array());

    }
}