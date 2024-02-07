<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Transactions'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>    
    <?php if ($pcreate == 1) { ?>


<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Member Deposits</h3>
            </div>
             <div class="box-body">
            
			 <div class="row">
		
	       
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Multiple Delete</button>
	<a href="deposit.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-plus"></i>&nbsp;Make Deposit</button></a>
	<a href="withdraw.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("410"); ?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-plus"></i>&nbsp;Withdraw Money</button></a>
	
	<a href="excelmem.php" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i>&nbsp;Export</a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>FName</th>
				          <th>LName</th>
				          <th>AcctNo.</th>
                  <th>Phone</th>
                  <th>Amount</th>
				        </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM user wHERE username !='Ntwani' AND username !='Admin'") or die (mysqli_error($link));
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
$acctno = $row['account'];
$ph = $row['phone'];
$amt = $row['balance'];

?>    
                <tr>
				<td><input id="optionsCheckbox" class="checkbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>
				
                
				<td><?php echo $fn; ?></td>
				<td><?php echo $ln; ?></td>
				<td><?php echo $acctno; ?></td>
			    <td><?php echo $ph; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
				<td><?php echo $get_query['currency'].' '.number_format($amt); ?></td>
			
				
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
						echo "<script>window.location='dpst.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM user WHERE userid ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='dpst.php?id=".$_SESSION['tid']."'; </script>";
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

</div>	
</div>	
</div>


<?php } else { ?>

 <div class="box">
        
     <div class="box-body">
      <div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Personal Deposits</h3>
            </div>
             <div class="box-body">

<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'") or die (mysqli_error($link));
while($rows = mysqli_fetch_array($select))
{
  
?>       
               
       <form class="form-horizontal" method="post" enctype="multipart/form-data">

     <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
           
       
       <table class="table table-responsive" align="center">
        <tr>
          <td>
                <div class="form-group" align="center">
                 
                <div class="col-sm-10">
                <img id="blah"  src="../<?php echo $rows['image']; ?>" alt="Image Here" height="130" width="130"/>
                </div>
                </div>
          </td>
      
          <td>
                 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $rows['fname'].' '.$rows['lname']; ?>" readonly="readonly">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account</label>
                  <div class="col-sm-10">
                  <input name="account" type="text" class="form-control"  value="<?php echo $rows['account']; ?>" readonly="readonly">
                  </div>
                  </div>


        
      <?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">My Wallet</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php echo $get_query['currency'].' '.number_format($rows['balance']); ?> " readonly="readonly">
                  </div>
                  </div>
       </form> 

          </td>        
        </tr>            
        </table>  
  
<br>

  <form method="post">
      
   <hr>   
        
       <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>TxID</th>
                  <th>Amount</th>
                  <th>Remark</th>
                  <th>Date/Time</th>
                 </tr>
                </thead>
                <tbody>
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM transaction WHERE id = '$id' AND t_type ='Deposit'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>You Made Any transactions Yet......!!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$txid = $row['txid'];
$amt = $row['amount'];
$dt = $row['date_time'];
$rmk = $row['remark'];
?>    
                <tr>
        <td><?php echo $txid;?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].' '.number_format($amt); ?></td>
        <td><?php echo $rmk; ?></td>
        <td><?php echo $dt; ?></td>
        
        </tr>
<?php } } } }?>
             </tbody>
                </table>  

</form>
        


</div>
