<?php include 'header.php'?></br></br></br></br></br></br></br></br>
<section style="background-color:aqua;">
<div class="container">
<div class="row">
<div class="col-md-12">

	<?php echo $title ?>
	<hr/>
	<?php
		
		echo form_open_multipart("Admin/updatenotice/");
	?><input type="hidden" name="noticeid" value="<?php echo $result->Serial_no ;?>" />
		<div class="col-md-6">
			Enter notice Heading :
			<input type="text" name="heading" id="heading" />
		</div>
		<div class="col-md-6">
			Enter validdate:
			<input type="date" name="validdate" id="validdate" />
		</div>
		<div class="col-md-6">
			Upload Notice(only .jpg, .jpeg, .png) :
			<input type="file" name="Pic" id="Pic" />
		</div>
		
		<input type="submit" name="save" value="Save" class="btn btn-success"/>
	</form>
</div>
	
</div>
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php' ?>