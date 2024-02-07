<div class="box">
	      <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-dollar"></i> Expenses</h3>
            </div>
             <div class="box-body">
             
             <?php
             
   if(isset($_POST['save']))
{
$tid = $_SESSION['tid'];
$name = mysqli_real_escape_string($link, $_POST['teller']);
$narration = mysqli_real_escape_string($link, $_POST['narration']);
$pay_date = mysqli_real_escape_string($link, $_POST['pay_date']);
$amount = mysqli_real_escape_string($link, $_POST['amount_to_pay']);
$remarks = mysqli_real_escape_string($link, $_POST['remarks']);
$type = mysqli_real_escape_string($link, $_POST['type']);
$txid = 'TX-'.rand(200000,1000000);

$google_details = mysqli_query($link, "SELECT * FROM income WHERE id = '1'");
    $get_details = mysqli_fetch_array($google_details);
    $bal = $get_details['amount'];
    
      $total = $bal - $amount ;
           
$update = mysqli_query($link, "UPDATE income SET amount = '$total'") or die (mysqli_error($link));

$insert = mysqli_query($link, "INSERT INTO expense(id,tid,txid,narration,pay_date,type,amount,teller,remarks,date_time) VALUES('0','$tid','$txid','$narration','$pay_date','$type','$amount','$name','$remarks',NOW())") or die (mysqli_error($link));

$insert1 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','expense','$narration','$name','$name','$tid','','$amount','$type',NOW())") or die (mysqli_error($link));


$update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
	
 if(!($update && $insert && $update1))
{
echo '<meta http-equiv="refresh" content="2;url=otherp.php?tid='.$_SESSION['tid'].'">';
echo '<br>';
echo'<span class="itext" style="color: #FF0000">Unable to save expense records.....Please try again later!</span>';
}
else{


echo '<hr>';
        echo"<center><div class='alert alert-success'>Records Updated Successful.....!!!</div></center>";
       echo '<hr>';
?>

         <?php
                
}

}

?>          
             

			 <form class="form-horizontal" method="post" enctype="multipart/form-data" id="registrationForm">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			  
				  <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Narration</label>
				 <div class="col-sm-10">
                 <input name="narration" type="varchar" class="form-control" required>
              </div>
			  </div>
			  
			  <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="pay_date" required>
                </div>
              </div>
			  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_to_pay" type="number" class="form-control" placeholder="Amount to Pay" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Teller By</label>
                  <div class="col-sm-10">
                 <?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['fname']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Type</label>
                  <div class="col-sm-10">
                  <select class="type select2" name="type" style="width: 100%;" required>
				<option selected="selected">--Type--</option>
                <option>Administration</option>
                <option>Others</option> 
                </select>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                  	<div class="col-sm-10">
					<textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
           			 </div>
          </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Capture</i></button>

              </div>
			  </div>
              
              <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<script>
$('#registrationForm').on('submit', function(e) {
    // Prevent form submission by the browser
    e.preventDefault();

    // Rest of the logic
});
</script>
              
			  </form>
			  


         
</div>	
</div>
</div>	
</div>