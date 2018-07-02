$(document).ready(function(){
	$('#cart').click(function(){
		event.preventDefault();  
		var p_id = $('#p_id').val();
		$.ajax({
			type: 'POST',
			url: 'action.php',
			data : {p_id:p_id},
			success : function(data){
				$("#d").hide();
				$('#a').html(data);
			}
		})
	});
});