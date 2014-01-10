
    <?php
include ('DB_CON.php');
    


    if (isset($_POST['todoItem']) && isset($_POST['date'])){
    $todoItem = trim($_POST['todoItem']);
    $date = trim($_POST['date']);
    if (!empty($todoItem) && !empty($date)){
    
		$query = "INSERT INTO `todo_items` VALUES ('','$todoItem','$date')";
	    
		mysql_query($query);


	}else{

		echo 'enter';
	}

	}
	?>