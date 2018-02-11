<?php
   	$dbhost ="localhost";
   	$dbuser = "root";
   	$dbpass = "";
	$link = mysql_connect($dbhost, $dbuser, $dbpass);
	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	}
	//Database Selection
	mysql_select_db('store_locator',$link) or die(mysql_error());
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully'."<br/>";

   //just added for git on 11-02-2018 23:48
   ?>
