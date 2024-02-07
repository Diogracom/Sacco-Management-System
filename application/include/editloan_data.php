<div class="row">	
		
	 <section class="content">
     
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">

        <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
            
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM loan_info WHERE userid = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
?>           
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Borrower</label>
				 <div class="col-sm-10">
						<input name="borrower" type="text" class="form-control" value=<?php echo $row['fname'].'&nbsp;'.$row['lname']; ?> readonly>
				              </div>
			  </div>
			  
		
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Loan Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" value="<?php echo $row['loan']; ?>" readonly>
                  </div>
                  </div>


    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Loan ID</label>
                  <div class="col-sm-10">
                  <input name="loanID" type="text" class="form-control" value="<?php echo $row['loanId']; ?>" readonly>
                  </div>
                  </div>
				
		 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Date Release</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="text" class="form-control pull-right" value="<?php echo $row['date_release']; ?>" readonly>
                </div>
              </div>
			  </div>
			  
		
<hr>	
<div class="alert-danger">&nbsp;GUARANTOR INFORMATION</div>
<hr>
								
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['g_name']; ?>" readonly>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Phone Number</label>
                  <div class="col-sm-10">
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['g_phone']; ?>" readonly>
                  </div>
                  </div>
				  
	
<hr>	
<div class="alert-danger">&nbsp;PAYMENT INFORMATION</div>
<hr>	
									  
				   <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="pay_date" type="text" class="form-control pull-right" value="<?php echo $row['maturity_date']; ?>" readonly>
                </div>
              </div>
			  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" value="<?php echo $row['amount_to_pay']; ?>" >
                  </div>
                  </div>
				  
           <div align="right">
              <div class="box-footer">
            <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-upload">&nbsp;Update Now</i></button>
              </div>
        </div>
																  
			 </div>
		<?php } ?>	 
			  </form>
				</div>
				

              </div>
			 <?php   
                if (isset($_POST['update'])){

                    $loanId = $_POST['loanID'];
                    $amount_topay = $_POST['amount_topay'];
                   
                    mysqli_query($link,"UPDATE loan_info SET amount_to_pay='$amount_topay' WHERE userid ='$id' AND loanId = '$loanId'")or die(mysqli_error()); 

                      echo "<script>alert('Loan Details Successfully Updated!'); </script>";
                      echo "<script>window.location='listloans.php?id=".$_SESSION['tid']."';</script>";
                    
                   
                  }
                ?>

	
</div>	
</div>
</div>	
</div>	
