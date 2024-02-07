<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	
	</button>

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

</form>				

              </div>


	
</div>	
</div>
</div>	
</div>