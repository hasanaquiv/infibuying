<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jqGrid UI</title>
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css' />
    <link rel='stylesheet' type='text/css' href='http://www.trirand.com/blog/jqgrid/themes/ui.jqgrid.css' />
	
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	
	<script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/i18n/grid.locale-en.js'></script>
    <script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery.jqGrid.js'></script>
	
	<script>
	$(document).ready(function () {
		$("#list_records").jqGrid({
			url: "getGridData.php",
			datatype: "json",
			mtype: "GET",
			colNames: ["User Id", "User Name", "First Name", "Last Name"],
			colModel: [
				{ name: "userId",align:"right"},
				{ name: "userName"},
				{ name: "firstName"},
				{ name: "lastName"}
			],
			pager: "#perpage",
			rowNum: 10,
			rowList: [10,20],
			sortname: "user_id",
			sortorder: "asc",
			height: 'auto',
			viewrecords: true,
			gridview: true,
			caption: ""
		}); 	
	});
	</script>
</head>

<body>
<table id="list_records"><tr><td></td></tr></table> 
<div id="perpage"></div>
</body>
</html>


 
 <br>
 <?php // base64_encode()/base64_decode() example
$s  = 2;
$h  = mt_rand(50,10000000)*mt_rand(50,10000000);
$string  = $s+$h;
?>
<?php
$a = base64_encode($string);
$b = base64_decode($a);


echo $a;

echo $b-$h;
?>

<br>



