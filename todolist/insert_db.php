
    <?php
include ('DB_CON.php');
    $todoItem = $_POST['todoItem'];
    $date = $_POST['date'];
    
		$query = "INSERT INTO `todo_items` VALUES ('','$todoItem','$date')";
	    
		if (mysql_query($query)){
	   
		echo 'inserted: '. $todoItem .' '. $date;
		
	
    }else{
	    echo'failed to insert data';
		die();
	    }
	?>