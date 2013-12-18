$("#submit").click(function(){

var data = $("#myForm :input").serializeArray();
    $.post($("#myForm").attr("action"), data);
    clearInput();
});

$("#myForm").submit(function(){
    return false;
}

);

function clearInput() {
    $("#myForm :input").each(function() {
	    $(this).val('');
		});
 }