<div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
			  <?php
				$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Loan Details'") or die ("Error" . mysqli_error($link));
				$get_check = mysqli_fetch_array($check);
				$pdelete = $get_check['pdelete'];
				$pcreate = $get_check['pcreate'];
				$pupdate = $get_check['pupdate'];
				?>
					<?php echo ($pupdate == '1') ? '<a href="deposit.php?id='.$_SESSION['tid'].'"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Make a Deposit </button></a>' : ''; ?>
               
               <?php echo ($pupdate == '1') ? '<button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>' : ''; ?>
	
		<a href="accexcel.php" target="_blank" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Export Excel</a>
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Full Name</th>
				  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Balance</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM user") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$bal = $row['balance'];
$img = $row['image']
?>    
                <tr>
				<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $userid; ?>"></td>
                <td><?php echo $id; ?></td>
                <td><img src="../<?php echo $image; ?>" width="40" height="40"></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
                <td><?php echo $phone; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
				<td><?php echo $get_query['currency']. '&nbsp &nbsp'. $bal; ?></td>
				
				</tr>
<?php } } ?>
             </tbody>
                </table>  
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='account.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM accounts WHERE id ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='account.php?id=".$_SESSION['tid']."'; </script>";
							}
							}
							}
?>			
</form>
				

              </div>


	
</div>	
</div>
</div>	
</div>