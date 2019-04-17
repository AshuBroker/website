<?php include 'header.php' ?>
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
}
</style></br></br></br></br></br></br></br></br>
<section class="dd">
<h1 style="margin-top:0px;">CIRCULAR LIST</h1>
<div class="row">
<div class="col-md-12">
		<table>
		<thead>
			<tr>
			<th>Circular No.</th>
			<th>Circular</th>
			<th>Release Date</th>
			<th>Action</th>
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
				<td><a href="<?php echo base_url("Admin/editCircular/".$row['Circular_No']);?>" class="btn btn-success">Edit</a>
				<a href="<?php echo base_url("Admin/deleteCircular/".$row['Circular_No']);?>" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div></br></br></br></br></br></br>
</section>
<?php include 'footer.php' ?>
