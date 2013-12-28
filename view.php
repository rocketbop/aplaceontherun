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

// Call getTable function to get data to populate the table
$results = getTable();

// define paths
define('SMARTY_DIR', 'vendor/smarty/');

//smarty templating
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

// SET  BOOLEAN FOR LOGGED IN OR NOT, FOR NON LOGGED IN USERS SET THE PUBLIC FOLDER
// set the templates dir
$smarty->setTemplateDir(SMARTY_DIR . 'templates/private/');


$smarty->assign('properties', $results);
// display it
$smarty->display('view.tpl');

?>