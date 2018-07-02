$(document).ready(function(){
    $("button").click(function(){
	event.preventDefault();  
		var user_name = $('#user_name').val();
		var user_mobile = $('#user_mobile').val();
		var user_email = $('#user_email').val();
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		var user_password = $('#user_password').val();
		var re_password = $('#re_password').val();
		var user_sponsor = $('#user_sponsor').val();
		var user_position = $('#user_position').val();
		var check = $('#check').prop("checked");
		 if(user_sponsor==''){
			swal(  'Oops...',  'Please Enter Your Sponsor!',  'error');
		}else if(user_name==''){
			swal(  'Oops...',  'Please Enter Your Full Name!',  'error');
		} else if(user_mobile==''){
			swal(  'Oops...',  'Please Enter Your Mobile Number!',  'error');
		}else if(user_mobile.length!=10){
			swal(  'Oops...',  'Please Enter 10 digit Mobile Number!',  'error');
		} else if(user_email==''){
			swal(  'Oops...',  'Please Enter Your Email!',  'error');
		}else if(!filter.test(user_email)){
			swal(  'Oops...',  'Please Enter Your Valid Email!',  'error');
		} else if (user_password==''){
			swal(  'Oops...',  'Please Enter Your Your Password!',  'error');
		} else if (user_password!=re_password){
			swal(  'Oops...',  'Your Password Not Match!',  'error');
		} else if (user_position==''){
			swal(  'Oops...',  'Must Select User Position!',  'error');
		} else if (!check==true){
			swal(  'Oops...',  'Term is required!',  'error');
		}else{
		$.ajax({
		type: 'POST',
		url: 'action/register-function.php',
		data : $('#register-form').serialize(),
		cache: false,
		success: function(data){
			swal(  'Good Job',  data,  'success');
		$("#register-form")[0].reset();
		}
	    });
		}
   });
});


	