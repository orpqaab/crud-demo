<?php
define("ROOT_DIR", __DIR__);
define("CONTROLLERS_DIR", ROOT_DIR."/controllers");
define("VIEWS_DIR",ROOT_DIR."/views");

require 'autoload.php';

$app = new Bevprog\CrudDemo\Application();
$app->run($_GET);