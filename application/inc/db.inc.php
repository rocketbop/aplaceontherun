<?php
/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');
/*
* Use a PDO to connect to the database
*/
try {
	$conn = new PDO('mysql:host=localhost;dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();

}