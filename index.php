<?php

require './Controllers/BaseController.php';

/**
 * A request URL looks like this: ../mvc_demo/index.php/?controller={controllerName}&action={controllerAction}
 * - controllerName is the name of the controller class (If null, the default controller will be used)
 * - controllerAction is the action method that is called when the request is made (If null, the default action index() will be used)
 */

// Get the controller name from the URL
$controllerName = ucfirst(strtolower($_REQUEST['controller']) ?? 'Default') . 'Controller';

// Get the action name from the URL
$controllerAction = $_REQUEST['action'] ?? 'index';

// Require the controller class
require './Controllers/' . $controllerName . '.php';

// Create an instance of the controller class and call the corresponding action method
$controller = new $controllerName;
$controller->$controllerAction();
