$(document).ready(function(){
    $("#update_password").click(function(){
	event.preventDefault(); 
	var old_password = $('#old_password').val();
	var new_password = $('#new_password').val();
	var retype_password = $('#retype_password').val();
	var data = {old_password:old_password,new_password:new_password,retype_password:retype_password};
	if(old_password=='' && new_password=='' && retype_password==''){
		swal(  'Oops...',  'All Field Are Must!',  'error');
	} else {
		if(new_password!=retype_password){
			swal(  'Oops...',  'New Password Are Not Match!',  'error');
	  } else {
		  $.ajax({
			type: 'POST',
			url: 'action/password-update.php',
			data : data,
			success: function(data){
				swal(  'Success',  data,  'success');
				$("#upadate_password_form")[0].reset();
			}
		});
	  }
	}
    });
});

$(document).ready(function(){
	$("#update_details").click(function(){
		event.preventDefault();
		var address = $('#address').val();
		var user_area = $('#area').val();
		var city = $('#city').val();
		var state = $('#state').val();
		var pincode = $('#pincode').val();
		var data = {address:address,user_area:user_area,city:city,state:state,pincode:pincode};
		$.ajax({
			type: 'POST',
			url: 'action/update-profile.php',
			data : data,
			success: function(data){
				swal(  'Success',  data,  'success',function(isConfirm) {
					 if (isConfirm) {
					location.reload();
					}
				});
			}
		});
	});
});