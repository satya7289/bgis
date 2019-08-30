<?php
$mysql_server = 'localhost';
$mysql_login = 'root';
$mysql_password = '';
$mysql_database = 'sigma';

mysql_connect($mysql_server, $mysql_login, $mysql_password);
mysql_select_db($mysql_database);

$req = "SELECT client_name FROM orders WHERE client_name LIKE '%".$_REQUEST['term']."%' "; 

$query = mysql_query($req);
echo '<pre>'; print_r($query); die();
while($row = mysql_fetch_array($query))
{
	$results[] = array('label' => $row['client_name']);
}

echo json_encode($results);

?>

