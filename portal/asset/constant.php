<?php

date_default_timezone_set('Africa/Lagos');

 $today = date('ymd');
   $dd = date('ymd');
    $mm = date('ym'); 
	$yy = date('y');
	$ww = date('yW');
	$yyyy = date('Y');
	$lm = $mm-1;
	$lw = $ww-1;
	




  ////change this item to and id number and not name 

		

define("DB_SERVER", "localhost");
define("DB_USER", "root");//enter your database username
define("DB_PASS", "");   //databse password
define("DB_NAME", "thehillt_hilluser");//database name


/**
 * Special Names and Level Constants - the admin
 * page will only be accessible to the user with
 * the admin name and also to those users at the
 * admin user level. Feel free to change the names
 * and level constants as you see fit, you may
 * also add additional level specifications.
 * Levels must be digits between 09
 **/


define("TODAY", date("Y-m-d"));



$db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);


?>
