<?php

$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
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

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">All Loans</a></li>
              <li><a href="#tab_2" data-toggle="tab">Cleared Loans</a></li>
              <li ><a href="#tab_3" data-toggle="tab">Current Loan</a></li>
              <li ><a href="#tab_4" data-toggle="tab">Overdues</a></li>
              </ul>
             <div class="tab-content">

             <div class="tab-pane active" id="tab_1">
     
            <br>   
               <table>
				<th></th>
				<th>
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND loan != Principal_Paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;Overdue:&nbsp;<?php echo number_format($num); ?></button>
						
				</th>
				<tbody> 

				</tbody>
                </table>
                <hr>

             	<table id="example1" class="table table-bordered table-striped">
                                 <thead>
                <tr>
                  <th>ID</th>                 
                  <th>Member</th>
                  <th>Loan ID</th>
				  <th>Loan</th>
				  <th>Amount to Pay</th>
                  <th>Amount Paid</th>
				  <th>Last Paid</th>
				  <th>Balance</th>	
				  <th>Action</th>				  
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM loan_info ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$loanID = $row['loanId'];
$fname = $row['fname'];
$lname = $row['lname'];
$loan = $row['loan'];
$amount_topay = $row['amount_to_pay'];
$amount_paid = $row['amount_paid'];
$last_pay = $row['last_paid'];
$Principal_Paid = $row['Principal_Paid'];
$balance = $loan - $Principal_Paid;
    $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
    while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency']; 
?>    
                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fname.'&nbsp;'.$lname; ?></td>
                <td><?php echo $loanID; ?></td>
				<td><?php echo $currency.'&nbsp;'.number_format($loan); ?></td>
				<td><?php echo $currency.'&nbsp;'.number_format($amount_topay); ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($amount_paid); ?></td>
               	<td><?php echo $last_pay; ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($balance); ?></td>
               	<td><?php echo '<a href="loandetails.php?id='.$id.'&&mid='.base64_encode("405").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button></a>'; ?></td>
                
                </tr>
<?php } } } ?>
             </tbody>
                </table>  
			<br>
  </div>

              <!-- /.tab-pane -->


             <div class="tab-pane" id="tab_2">
     
            <br>   
               <table>
				<th></th>
				<th>
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND loan != Principal_Paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;Overdue:&nbsp;<?php echo number_format($num); ?></button>
						
				</th>
				<tbody> 

				</tbody>
                </table>
                <hr>

             	<table id="example1" class="table table-bordered table-striped">
                                 <thead>
                <tr>
                  <th>ID</th>                 
                  <th>Member</th>
                  <th>Loan ID</th>
				  <th>Loan</th>
				  <th>Amount to Pay</th>
                  <th>Amount Paid</th>
				  <th>Last Paid</th>
				  <th>Balance</th>	
				  <th>Action</th>				  
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM loan_info WHERE amount_to_pay = amount_paid") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$loanID = $row['loanId'];
$fname = $row['fname'];
$lname = $row['lname'];
$loan = $row['loan'];
$amount_topay = $row['amount_to_pay'];
$amount_paid = $row['amount_paid'];
$last_pay = $row['last_paid'];
$balance = $amount_topay - $amount_paid;
    $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
    while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency']; 
?>    
                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $fname.'&nbsp;'.$lname; ?></td>
                <td><?php echo $loanID; ?></td>
				<td><?php echo $currency.'&nbsp;'.number_format($loan); ?></td>
				<td><?php echo $currency.'&nbsp;'.number_format($amount_topay); ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($amount_paid); ?></td>
               	<td><?php echo $last_pay; ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($balance); ?></td>
               	<td><?php echo '<a href="loandetails.php?id='.$id.'&&mid='.base64_encode("405").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button></a>'; ?></td>
                
                </tr>
<?php } } } ?>
             </tbody>
                </table>  
			<br>
  </div>

              <!-- /.tab-pane -->

        <div class="tab-pane" id="tab_3">
            <br>    
			 	<table>
				<th></th>
				<th> 
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
                 
                 <a href="newpayments.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;New Payment</button></a>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND  loan != Principal_Paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;Overdue:&nbsp;<?php echo number_format($num); ?></button>
				
			    </th>
				<tbody> 

				</tbody>
                </table>
                 <div>
                
				 <hr>
						<table id="example1" class="table table-bordered table-striped">
				                <thead>
				                <tr>
				                  <th>ID</th>
				                  <th>Member</th>
				                   <th>Loan ID</th>
								  <th>Loan</th>
								  <th>Amount to Pay</th>
				                  <th>Amount Paid</th>
								  <th>Maturity Date</th>
				                  <th>Balance</th>
				                  <th>Action</th>
				                 </tr>
				                </thead>
				                <tbody>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE loan != Principal_Paid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($select)){
			    $im = $row['userid'];
			    $loanID = $row['loanId'];
				$fname = $row['fname'];
                $lname = $row['lname'];
                $amt = $row['loan'];
				$maturity_date = $row['maturity_date'];
				$amount_to_pay = $row['amount_to_pay'];
				$paid = $row['amount_paid'];
				$Principal_Paid =$row['Principal_Paid'];
                $balance = number_format($amt - $Principal_Paid);

				$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
				$row1 = mysqli_fetch_array($select1);
				$currency = $row1['currency'];
				
                
				?>    
				                <tr>
				                <td><?php echo $im; ?></td>
				                <td><?php echo $fname.'&nbsp;'.$lname; ?></td>
				                <td><?php echo $loanID; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amt; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amount_to_pay; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$paid; ?></td>
				               	<td><?php echo $maturity_date; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$balance; ?></td>
				               	<td><?php echo '<a href="editloan.php?id='.$im.'&&mid='.base64_encode("405").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button></a>'; ?></td>
				               	</tr>
				<?php }   ?>
				             </tbody>
                </table>  


			     </div>
   
            
              </div>
              <!-- /.tab-pane -->

 <div class="tab-pane" id="tab_4">
            <br>    
			 	<table>
				<th></th>
				<th> 
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 

                <a href="newpayments.php?id='.$_SESSION['tid'].'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;New Payment</button></a>

				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND loan != Principal_Paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;Overdue:&nbsp;<?php echo number_format($num); ?></button>
				
			    </th>
				<tbody> 

				</tbody>
                </table>
                <div>
                
				 <hr>
						<table id="example1" class="table table-bordered table-striped">
				                <thead>
				                <tr>
				                  <th>ID</th>
				                  <th>Member</th>
				                   <th>Loan ID</th>
								  <th>Loan</th>
								   <th>Amount to Pay</th>
				                  <th>Amount Paid</th>
								  <th>Maturity Date</th>
				                  <th>Balance</th>
				                  <th>Action</th>
				                 </tr>
				                </thead>
				                <tbody>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND loan != Principal_Paid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($select)){
			    $ims = $row['userid'];
			    $loanID = $row['loanId'];
				$fname = $row['fname'];
                $lname = $row['lname'];
                $amt1 = $row['loan'];
                $amount_to_pay = $row['amount_to_pay'];
                $paid = $row['amount_paid'];
				$maturity_date = $row['maturity_date'];
				$Principal_Paid1 = $row['Principal_Paid'];
				
				$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
				while($row1 = mysqli_fetch_array($select1))
				{
				$currency = $row1['currency'];
				
               
                $balance1 = number_format($amt1 - $Principal_Paid1);
				?>    
				                <tr>
				                <td><?php echo $ims; ?></td>
				                <td><?php echo $fname.'&nbsp;'.$lname; ?></td>
				                <td><?php echo $loanID; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amt; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amount_to_pay; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$paid; ?></td>
				               	<td><?php echo $maturity_date; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$balance; ?></td>
				               	<td><?php echo '<a href="editloan.php?id='.$ims.'&&mid='.base64_encode("405").'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-eye"></i></button></a>'; ?></td>
                
				               	</tr>
				<?php } } ?>
				             </tbody>
                </table>  


			     </div>
   
            
              </div>
              <!-- /.tab-pane -->
            
             </div>
            <!-- /.tab-content -->

          </div>
				 
					
					
				
				
				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	


			<div class="box box-info">
            <div class="box-body">
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF LOAN APPLICANTS:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM loan_info WHERE amount_to_pay != amount_paid ");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
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

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">List of Payments</a></li>
              <li ><a href="#tab_2" data-toggle="tab">List of All Loans</a></li>
              <li ><a href="#tab_3" data-toggle="tab">Current Loan</a></li>
              </ul>
             <div class="tab-content">

             <div class="tab-pane active" id="tab_1">
     
            <br>   
                           <table>
				<th></th>
				<th>
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
				
				</th>
				<tbody> 

				</tbody>
                </table>
                <hr>

             	<table id="example1" class="table table-bordered table-striped">
                                 <thead>
                <tr>
                  <th>ID</th>
                  <th>Loan ID</th>
                  <th>Amount to Pay</th>
                  <th>Amount Paid</th>
				  <th>Pay Date</th>		
				  <th>Remark</th>  
                 </tr>
                </thead>
                <tbody>
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM payments WHERE id = '$id'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$ids = $row['userid'];
$LID = $row['loanId'];
$loan = $row['loan'];
$amount_paid = $row['amount_paid'];
$pay_date = $row['pay_date'];
$rmk = $row['remarks'];

    $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
    while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency']; 
?>    
                <tr>
                <td><?php echo $ids; ?></td>
				<td><?php echo $LID; ?></td>
				<td><?php echo $currency.'&nbsp;'.$loan; ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($amount_paid); ?></td>
               	<td><?php echo $pay_date; ?></td>
               	<td><?php echo $rmk; ?></td>
                </tr>
<?php }  }  }?>
             </tbody>
                </table>  
			


 
			<br>
  </div>

              <!-- /.tab-pane -->

        <div class="tab-pane" id="tab_2">
            <br>    
			 	<table>
				<th></th>
				<th> 
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
                 				
			    </th>
				<tbody> 

				</tbody>
                </table>
                <hr>
                
                                  <div>
                <table id="example1" class="table table-bordered table-striped">
      
				 <br>
				  <hr>
						<table id="example1" class="table table-bordered table-striped">
				                <thead>
				                <tr>
				                  <th>ID</th>
				                  <th>Loan ID</th>
								  <th>Loan</th>
								  <th>amount to Pay</th>
				                  <th>Amount Paid</th>
								  <th>Maturity Date</th>
				                  <th>Balance</th>
				                 </tr>
				                </thead>
				                <tbody>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);

				$ids = $_GET['id'];
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE id = '$ids'") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($select)){
			    $im = $row['userid'];
			    $loanID = $row['loanId'];
				$amt = $row['loan'];
				$maturity_date = $row['maturity_date'];
				$amount_to_pay = $row['amount_to_pay'];
				$paid = $row['amount_paid'];
                $balance = number_format($amount_to_pay - $paid);

				$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
				$row1 = mysqli_fetch_array($select1);
				$currency = $row1['currency'];
				
                
				?>    
				                <tr>
				                <td><?php echo $im; ?></td>
				                <td><?php echo $loanID; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amt; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amount_to_pay; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$paid; ?></td>
				               	<td><?php echo $maturity_date; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$balance; ?></td>
				               	</tr>
				<?php }   ?>
				             </tbody>
                </table>  


			     </div>
   
            
              </div>
              <!-- /.tab-pane -->

 <div class="tab-pane" id="tab_3">
            <br>    
			 	<table>
				<th></th>
				<th> 
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 

                 </th>
				<tbody> 

				</tbody>
                </table>
                           
                                  <div>
                <?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$ids = $_GET['id'];
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE id ='$ids' AND maturity_date <= '$date' AND maturity_date < '$date' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
                <?php if ($num != 0) { ?>

                <?php echo '<div class="alert alert-danger fade in" ><a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
                <strong>Note That&nbsp;</strong> &nbsp;&nbsp; You Have Exceeded the Loan Payment Period.</div>'?>
                <?php }else { echo "";  }?> 

				 <hr>
						<table id="example1" class="table table-bordered table-striped">
				                <thead>
				                <tr>
				                  <th>ID</th>
				                  <th>Loan ID</th>
								  <th>Loan</th>
								  <th>Amount to Pay</th>
				                  <th>Amount Paid</th>
								  <th>Maturity Date</th>
				                  <th>Balance</th>
				                 </tr>
				                </thead>
				                <tbody>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);

				$ids = $_GET['id'];
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE id = '$ids' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($select)){
			    $im = $row['userid'];
			    $fname = $row['fname'];
                $lname = $row['lname'];
			    $loanID = $row['loanId'];
			    $amt = $row['loan'];
				$amount_to_pay = $row['amount_to_pay'];
				$paid = $row['amount_paid'];
               	$maturity_date = $row['maturity_date'];
				$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
				while($row1 = mysqli_fetch_array($select1))
				{
				$currency = $row1['currency'];
				
                               $balance = number_format($amount_to_pay - $paid);
				?>    
				                <tr>
				                <td><?php echo $im; ?></td>
				                <td><?php echo $loanID; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amt; ?></td>
                                <td><?php echo $currency.'&nbsp;'.$amount_to_pay; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$paid; ?></td>
				               	<td><?php echo $maturity_date; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$balance; ?></td>
				               	</tr>
				<?php } }   ?>
				             </tbody>
                </table>  


			     </div>
   
            
              </div>
              <!-- /.tab-pane -->
            
             </div>
            <!-- /.tab-content -->

          </div>
				 
					
					
				
				
				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	
</div>
<?php } ?>