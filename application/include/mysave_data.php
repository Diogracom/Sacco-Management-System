<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
  <br>
  <hr>
  <h3 class="center" style="text-align: center; color: red;"> Personal Deposits</h3>
  <hr>		
	 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date/Time</th>
                  <th>Transaction ID</th>
                  <th>Transaction Type</th>
                  <th>Remark</th>
                  <th>Amount</th>
				  
                  </tr>
                </thead>
                <tbody>   		  
			
<?php

$account =  mysqli_real_escape_string($link, $_POST['account']);
$select = mysqli_query($link, "SELECT * FROM transaction WHERE t_type != 'Membership Payment' AND t_type != 'Payment' AND acctno = '$account'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}

else{
	 
while($row = mysqli_fetch_array($select))
{
$tid = $row['txid'];
$type = $row['t_type'];
$amt = $row['amount'];
$tdate = $row['date_time'];
$fn = $row['fn'];
$ln = $row['ln'];
$remark = $row['remark']
?> 

                <tr>
                <td><?php echo $tdate; ?></td>
                <td><?php echo $tid; ?></td>
                <td><?php echo $type; ?></td>
                <td><?php echo $remark; ?></td>
				        <td><?php echo number_format($amt); ?></td>

			    </tr>
<?php  } } ?>
             </tbody>
                </table> 
 <br>
 <br> 

                <?php 
$sel = mysqli_query($link, "SELECT balance FROM user WHERE fname = '$fn' AND lname = '$ln' AND account = '$account'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sel))
{

$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo '<center><b>Name  &nbsp; : </b>&nbsp;&nbsp;&nbsp;&nbsp;';
echo $fn.' '.$ln.'<br><br>';

echo '<center><b>Total Savings  &nbsp; : </b>&nbsp;&nbsp;&nbsp;&nbsp;';
echo $currency.' '.number_format($row['balance'])."</b>";
}
}
?>

<br>
<br>
<hr>
<h3 class="center" style="color: red;">Personal Loan Details</h3>
<hr>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Last Paid</th>
                  <th>Loan</th>
                  <th>Amount Paid</th>
                  <th>Amount To Pay</th>
                  </tr>
                </thead>
                <tbody>         
      
<?php

$account =  mysqli_real_escape_string($link, $_POST['account']);
$select = mysqli_query($link, "SELECT * FROM loan_info WHERE account = '$account' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}

else{
     
while($row = mysqli_fetch_array($select))
{
$loan = $row['loan'];
$paydate = $row['last_paid'];
$loan_id = $row['loanId'];
$paid = $row['amount_paid'];
$amount = $row['amount_to_pay'];
?> 

                <tr>
          <td><?php echo $loan_id; ?></td>
          <td><?php echo $paydate; ?></td>
      <td><?php echo $loan; ?></td>
      <td><?php echo number_format($paid); ?></td>
          <td><?php echo number_format($amount); ?></td>
          </tr>
<?php  } } ?>
             </tbody>
                </table>  

<br>
<br> 
<hr>
<h3 class="center" style="color: red;">Personal Shares</h3>
<hr>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Transaction Date</th>
                  <th>Unit Cost</th>
                  <th>Number of Shares</th>
                  <th>Amount</th>
          
                  </tr>
                </thead>
                <tbody>         
      
<?php
$account =  mysqli_real_escape_string($link, $_POST['account']);
$select = mysqli_query($link, "SELECT * FROM shares WHERE  account = '$account' ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}

else{
   
while($row = mysqli_fetch_array($select))
{
$cshare = $row['cshare'];
$nshare = $row['nshare'];
$amt = $row['amount'];
$tdate = $row['date_time'];
?> 

                <tr>
                <td><?php echo $tdate; ?></td>
                <td><?php echo number_format($cshare); ?></td>
                <td><?php echo $nshare; ?></td>
                <td><?php echo number_format($amt); ?></td>

          </tr>
<?php  } } ?>
             </tbody>
                </table>  

 <br>
 <br> 

<?php 
$account =  mysqli_real_escape_string($link, $_POST['account']);
$sel = mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sel))
{

 $fn = $row['fname'];
 $ln = $row['lname'];
 $sh = $row['nshare'];
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo '<center><b>Name &nbsp; : </b>&nbsp;&nbsp;&nbsp;&nbsp;';
echo $fn.' '.$ln.'<br><br>';
echo "<center><b>No. of Shares &nbsp; : </b>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $sh.'<br><br>';
echo '<center><b>Shares Worthy &nbsp; : </b>&nbsp;&nbsp;&nbsp;&nbsp;';
echo $currency.' '.number_format($row['amount'])."</b>";
}
}
?>
</form>				

              </div>


	
</div>	
</div>
</div>	
</div>