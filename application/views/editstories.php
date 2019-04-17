<?php include 'header.php' ?>
<style>
.dd{background-color:aqua;}
h1{		margin-top:0px;
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
<section class="dd"></br></br></br></br></br></br></br></br></br></br></br>
<h1><?php echo $title?></h1>
<div class="row">
<div class="col-md-12">
		<table>
		<thead>
			<tr>
			<th><h3>Name</h3></th>
			<th><h3>Story</h3></th>
			<th><h3>file</h3></th>
			<th><h3>Action</h3></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$rows = $records->result_array();
			foreach($rows as $row){
		?>
			<tr>
				<td><h3><?php echo $row['HEAD']; ?></h3></td>
				<td><h3><?php echo $row['Story'];?></h3></td>
				<td><h3><?php echo $row['picture'];?></h3></td>
				<td><a href="<?php echo base_url("Admin/editessay/".$row['Id']);?>" class="btn btn-success">Edit</a>
				<a href="<?php echo base_url("Admin/deletestory/".$row['Id']);?>" class="btn btn-danger">Delete</a></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
   </div></div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section> 
<?php include 'footer.php' ?>
