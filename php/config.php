<?php 

/**
 *	@author: Piotr "PeterMax" Martficki <petermax_30@gmx.co.uk>
 *	@Copyright 2016
 *	@version 1.0
 * 	@package MySQLi_My_Manager
 *	@category Database
 */

define('DB_HOST', 'mysql.hostinger.co.uk'); 	//host
define('DB_USER', 'u665738430_peter'); 		// db username
define('DB_PASS', 'Pieseczek.13'); 			// db password 
define('DB_NAME', 'u665738430_data'); 		// db name

require 'Mysqli_My_Manager.php';

try {

	$db = new Mysqli_My_Manager();

} catch (Exception $err) {

	exit($err->getMessage());
}

?>