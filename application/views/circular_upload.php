<?php include 'header.php' ?></br></br></br></br></br></br></br>
<style>
.form-control{
	width:400px;
}
.btn{padding:3px 3px;}
}
</style>

<section style="background-color:aqua;">
<div class="container">
<div class="row">
<div class="col-md-12">

	<h1 style="text-align:center;">Circular Details</h1>
	</hr>
	<?php
		if($this->session->has_userdata('msg')){ ?>
			<script>
jQuery(function(){
   jQuery('#btnModal').click();
});
</script>
		<?php } ?>

	<?php
		
		echo form_open_multipart("Admin/Circularupload/");
	?>
	 <div class="col-md-6">
	 	 Enter Circular Number:
			<input type="number" name="CircularNo" id="CircularNo" class="form-control" />
		</div><div class="col-md-6">
		Enter CIrcular Heading:
			<input type="text" name="CircularHead" id="CircularHead" class="form-control" />
		</div>
	 <div class="col-md-6">
			Upload Circular(only .jpg, .jpeg, .png):
			<input type="file" name="Pic" id="Pic" />
		</div>
		<div>
		<input type="submit" name="save" value="Save" class="btn btn-success"/></div>
	</form>
</div>
</div>
</div><!-- Button trigger modal -->
<button type="button" id="btnModal" class="btn btn-primary btn-lg" style="display:none;" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="z-index:inherit;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Alert Message</h4>
      </div>
      <div class="modal-body">
        <?php if($this->session->has_userdata('msg'))
				echo $this->session->flashdata('msg');
			?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
   
      </div>
    </div>
  </div>
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php' ?>