<?php
//Database Connection Settings
define ('hostnameorservername','localhost'); //Your server name or hostname goes in here
define ('serverusername','root'); //Your database username goes in here
define ('serverpassword','');  //Your database password goes in here
define ('databasenamed','hms');  //Your database name goes in here

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">info@servername.com</font>');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">info@servername.com</font>');	
?>
