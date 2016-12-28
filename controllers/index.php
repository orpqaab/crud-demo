<?php
$viewtemplate=  implode("", file(VIEWS_DIR."/index.php"));
echo $viewtemplate;