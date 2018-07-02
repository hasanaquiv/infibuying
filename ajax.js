$(document).ready(function(){
	$('#cart').click(function(){
		event.preventDefault();  
		var p_id = $('#p_id').val();
		$.ajax({
			type: 'POST',
			url: 'cartAction.php?action=addToCart',
			data : {id:p_id},
			success : function(data){
				alert('Add Succsesful');
				$("#d").hide();
				$('#a').html(data);
			}
		})
	});
});

$(document).ready(function(){
	$('a#del').click(function(){
		event.preventDefault();  
		var del_id = $(this).attr('del_id');
		alert(del_id);
	});
});
$(document).ready(function(){
	$('a#edit').click(function(){
		event.preventDefault();  
		var edit_id = $(this).attr('edit_id');
		alert(edit_id);
	});
});
	