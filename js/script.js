/*$(document).ready(function(){

function checkdb(){
	$.ajaxSetup({
        url: "code_validate.php",
        type: "POST",
    });
    $.ajax({
	    method: 'POST',
	    dataType:'json',
	    data: {'username' : desiredUsername}, //then getting $_POST['username']
	    success: function(datas) {
	        console.log(datas); //Your previous data from the server side
	    },
	    error: function(XMLHttpRequest, textStatus, errorThrown){    
	        console.log(textStatus);
	    }
	});
}*/