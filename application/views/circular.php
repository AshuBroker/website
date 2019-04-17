<?php include 'header.php' ?></br></br></br></br></br></br></br></br>
<style>
.dd{background-color:aqua;}
h1{
	text-align:center;
}
table{
	width:800px;
	margin:auto;
	text-align:center;
	table-layout:fixed;
}
table,tr,th,td{
	padding:20px;
	color:white;
	border:3px solid #080808;
	border-collapse:collapse;
	font-size:18px;
	font-family:Arial;
	background-color:deepskyblue;
	font-size:20px;
}
td:hover{background:yellow;}
.btn{padding:6px 6px;}
.alert{text-align:center;
background-color:red;
font-size:20px;}
}
</style>
<section class="dd">
<h1 style="text-align:center;margin-top:0px;"><?php echo $title?></h1><?php
		if($this->session->has_userdata('message')){ ?>
			<script>
jQuery(function(){
   jQuery('#btnModal').click();
});
</script>
		<?php } ?>
<?php  if(($records->num_rows())==0){
				$this->session->set_flashdata("msg","ALL CIRCULAR ARE APPROVED.");
				if($this->session->has_userdata('msg'))
			echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
   }?>
 <div class="row">  
<div class="col-md-12">
		<table>
		<thead>
			<tr>
			<th><h3>Circular No.</h3></th>
			<th><h3>Circular</h3></th>
			<th><h3>Release Date</h3></th>
			<th><h3>Action</h3></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$rows = $records->result_array();
			foreach($rows as $row){
		?>
			<tr>
				<td><?php echo $row['Circular_No']; ?></td>
				<td><?php echo $row['Circular_Head'];?></td>
				<td><?php echo $row['Upload date'];?></td>
				<td><a href="<?php echo base_url("Admin/Approval/".$row['Circular_No']);?>"class="btn btn-success">Approve</a></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
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
        <?php if($this->session->has_userdata('message'))
				echo $this->session->flashdata('message');
			?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
   
      </div>
    </div>
  </div>
</div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php' ?>
