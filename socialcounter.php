<?php
/*
 * Social Action Counting - Counting Page
 * 
 * GitHub Repo: https://github.com/ccagle8/php-js-social-action-counter
 * 
 * @created 06/10/2013
 * @author Chris Cagle <admin@cagintranet.com>
 * 
 */
 
 
if (session_id()=='') session_start();

/*
 * NOTE! This page assumes that you have a live connection to a MySQL database. 
 * Either include your connection file, or create the connection now...
 */

/*
 * Prevent SQL injections
 */
function clean($data, $db=true, $html=false) {
	
	$data = trim($data);
  if (get_magic_quotes_gpc()) { $data = stripslashes($data); } // if get magic quotes is on, stripslashes
  if ($html) { $data = strip_tags($data); } // no html wanted
	
	if (!$db) { // not used in query (just email or display)
		return $data;
	} elseif ($db) { // used in mysql query
		if (is_numeric($data)) {
			return $data;
		} else {
			$data = mysql_real_escape_string($data);
			return $data;
		}
 }
 
}


# Setup variables
$status = false;
$type = $_GET['t'];
$action = $_GET['a'];
$page_id = $_SESSION['page_to_count']; // this is set in $_SESSION on the page where the social buttons are.


# Quick validation of required fields
if ( $type != '' || $action != '' || $page_id != '') {
	$status =  false;
}


if (!$status) {
	if ($action=='add') {
		mysql_query("INSERT INTO stats VALUES (null, '".date('Y-m-d')."', '".clean($page_id)."', '".clean($type)."', 1) ON DUPLICATE KEY UPDATE count=count+1");
	}
	
	if ($action=='del') {
		mysql_query("INSERT INTO stats VALUES (null, '".date('Y-m-d')."', '".clean($page_id)."', '".clean($type)."', 0) ON DUPLICATE KEY UPDATE count=count-1");
	}

}

return $status;
exit;