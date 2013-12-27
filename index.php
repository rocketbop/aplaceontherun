<?php
// define paths
define('SMARTY_DIR', 'vendor/smarty/');

//smarty templating
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();

echo "<p>Hello</p>";