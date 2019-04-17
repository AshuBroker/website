
<?php include 'header.php'?></br></br></br></br></br></br></br><section style="background-color:aqua;">
<div class="container">
<div class="row">
<div class="col-md-12">

	<h1>Circular Details</h1>
	<hr/>
	<?php
		
		echo form_open_multipart("Admin/updateCircular/");
	?>  <input type="hidden" name="Circular_No" value="<?php echo $result->Circular_No;?>" />
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
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php' ?>