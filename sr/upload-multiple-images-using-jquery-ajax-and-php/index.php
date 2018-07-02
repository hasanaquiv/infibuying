<?php 
include('header.php');
include_once("db_connect.php");
?>
<title>phpzag.com : Demo Upload Multiple Images using jQuery, Ajax and PHP</title>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<script type="text/javascript" src="scripts/upload.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
<?php include('container.php');?>
<link type="text/css" rel="stylesheet" href="style.css" />
<div class="container">
	<h2>Upload Multiple Images using jQuery, Ajax and PHP</h2>
	<br>
	<br>	
	<form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">   
    <label>Choose Multiple Images to Upload</label>
	<br>
	<br>
    <input type="file" name="upload_images[]" id="image_file" multiple >
    <div class="file_uploading hidden">
        <label>&nbsp;</label>
        <img src="uploading.gif" alt="Uploading......"/>
    </div>
	</form>
	<div id="uploaded_images_preview"></div>

	<br>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/how-to-upload-multiple-images-in-php/">Back to Tutorial</a>		
	</div>
</div>
<?php include('footer.php');?>
