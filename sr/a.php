
<form id="h">
<input type="text" name="name">
<button type="submit" name="submit" >ADD TAGS</button>											
</form>
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
	$('button').click(function(){
		event.preventDefault();  
		$.ajax({
			type: 'POST',
			url: 'b.php',
			data : $('#h').serialize(),
			success : function(data){
				alert(data);
			}
		})
	});
});
</script>