<?php include 'header.php' ?>
<section  style="background-color:aqua;">
<div class="container">
<div class="col-md-12"><hr/><h3 style="text-align:center;background-color:pink;">STORIES</h3><hr/></div>
<div class="col-md-12">
<?php $d=$record->result_array();
	foreach($d as $row){?>
 <div class="col-sm-6">
 <h1 style="text-align:center;background-color:red;"><?php echo $row['HEAD']; ?></h1>
 <form><textarea rows="5" cols="70" style="background: blanchedalmond;font-size:15px;"><?php echo $row['Story']; ?></textarea><br/></form>
 <div><a href="<?php echo base_url('uploads/Pic/'.$row['picture']) ?>" class="btn btn-success">Read More</a></div>
 </div><?php } ?>
 </div></div><br/><br/></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></section>
<?php include 'footer.php'; ?>