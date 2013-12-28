<?php
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== 1) {
header("Location: index.php");
}

// Set up constant to ensure include files cannot be called on their own
define ( "MY_APP", 1 );

// Set up a constant to your main application path
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );

//Includes
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

// define paths
define('SMARTY_DIR', 'vendor/smarty/');

//smarty templating
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

// set the templates dir
$smarty->setTemplateDir(SMARTY_DIR . 'templates/private/');


var_dump($_POST);
if (!empty($_POST['address_line_1'])) {
	echo "That's not empty. They're shit in there.";
}
else {
// display it
	echo "What.";
$smarty->display('addProperty.tpl');
}

?>