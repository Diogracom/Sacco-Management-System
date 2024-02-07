<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Member Deposit Form</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Narration</label>
                  <div class="col-sm-10">
                  <input name="bank" type="text" class="form-control" placeholder="Income Source" >
                  </div>
                  </div>

						
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Earned Interest</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here" required>
                  </div>
                  </div>
               
             <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Pay Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="Ddate" type="date" class="form-control pull-right"  required>
                </div>
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Remark</label>
                  <div class="col-sm-10">
                  <input name="remark" type="text" class="form-control" placeholder="Enter Period Here" required >
                  </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Deposit</i></button>

              </div>
			  </div>
			
<?php 
if(isset($_POST['save']))
{
	try{
		$account =  mysqli_real_escape_string($link, $_POST['bank']);
		$amount = mysqli_real_escape_string($link, $_POST['amount']);
		$remark = mysqli_real_escape_string($link, $_POST['remark']);
		$Ddate = mysqli_real_escape_string($link, $_POST['Ddate']);
		$txid = 'TXID-'.rand(2000000,100000000);

		$google_details = mysqli_query($link, "SELECT * FROM income WHERE id = '1'");
		$get_details = mysqli_fetch_array($google_details);
		$bal = $get_details['amount'];
			$total = $amount + $bal;
			if($amount < 0){
				throw new UnexpectedValueException();
			}
			else{
			
			$update = mysqli_query($link, "UPDATE income SET amount = '$total'") or die (mysqli_error($link));

            $insert = mysqli_query($link, "INSERT INTO transaction VALUES('','$txid','Deposit','$account','','','','','$amount','$remark','$Ddate')") or die (mysqli_error($link));

			$update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));

			if(!($update && $insert && $update1))
			{
			echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
			}
			else{ 

				echo "<div class='alert alert-success'>Amount Deposited Successfully!</div>";
				?>
            
               <?php	
               } 
			}
	}catch(UnexpectedValueException $ex)
	{
		echo "<div class='alert alert-danger'>Invalid Amount Entered!</div>";
	}
}
?>


			 </form> 


</div>	
</div>	
</div>


