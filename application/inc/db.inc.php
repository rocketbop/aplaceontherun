<?php
/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');
/*
* Use a PDO to connect to the database
*/

$conn = new PDO('mysql:host=localhost;dbname=DB_DATABASE', DB_USER, DB_PASSWORD);
$conn->setAttribute(PDO::ERRMODE_EXCEPTION);


$link_id = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD); // Fixed some glaring typos PB 10122013

if(!$link_id) { // Changed to is not true so that the application does not die PB 10122013

	die("Successful Connection");
}

if(mysql_select_db(DB_DATABASE, $link_id)) {
	//echo "<p>Connection to database successful </p>"; Commented out as not needed PB 22 12 2013
	//header("Location: admin.php"); // amended as was incorrectly typed as http://www.ryanair.com PB 10122013
	// commented out as had created a redirect loop by accident. PB 22 12 2013
}
else {
	echo "<p>Connection to database failed  </p>"; //Recommented as useful during development purposes PB 10122013
}