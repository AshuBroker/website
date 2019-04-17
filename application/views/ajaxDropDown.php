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
}
td:hover{background:yellow;}
.btn{padding:3px 3px;}
}
</style>
<section class="dd">
<div class="row">
		<div class="col-md-12">
		<table>
		<thead>
			<tr>
			<th><h3>Circular No.</h3></th>
			<th><h3>Circular</h3></th>
			<th><h3>Release Date</h3></th>
			<th><h3>Download</h3></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$rows = $records->result_array();
			foreach($rows as $row){
		?>
			<tr>
				<td><h3><?php echo $row['Circular_No']; ?></h3></td>
				<td><h3><?php echo $row['Circular_Head'];?></h3></td>
				<td><h3><?php echo $row['Upload date'];?></h3></td>
				<td><a href="<?php echo base_url('uploads/Pic/'.$row['pic'])?>"><h3><?php echo $row['pic'];?><h3></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>
</section></br></br></br></br></br></br></br></br></br></br></br></br>	
	
