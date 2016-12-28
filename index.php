<?php
define("ROOT_DIR", __DIR__);
define("CONTROLLERS_DIR", ROOT_DIR."/controllers");
define("VIEWS_DIR",ROOT_DIR."/views");
require "controllers/{$_GET['controller']}";