
$(function(){

	$('.edit-btn').click(function(){
		$('#passwordForm').attr('action', '/updatePassword')
	});

	$('#add-btn').click(function(){
		// $("#passwordForm")[0].reset();
		$('#passwordForm').attr('action', '/addPassword')
		$('.allfields').val('');
	});

	function checkURL(url){
		var expression = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9]\.[^\s]{2,})/
		var regex = new RegExp(expression);
		if(url.match(regex)){
			
		}
		return url.match(regex);
	}



	function isEmpty(str) {
    	return (!str || 0 === str.length);
	}

	$(document).on('submit','#passwordForm',function(evt){

	   	var url = $('#url').val();
	   	var name = $('#name').val();
	   	var username = $('#username').val();
	   	var password = $('#password').val();

	
	   	// console.log(url);
		if(checkURL(url)){

		} else {
			alert("Check Information")
			evt.preventDefault();
		}


	});

})
