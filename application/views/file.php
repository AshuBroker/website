  <?php include 'header.php' ?>


<script>

$(document).ready(function(){
	$("#ci").click(function(){
		var sid = $("#c_no").val();
		jQuery.ajax({
			type: "POST",
			data:{
					searchId:sid
					
				},
			url: "<?php echo base_url('Home/filter/');?>",
			success:function(data)
			{
				$("#mac").html(data);
			}
	  });
	});
});
</script>
<style>
.dd{background-color:aqua;}
h1{
	text-align:center;
}
table{
	width:800px;
	margin:auto;
	text-align:center;
	table-layout:inherit;
}
table,tr,th,td{
	padding:20px;
	color:white;
	border:3px solid #080808;
	border-collapse:collapse;
	font-size:20px;
	font-family:Arial;
	background-color:deepskyblue;
}
td:hover{background:yellow;}
.btn{padding:3px 3px;}
}
</style>
<section class="dd">
<div class="row">
<h1>CIRCULAR LIST<h1>
<hr/><div class="col-md-12 col-sm-12">
<?php echo form_open('Home/Files');   $rows = $records->row();?>
<label style="font-size:20px;">Enter Circular Number:</label>
<input type="number" value="" id="c_no" style="
    width: 10%;
    height: 30px;
    font-size: 20px;
"/></div>
<button class="btn btn-success" id="ci" type="button">Search</button>
</form>
<div class="col-md-12" id="mac">
		<table>
		<thead>
			<tr>
			<th>Circular No.</th>
			<th>Circular</th>
			<th>Release Date</th>
			<th>Download</th>
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
				<td id="name"><a href="<?php echo base_url('uploads/Pic/'.$row['pic'])?>"><h3><?php echo $row['pic'];?><h3></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
</div><br/><br/><br/></section></br>
<?php include 'footer.php'; ?>
