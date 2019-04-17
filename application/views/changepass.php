    <?php include 'header.php';?> 
<style>
.btn{
	margin-left:40px;
	
}
</style></br></br></br></br></br></br></br><section  style="background-color:aqua;">	
		<div class="container-wrap">
			<div class="row">
			<div class="col-md-12"><hr/><?php echo validation_errors();?><hr/></div>
		   <?php echo form_open('Admin/check');?>
				<div class="col-md-6">
				<div class="form-group">
					<label class="col-md-6 col-xs-4 control-label">Enter Your Current Password :</label>
					<div class="col-md-6 col-xs-8">
						<input type="password" name="currentpassword" id="currentpassword" class="form-control" maxlength="50" required="required" />
					</div>
				</div>
				<div class="form-group ">
					<label class="col-md-6 col-xs-4 control-label">Enter Your New Password :</label>
					<div class="col-md-6 col-xs-8">
						<input type="password" class="form-control" name="newpassword" id="newpassword" required="required" maxlength="50" />
				 	</div>
				</div>
				<div class="form-group ">
					<label class="col-md-6 col-xs-4 control-label">Re Enter Password :</label>
					<div class="col-md-6 col-xs-8">
						<input type="password" class="form-control" name="reenterpassword" id="reenterpassword" required="required" maxlength="50"  />
					</div>
				</div>
				<div class="col-md-6">
				<div class="col-md-6">
					<input type="submit" class="btn btn-success" name="submit" value="submit" />
				</div>	</div>			
			</div>
			</div>
			</form>
			</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
	<?php include 'footer.php';?>	