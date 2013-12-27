<?php
session_start();

//if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1) {
//header("Location: admin.php");
//}
/*
 * Set up constant to ensure include files cannot be called on their own
 */
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );
/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

if ((!empty($_POST['username'])) && (!empty($_POST['password']))) {

  $username = htmlspecialchars($_POST['username']);
  $password = $_POST['password'];
  
  if (authenticateUser($username, $password)) {
      $_SESSION["loggedIn"] = 1;
      header("Location: admin.php");
  } 
  else {
    echo "Authentication failed.";
  }
}
else {
  echo "Problem with post.";
}     

?>

