<?php include 'header.php'?></br></br></br></br></br></br></br></br>
<section style="background-color:aqua;">
<div class="container">
<div class="row">
<div class="col-md-12">

	<?php echo $title ?>
	<hr/>
	<?php
		
		echo form_open_multipart("Admin/updatestory/");
	?><input type="hidden" name="storyid" value="<?php echo $result->Id ;?>" />
		<div class="col-md-6">
			Enter story Heading :
			<input type="text" name="heading" id="heading" />
		</div>
		<div class="col-md-6">
			Enter story:
			<input type="text" name="story" id="story" />
		</div>
		<div class="col-md-6">
			Upload file(only .jpg, .jpeg, .png) :
			<input type="file" name="Pic" id="Pic" />
		</div>
		
		<input type="submit" name="save" value="Save" class="btn btn-success"/>
	</form>
</div>
</div>
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php' ?>