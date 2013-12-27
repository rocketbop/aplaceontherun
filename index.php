<?php
// define paths
define('SMARTY_DIR', 'vendor/smarty/');

//smarty templating
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

// set the templates dir
$smarty->setTemplateDir(SMARTY_DIR . 'templates/');
// display it
$smarty->display('index.tpl');

?>

