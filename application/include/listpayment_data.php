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

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Payments</a></li>
              <li ><a href="#tab_2" data-toggle="tab">Overdues</a></li>
              </ul>
             <div class="tab-content">

             <div class="tab-pane active" id="tab_1">
            <br>   
               <table>
				<th></th>
				<th>
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
				<a href="newpayments.php?id='.$_SESSION['tid'].'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;New Payment</button></a>

				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
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
                  <th>Amount Paid</th>
				  <th>Pay Date</th>		  
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM payments ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$loanid = $row['loanId'];
$fname = $row['fname'];
$lname = $row['lname'];
$loan = $row['loan'];
$amount_paid = $row['amount_paid'];
$pay_date = $row['pay_date'];
    $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
    while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency']; 
?>    
                <tr>
                <td><?php echo $id; ?></td>
               	<td><?php echo $fname.'&nbsp;'.$lname; ?></td>
               	 <td><?php echo $loanid; ?></td>
				<td><?php echo $currency.'&nbsp;'.number_format($loan); ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($amount_paid); ?></td>
               	<td><?php echo $pay_date; ?></td>
                </tr>
<?php } } } ?>
             </tbody>
                </table>  
			




           
              </div>

              <!-- /.tab-pane -->

        <div class="tab-pane" id="tab_2">
            <br>    
			 	<table>
				<th></th>
				<th> 
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 

				<a href="newpayments.php?id='.$_SESSION['tid'].'"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;New Payment</button></a>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;Overdue:&nbsp;<?php echo number_format($num); ?></button>
									
				
			    </th>
				<tbody> 

				</tbody>
                </table>
                <hr>
                
                                  <div>
                <table id="example1" class="table table-bordered table-striped">
      




				 <br>
				 <p><h5><b>Table of Overdues </b></h5></p>
				 <hr>
						<table id="example1" class="table table-bordered table-striped">
				                <thead>
				                <tr>
				                  <th>ID</th>
				                  <th>Member</th>
				                  <th>Loan ID</th>
								  <th>Loan</th>
				                  <th>Amount Paid</th>
								  <th>Maturity Date</th>
				                  <th>Balance</th>
				                 </tr>
				                </thead>
				                <tbody>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y-m-d",$get);
				$select = mysqli_query($link, "SELECT * FROM loan_info WHERE maturity_date <= '$date' AND maturity_date < '$date' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($select)){
			    $im = $row['userid'];
			    $lnID = $row['loanId'];
				$fname = $row['fname'];
                $lname = $row['lname'];
                $amt = $row['loan'];
                $maturity_date = $row['maturity_date'];
				$paid = $row['amount_paid'];
                $balance = number_format($amt - $paid);
                
				$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
				while($row1 = mysqli_fetch_array($select1))
				{
				$currency = $row1['currency'];
				
                
				?>    
				                <tr>
				                <td><?php echo $im; ?></td>
								<td><?php echo $fname.'&nbsp;'.$lname; ?></td>
								<td><?php echo $lnID; ?></td>
								<td><?php echo $currency.'&nbsp;'.$amt; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$paid; ?></td>
				               	<td><?php echo $maturity_date; ?></td>
				               	<td><?php echo $currency.'&nbsp;'.$balance; ?></td>
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
</div>

			<div class="box box-info">
            <div class="box-body">
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF LOAN APPLICANTS:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM loan_info ");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
			</div>
			
			 <div id="chartdiv1"></div>								
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
              <li class="active"><a href="#tab_1" data-toggle="tab">Payments</a></li>
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
                  <th>Member</th>
				  <th>Account</th>
				  <th>Loan ID</th>
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
$fname = $row['fname'];
$lname = $row['lname'];
$acc = $row['account'];
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
				<td><?php echo $fname.'&nbsp;'.$lname; ?></td>
				<td><?php echo $acc; ?></td>
				<td><?php echo $LID; ?></td>
               	<td><?php echo $currency.'&nbsp;'.number_format($amount_paid); ?></td>
               	<td><?php echo $pay_date; ?></td>
               	<td><?php echo $rmk; ?></td>
                </tr>
<?php }  } } }?>
             </tbody>
                </table>  
			




           
              </div>

				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	
</div>
</div>
</div>