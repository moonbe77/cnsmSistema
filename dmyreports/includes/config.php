<?php
// Basic Parameters
$pageTitle = "Report Manager"; 

// Database To Be Queired
$hostname_connDB = "localhost"; 	// The host name of the MySql server
$database_connDB = "u865215954_cnsm"; 			// The name of the Database to be queired
$username_connDB = "u865215954_web";			// Username to login to the server
$password_connDB = "cnsm134679";			// Password to the MySQL server
$dbVisTables = "";			// The name of the tables to be displayed seperated by commas. 
							// Leave this blank if all the tables and views are to be displayed.
							// eg $dbVisTables = "table1,table2,table3";

//Databse To Save Reports
$hostname_connSave = "localhost"; 	// The host name of the MySql server where the generated reports are to be saved
$database_connSave = "u865215954_dmy"; 	// The name of the Database to save the generated reports
$username_connSave = "u865215954_dmy";	// Username to login to the server
$password_connSave = "dmy3314";		// Password to the MySQL server

//Do not edit after this point

$connDB = new mysqli($hostname_connDB, $username_connDB, $password_connDB);
if ($mysqli->connect_error) {
	trigger_error(mysql_error(),E_USER_ERROR);
    die('Connect Error (' . $mysqli->connect_errno . ') '
			. $mysqli->connect_error);			
}


$connSave = new mysqli($hostname_connSave, $username_connSave, $password_connSave);
if ($mysqli->connect_error) {
	trigger_error(mysql_error(),E_USER_ERROR); 
    die('Connect Error (' . $mysqli->connect_errno . ') '
			. $mysqli->connect_error);			
}
?>