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
       <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Delete</button>
  <a href="newmember.php" class="btn btn-success btn-flat"><i class="fa fa-user"></i>&nbsp;Add Member</a>
	<a href="printmembers.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Print</a>

	
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Image</th>
                  <th>First Name</th>
				          <th>Last Name</th>
                  <th>Account</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin' ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$lname = $row['lname'];
$fname = $row['fname'];
$account = $row['account'];
$email = $row['email'];
$phone = $row['phone'];


$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pupdate = $get_check['pupdate'];
$pread= $get_check['pread'];
?>    
                <tr>
        <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
				<td><?php echo $id; ?></td>
				<td><img class="img-circle" src="../<?php echo $row ['image'];?>" width="30" height="30"></td>
        <td><?php echo $fname; ?></td>
				<td><?php echo $lname; ?></td>
        <td><?php echo $account;?></td>
				<td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
                <td><a href="view_memb.php?id=<?php echo $id;?>&&mid=<?php echo base64_encode("409"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i>&nbsp;View</button></a></td>

	</tr>
    <?php 
}
} ?>
    </tbody>
  </table>	

  <?php
            if(isset($_POST['delete'])){
            $idm = $_GET['id'];
              $id=$_POST['selector'];
              $N = count($id);
            if($id == ''){
            echo "<script>alert('Row Not Selected!!!'); </script>"; 
            echo "<script>window.location='listemployee.php?id=".$_SESSION['tid']."&&mid=".base64_encode("409")."'; </script>";
              }
              else{
              for($i=0; $i < $N; $i++)
              {
                $result = mysqli_query($link,"DELETE FROM user WHERE userid ='$id[$i]'");
                echo "<script>alert('Row Delete Successfully!!!'); </script>";
                echo "<script>window.location='listmembers.php?id=".$_SESSION['tid']."&&mid=".base64_encode("409")."'; </script>";
              }
              }
              }
?>      	
</form>
				

              </div>


	
              

<?php } else { 

echo " ";

 }  ?>
 
</div>
</div>
</div>
</div>

       
