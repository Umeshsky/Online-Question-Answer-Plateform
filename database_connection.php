<?php

define ('hostnameorservername','localhost'); //Your Server Name or host Name goes in here
define ('serverusername','root'); //Your database Username goes in here
define ('serverpassword',''); //Your database Password goes in here
define ('databasenamed','forgot'); //Your database Name goes in here

global $connection;
$connection = @mysql_connect(hostnameorservername,serverusername,serverpassword) or die('Connection could not be made to the SQL Server. Please report this system error at <font color="blue">admin@vetbossel.in</font>');
@mysql_select_db(databasenamed,$connection) or die('Connection could not be made to the database. Please report this system error at <font color="blue">admin@vetbossel.in</font>');	
?>
