<?php 
/*
require_once("connector/data_connector.php");
require_once("connector/db_sqlite.php");
 
if (!$db = sqlite_open('db', 0777, $sqliteerror)) {
	die($sqliteerror);
}
$data = new JSONDataConnector($db,"SQLite");
$data->render_table("Tasks", "id", "name,age,city");
*/



require_once("connectors/data_connector.php");
require_once("connectors/db_mysqli.php");
$res = mysql_connect ("localhost", "root", "");
mysql_select_db ("AppDB");

$data = new JSONDataConnector ($res);

$data->enable_log ("temp.log");
$data->render_table ("Tasks","id","task");
?>
