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



$propertyId = (int)($_POST['property_id']);
$addressId = (int)($_POST['address_id']);

if (!$_POST['newDataForUpdating'] == 'yes') {

	$properties = getPropertyToBeUpdated($propertyId, $addressId);
	$counties = getCounties();
	$houseTypes = getHouseTypes();


	// define paths
	define('SMARTY_DIR', 'vendor/smarty/');

	//smarty templating
	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	// set the templates dir
	$smarty->setTemplateDir(SMARTY_DIR . 'templates/private/');


	$smarty->assign('properties', $properties);
	$smarty->assign('counties', $counties);
	$smarty->assign('houseTypes', $houseTypes);
	$smarty->assign('uploadPath', UPLOAD_PATH);

	$smarty->display('updateProperty.tpl');

}
else {

	updateProperty($propertyId, $addressId);
	header("Location: view.php");

		// define paths
	define('SMARTY_DIR', 'vendor/smarty/');

	//smarty templating
	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();

	// set the templates dir
	$smarty->setTemplateDir(SMARTY_DIR . 'templates/private/');

	$smarty->display('propertyUpdated.tpl');
}

?>