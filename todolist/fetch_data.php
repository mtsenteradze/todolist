<?php
include_once ('DB_CON.php');

$query = "SELECT * FROM todo_items";
$query_run = mysql_query($query);
$result = array();

while( $row = mysql_fetch_array($query_run))
    array_push($result, array( 'id'=>$row[0], 'todoItem'=>$row[1],'date'=>$row[2]));
	
	
    echo json_encode(array("result"=>$result));
	




?>
