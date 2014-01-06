<?php

include "DB_CON.php";

     
     	
     $id = $_GET['del'];
     $del_query = "DELETE FROM `todo_items` WHERE id=$id";
	 $res = mysql_query($del_query);
     
	



 header('Location: todolist.php');


?>