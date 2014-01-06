<html>
<head>
<title>todo list</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Schoolbell&v1' rel='stylesheet' type='text/css'>
</head>
<body>

<div = "main_div">
<div id = "input">
<form id = "myForm" action = "insert_db.php" method = "POST">
	todo Item:</br>
	<textarea rows = "5" cols = "55" class = "raw" type = "text" name = "todoItem"></textarea></br>
	date:</br>
    <input class = "raw" type = "text" name = "date"></br>
	<input id = "submit" type = "submit" value = "add" name = "submit">
	
</form>
</div>

<div id = 'display'>
    
    <li id = "content_disp"></li>
    
</div>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type = "text/javascript" src = "script.js"></script>
<script type = "text/javascript" src = "fetch_data.js"></script>

</body>
</html>

