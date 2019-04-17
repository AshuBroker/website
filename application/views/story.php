<?php include 'header.php'; ?></br></br></br></br></br></br></br>
<section style="background-color:aqua;">
<div class="container-wrap">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<h3>STORIES</h3>
		<hr/>
		</div><?php
		if($this->session->has_userdata('msg')){ ?>
			<script>
jQuery(function(){
   jQuery('#btnModal').click();
});
</script>
		<?php } ?>
	
		<?php echo form_open_multipart("Admin/accept/");?>

			<div class="col-md-6">
				
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Story heading:</label>
					<div class="col-md-6 col-xs-8">
						<input type="text" name="StoryName" id="StoryName" class="form-control"  maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Story :</label>
					<div class="col-md-6 col-xs-8">
						<textarea rows="4" cols="20" name="Story" id="Story" class="form-control" required="required"></textarea>
					</div>
				</div>
				<div class="form-group">
			<label class="col-md-6 col-xs-4 control-label">Upload Circular(only .jpg, .jpeg, .png) :</label>
			<div class="col-md-6 col-xs-8">
			<input type="file" name="Pic" id="Pic" />
		</div>
				</div>
				<div class="col-md-offset-4">
					<input type="submit" class="btn btn-success" name="Save" value="Save" />
					<input type="reset" class="btn btn-danger" name="clear" value="Clear" />
				</div>				
			</div>				
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
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php'; ?>