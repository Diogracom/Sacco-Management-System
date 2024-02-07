<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>    
    <?php if ($pcreate == 1) { ?>


<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 

	
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Account No.</th>
				  <th>Cost per Share</th>
                  <th>T.Shares</th>
                  <th>Amount</th>
                  
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM tt_shares ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$fn = $row['fname'];
$ln = $row['lname'];
$account = $row['account'];
$cshare = $row['cshare'];
$nshare = $row['nshare'];
$amount = $row['amount'];


?>    
                <tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $fn; ?></td>
				<td><?php echo $ln; ?></td>
				<td><?php echo $account; ?></td>
				<td><?php echo $cshare; ?></td>
                <td><?php echo $nshare; ?></td>
                <td><?php echo $amount; ?></td>
                

<?php 
}
} ?>
	</tr></tbody></table>		
</form>
				

              </div>


	
</div>	
</div>
</div>	
</div>

<?php } else { ?>

<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>ID</th>
                  <th>Account No.</th>
				  <th>Cost per Share</th>
                  <th>T.Shares</th>
                  <th>Amount</th>
                  
                 </tr>
                </thead>
                <tbody>
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM shares  WHERE id = '$id'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>You Haven't Bought Any Shares Yet.......!!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$account = $row['account'];
$cshare = $row['cshare'];
$nshare = $row['nshare'];
$amount = $row['amount'];


?>    
                <tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $account; ?></td>
				<td><?php echo $cshare; ?></td>
                <td><?php echo $nshare; ?></td>
                <td><?php echo $amount; ?></td>
                

<?php 
}
} }?>
	</tr></tbody></table>		
</form>
				

              </div>


	
</div>	
</div>
</div>	
</div>
