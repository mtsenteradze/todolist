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
	$('#content_disp').prepend("<li>todo Item:  "+this['todoItem']+
	                           "<input type = 'button' value = 'delete'>"+
							   "<input type = 'button' value = 'edit'>"+
							   "</li><li>date  :"+this['date']+
							   "</li><br />  ");
	
	
	});
});

}