<?php include 'header.php'; ?>
<section  style="background-color:aqua;">
	<div class="container-wrap">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<h3 style="text-align:center;">Registration Form</h3>
		<hr/>
		</div><?php
		if($this->session->has_userdata('msg')){ ?>
			<script>
jQuery(function(){
   jQuery('#btnModal').click();
});
</script>
		<?php } ?>
		<?php $atr=array("class"=>"form-horizontal","name"=>"Registration-Form");
		echo form_open("Home/regCheck",$atr);?>

			<div class="col-md-8">
				
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Name:</label>
					<div class="col-md-6 col-xs-8">
						<input type="text" name="Name" id="Name" class="form-control"  maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Email ID :</label>
					<div class="col-md-6 col-xs-8">
						<input type="email" name="Email" id="Email" class="form-control" maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Mobile No:</label>
					<div class="col-md-6 col-xs-8">
						<input type="number" name="Mobile" id="Mobile" class="form-control" maxlength="10" required="required" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your DOB:</label>
					<div class="col-md-6 col-xs-8">
						<input type="date" name="DOB" id="DOB" class="form-control" maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Department Name:</label>
					<div class="col-md-6 col-xs-8">
						<input type="text" name="Department" id="Department" class="form-control" maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group ">
					<label class="col-md-6 col-xs-4 control-label">Address:</label>
					<div class="col-md-6 col-xs-8">
						<textarea class="form-control" name="Address" id="Address" required="required" maxlength="100" ></textarea>
					</div>
				</div>
				<div class="form-group ">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Password :</label>
					<div class="col-md-6 col-xs-8">
						<input type="password" class="form-control" name="Password" id="Password" required="required" maxlength="50" />
					</div>
				</div>
				<div class="col-md-offset-4" style="margin-left:60%;">
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
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
</section>
<?php include 'footer.php'; ?>