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

$propertyId = (int)($_POST['property_id']);
$addressId = (int)($_POST['address_id']);

deleteProperty($propertyId, $addressId);

header("Location: view.php");

