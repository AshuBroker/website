<?php  include 'header.php';?><br/><br/><br/>
<section style="background-color:aqua;">
<div class="container-wrap">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 col-xs-12">
		<h1>LOGIN FORM</h1>
		<?php
		if($this->session->has_userdata('msg')){ ?>
			<script>
jQuery(function(){
   jQuery('#btnModal').click();
});
</script>
		<?php } ?>
		</div>
       <?php $atr=array("class"=>"form-horizontal");
        echo form_open("Home/loginCheck",$atr);
         ?>
		 <div class="col-xs-2" class="col-xs-4 ">
             <div class="form-group">
               <label class="col-md-6 col-xm-4">Email :</label>
			   <div class="col-md-6 col-md-8">
			   <input type="email" name="Email" id="Email">
			   </div>
			   </div>
			<br/>
			<div class="form-group">
			<label class="col-md-6 col-xm-4">
			Password: </label>
			<div class="col-md-6 col-md-8">
			<input type="password" name="password" id="password">
			</div>
			</div>
			<br/>
			<input type="submit" class="btn btn-success" name="Login" id="Login" value="Login"  style="margin-left:60%;">
		</div>
		</form>
		
</div>

</div>

</div>
<br/>
<br/>

<!-- Button trigger modal -->
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
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/></section>
<?php  include 'footer.php';?>