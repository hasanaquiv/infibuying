    $(document).ready(function(){
        $("#login-form").validate({
            rules: {
                seller_password: {
                    required: true
                },
                seller_name: {
                    required: true,
                },
            },
            messages:{
                seller_password: {
                    required: "Please Enter Seller Password",
                },
                seller_name: "Please Enter Seller Name"
            },
            submitHandler: subform
        })
        function subform(){
            var data = $("#login-form").serialize();
            $.ajax({
                type: 'POST',
                url: 'data.php',
                data: data,
                beforeSend: function(){
                    $("#info").fadeOut();
                    $("#login").html("Sending...");
                },
                success: function(resp){
                    if(resp=="ok"){
						$("#login").html("<img src='ajax-loader.gif' width='15'/> &nbsp; Login");
                       setTimeout('window.location.href = "dashboard";',4000);
                    } else{
                        $("#info").html("<div class='alert alert-danger'>"+resp+"</div>");
                            $("#login").html('Login');
                    }
                }
            })
        }
    })