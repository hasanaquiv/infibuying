 $(document).ready(function(){
    $("#add").click(function(){
	event.preventDefault();  
		$.ajax({
		type: 'POST',
		url: '../action/action.php',
		data : $('#add-products').serialize(),
		cache: false,
		success: function(data){
			alert(  'Save');
		$("#add-products")[0].reset();
		}
	    });
    });
});