<?php include 'header.php' ?></br></br></br></br></br></br></br></br>
<style>
.dd{background-color:aqua;}
h1{
	text-align:center;
	margin-top:0px;
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
<h1><?php echo $title?></h1>
<div class="row">
<div class="col-md-12">
		<table>
		<thead>
			<tr>
			<th>Heading</th>
			<th>validedate</th>
			<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$rows = $records->result_array();
			foreach($rows as $row){
		?>
			<tr>
				<td><?php echo $row['Heading']; ?></td>
				<td><?php echo $row['validdate'];?></td>
				<td><a href="<?php echo base_url("Admin/editnotice/".$row['Serial_no']);?>" class="btn btn-success">Edit</a>
				<a href="<?php echo base_url("Admin/deletenotice/".$row['Serial_no']);?>" class="btn btn-danger">Delete</a></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
   </div></div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section> 
<?php include 'footer.php' ?>
