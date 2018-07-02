$('document').ready(function(){
	 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
	
	$("#register-form").validate({
		 rules:{
			 user_sponsor: {
					required: true,
					minlength: 5,
				},
				user_name: {
					required: true,
					minlength: 4,
				},
				user_mobile: {
					required: true,
					minlength: 10,
				},
				user_email : {
				required : true,
				validemail: true,				
				},
				user_password: {
					required: true,
					minlength: 6,
					maxlength: 15
				},
				re_password: {
					required: true,
				},
				user_position: {
					required: true,
				},
				terms: "required",
			},
		 messages:   {
			 user_sponsor: {
					required: "Sponsor is required",
					minlength: "your name is too short"
					  },
				user_name: {
					required: "Name is required",
					validname: "Name must contain only alphabets and space",
					minlength: "your name is too short"
					  },
				user_mobile: {
					required: "Mobile Number is required",
					minlength: "your 10 digit short"
					  },
				user_email : {
					required : "Email is required",
					validemail : "Please enter valid email address"					
				},
				user_password:{
					required: "Password is required",
					minlength: "Password at least have 6 characters"
					},
				re_password:{
					required: "Retype your password",
					equalTo: "Password did not match !"
					},
				user_position: {
					required: "Must Select User Position"
					},
				terms: {
					required : "Term is required"
				}
			 
			},
		submitHandler: submitForm
						   
	});
	function submitForm(){	
		$.ajax({
		type: 'POST',
		url: 'action/register-function.php',
		data : $('#register-form').serialize(),
		success: function(data){
			alert(data);
		$("#register-form")[0].reset();
		}
	    });
			}	
	
	
})