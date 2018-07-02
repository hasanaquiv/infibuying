    $(document).ready(function(){
		$("button").click(function(){
			event.preventDefault();
            $.ajax({
				type : 'POST',
				url : 'data.php',
				data : $("#login-form").serialize(),
				cache : false,
				success : function(data){
					$("#login").html("<img src='ajax-loader.gif' width='15'/> &nbsp; Login");
                        setTimeout('window.location.href = "dashboard.php";',4000);
				}
			})
		})
    })