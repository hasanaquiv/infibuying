$('document').ready(function(){
	 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
	
	$("#register-form").validate({
		 rules:{
				user_mobile: {
					required: true,
					minlength: 10,
					remote :{
						url: 'd.php',
						type: "post",
						data:{
							user_mobile: function(){
								return $('#user_mobile').val();
							}
						}
					}
				},
				user_email : {
					required : true,
					validemail: true,				
				},
				terms: "required",
			},
		 messages:   {
				user_mobile: {
					required: "Mobile Number is required",
					minlength: "your 10 digit short",
					remote : "Mobile already exists"
					  },
				user_email : {
					required : "Email is required",
					validemail : "Please enter valid email address"					
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
		url: 'register-process.php',
		data : $('#register-form').serialize(),
		success: function(data){
			alert(data);
		$("#register-form")[0].reset();
		}
	    });
			}	
	
	
})