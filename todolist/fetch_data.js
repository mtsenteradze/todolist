$(document).ready(function(){
done();
});
function done(){
    setTimeout(function() {
	updates();
	done();
	}, 200);
}
function updates()  {
$.getJSON("fetch_data.php", function(data){
    $('#content_disp').empty();
	$.each(data.result, function(){
	$('#content_disp').prepend("<li id = 'item'>Todo Item:  "+this['todoItem']+
							   "</li><li id = 'Date'>date  :"+this['date']+
							   "</li>"+
							   "<a id = 'delete' href = 'Delete.php?del='$row[1]'>Delete </a>"+
							   "<a id = 'edit' href = 'Edit.php?edit=$row[id]'> Edit</a><br /> "
							   );
	
	
	});
});

}