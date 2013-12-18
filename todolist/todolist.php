<head>
<title>todo list</title>
</head>

<form id = "myForm" action = "insert_db.php" method = "POST">
    <span id = "result"></span>
	todo Item:</br>
	<textarea rows = "4" cols = "30" class = "raw" type = "text" name = "todoItem"></textarea></br>
	date:</br>
    <input class = "raw" type = "text" name = "date"></br>
	<input id = "submit" type = "submit" value = "add" name = "submit">
	
	
</form>


<ul id = "content_disp"></ul>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type = "text/javascript" src = "script.js"></script>
<script type = "text/javascript" src = "fetch_data.js"></script>

