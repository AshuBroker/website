<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
		
	<script src="<?php echo base_url("assets/js/jquery-1.11.2.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.js");?>"></script>

</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">

	<h1>Circular Details</h1>
	<hr/>
	<?php
		
		echo form_open_multipart("Staff/Circularupload/");
	?>
		<div class="col-md-6">
			Enter Circular Number :
			<input type="number" name="CircularNo" id="CircularNo" />
		</div>
		<div class="col-md-6">
			Enter CIrcular Heading :
			<input type="text" name="CircularHead" id="CircularHead" />
		</div>
		<div class="col-md-6">
			Upload Circular(only .jpg, .jpeg, .png) :
			<input type="file" name="Pic" id="Pic" />
		</div>
		
		<input type="submit" name="save" value="Save" class="btn btn-success"/>
	</form>
</div>
	
</div>
</div>
</body>
</html>