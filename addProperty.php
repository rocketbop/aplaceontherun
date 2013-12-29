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
define ( "UPLOAD_PATH",  realpath(dirname(__FILE__)) . "/uploads");

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

if (validateSubmissionTried()) {
	
	if (validatePost()) {
		savePropertyDetails();
	}
	else {
		echo "You have to enter all the fields.";
	}
}
else {

	// display it
	$smarty->display('addProperty.tpl');
}

?>