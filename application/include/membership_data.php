<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Membership Payment Form</h3>
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
					<option selected>Select Account</option>
<?php
$date =  mktime(0,0,0, date("m"), date("d"), date("Y"));
$year = date("Y",$date);
$search = mysqli_query($link, "SELECT * FROM membership wHERE year < '$year' ") or die (mysql_error($link));
while($get_search = mysqli_fetch_array($search))
{
?>
					<option value="<?php echo $get_search['account']; ?>"><?php echo $get_search['account']; ?>&nbsp; [<?php echo $get_search['fname']; ?>&nbsp;<?php echo $get_search['lname']; ?>]</option>
<?php } ?>
				</select>
				</div>
            </div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Membership Fee</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here" required>
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Remark</label>
                  <div class="col-sm-10">
                  <input name="remark" type="varchar" class="form-control" placeholder="Enter Period Here" required>
                  </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Pay Here</i></button>

              </div>
			  </div>
			
<?php 
if(isset($_POST['save']))
{
	try{

		$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
		$date = date("Y",$get);

		$account =  mysqli_real_escape_string($link, $_POST['account']);
		$amount = mysqli_real_escape_string($link, $_POST['amount']);
		$remark = mysqli_real_escape_string($link, $_POST['remark']);
		$txid = 'TXID-'.rand(2000000,100000000);
        
        $income_update = mysqli_query($link, "SELECT * FROM income WHERE id = '1'");
		while($get_income = mysqli_fetch_array($income_update)){
        $inc = $get_income['amount'];

        $income_in = $inc + $amount;
		

		$google_details = mysqli_query($link, "SELECT * FROM user WHERE account = '$account'");
		while($get_details = mysqli_fetch_array($google_details))
		{
			$id = $get_details['id'];
			$fn = $get_details['fname'];
			$ln = $get_details['lname'];
			$ph = $get_details['phone'];
			
			if($amount < 0){
				throw new UnexpectedValueException();
			}
			else{
            
            $select = mysqli_query($link, "SELECT * FROM membership WHERE account = '$account'") or die (mysqli_error($link));

			if(mysqli_num_rows($select)==0)
				{

				$insert = mysqli_query($link, "INSERT INTO membership VALUES('0','$id','$fn','$ln','$account','$date')") or die (mysqli_error($link));

               $inser = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Membership Payment','$account','$fn','$ln','$id','$ph','$amount','$remark',NOW())") or die (mysqli_error($link));

			   $update = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));

			   $income = mysqli_query($link, "UPDATE income SET amount = '$income_in'") or die (mysqli_error($link));
				}

             else{
						
            $insert = mysqli_query($link, "UPDATE membership SET year ='$date' WHERE account = '$account'") or die (mysqli_error($link));

            $inser = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Membership Payment','$account','$fn','$ln','$id','$ph','$amount','$remark',NOW())") or die (mysqli_error($link));

			$update = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));

			$income = mysqli_query($link, "UPDATE income SET amount = '$income_in'") or die (mysqli_error($link));
            }
			
			if(!($update && $insert && $inser))
			{
			echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
			}
			else{ 

				echo "<div class='alert alert-success'>Amount Paid Successfully!</div>";
				?>
                <div align="center">
              <div class="box-footer">
              	<a href="#myModal"><button type="submit" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal" ><i class="fa fa-print">&nbsp;Please Take You Receipt</i></button></a>
           				
              </div>
			  </div> 
				
               <?php
                include 'modal/membership_modal.php';		
               } 
			}
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


