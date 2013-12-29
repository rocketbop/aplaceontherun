<?php
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== 1) {
header("Location: index.php");
}

// define paths
define('SMARTY_DIR', 'vendor/smarty/');

//smarty templating
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

// set the templates dir
$smarty->setTemplateDir(SMARTY_DIR . 'templates/private/');
$smarty->assign('activeHome', 'active'); //For active nav bar
// display it
$smarty->display('admin.tpl');

?>

