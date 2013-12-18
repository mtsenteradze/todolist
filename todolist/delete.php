<?php

include "DB_CON.php"

if($_REQUEST['action'] == 'del'){
     $req_id = $_REQUEST['id'];
     $del_query = mysql_query("DELETE FROM `todo_items` WHERE id='$req_id'");
}



?>