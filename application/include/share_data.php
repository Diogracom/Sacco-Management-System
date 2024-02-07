<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Purchase Share Form</h3>
            </div>
             <div class="box-body">
             
            
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
				<select name="account"  class="form-control select2" required>
					<option selected>Select Customer Account</option>
<?php
$search = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin'");
while($get_search = mysqli_fetch_array($search))
{
?>
					<option value="<?php echo $get_search['account']; ?>"><?php echo $get_search['account']; ?>&nbsp; [<?php echo $get_search['fname']; ?>&nbsp;<?php echo $get_search['lname']; ?>]</option>
<?php } ?>
				</select>
				</div>
            </div>
			
			<div class="form-group">
         
  <script type="text/javascript">
function calc(theForm) {
  var amnt = parseFloat(theForm.cshare.value)
  if (isNaN(amnt)) amnt=0;
  var exchangeRate = parseFloat(theForm.nshare.value)
  if (isNaN(exchangeRate)) exchangeRate=0;
 
 var amt =  (amnt * exchangeRate)
  theForm.amount.value=amt.toFixed(2);
}
</script>

                  <label for="" class="col-sm-2 control-label" style="color:#009900">Cost of Share</label>
                  <div class="col-sm-10">
                  <input name="cshare" type="number" class="form-control" placeholder="Enter Cost per Share" required value="" onKeyUp="calc(this.form)">
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Number of Shares</label>
                  <div class="col-sm-10">
                  <input name="nshare" type="number" class="form-control" placeholder="Enter Qnty of Shares" required value="" onKeyUp="calc(this.form)">
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Total Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here"   value="0.00" readonly="readonly">
                  </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Buy</i></button>

              </div>
			  </div>
<?php
if(isset($_POST['save']))
{
	
 $account =  mysqli_real_escape_string($link, $_POST['account']);
 $cshare = mysqli_real_escape_string($link, $_POST['cshare']);
 $nshare = mysqli_real_escape_string($link, $_POST['nshare']);
 $amount = mysqli_real_escape_string($link, $_POST['amount']);
 $txid = 'TXID-'.rand(2000000,100000000);

    $fetch = mysqli_query($link, "SELECT * FROM user WHERE account = '$account'");
    $fetch_data = mysqli_fetch_array($fetch);
    $fname = $fetch_data['fname'];
    $lname = $fetch_data['lname'];
    $id = $fetch_data['id'];

 $google = mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account'");
        
   if(mysqli_num_rows($google) == 0)
   {
		
		$insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));
		
    $insert1 = mysqli_query($link, "INSERT INTO tt_shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));

    $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Shares','$account','$fname','$lname','$id','','$amount','Shares',NOW())") or die (mysqli_error($link));
      }
      else
      {
      
         $get_details = mysqli_fetch_array($google);
      
         $Pamount = $get_details['amount'];
         $Pshare = $get_details['nshare'];

         $Ushare = $Pshare + $nshare;
         $Uamount = $Pamount + $amount;
     
     $insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));
      
     $insert1 = mysqli_query($link, "UPDATE tt_shares SET amount = '$Uamount', nshare = '$Ushare' WHERE account = '$account'") or die (mysqli_error($link));

     $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Shares','$account','$fname','$lname','$id','','$amount','Shares',NOW())") or die (mysqli_error($link));

     
      }

		

			if(!($insert && $insert1 && $insert2))
			{
			echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
			}
			else{
			
      echo "<div class='alert alert-success'>Shares Bought Successfull!</div>";

				}
			}

?>			  
			 </form> 


</div>	
</div>	
</div>
</div>