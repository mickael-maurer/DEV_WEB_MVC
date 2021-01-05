<?php
require ('core/AutoLoader.php');

$S_controller = isset($_GET['ctrl']) ? $_GET['ctrl'] : null;
$S_action = isset($_GET['action']) ? $_GET['action'] : null;

View::openBuffer();

$S_controllerName = ucfirst($S_controller) . 'Controller';

$O_controller = new $S_controllerName($S_controller, $S_action);
$O_controller->run();

$viewContent = View::getBufferContent();
View::getView('include/Body', array('body' => $viewContent));