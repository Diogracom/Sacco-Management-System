<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
    
<?php 
$borrower =  mysqli_real_escape_string($link, $_POST['account']);
$date1 =  mysqli_real_escape_string($link, $_POST['date1']);
$date2 =  mysqli_real_escape_string($link, $_POST['date2']);

if ($borrower == '--Select Member --') {
	
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
  
  $sel = mysqli_query($link, "SELECT sum(amount) FROM transaction WHERE date_time between '$date1' and '$date2' && t_type = 'Withdraw' ") or die (mysqli_error($link));
  $rows = mysqli_fetch_array($sel);


}
        echo "<br>";
		    echo "<font color='#555FFF'><br><b>Withdraw Worthy &nbsp : &nbsp</b></font>" ;
		    echo $currency.' '.number_format(($rows['sum(amount)']),2,".",",")."</b>";
        echo "<br>";
        echo "<font color='#555FFF'><br><b> From:</b></font> &nbsp &nbsp $date1 &nbsp &nbsp &nbsp &nbsp <font color='#555FFF'><b> To:</b></font> &nbsp &nbsp$date2" ;
        echo "<br>";
        
?>
	<hr>		
	 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name </th>
                  <th>Txn. Type</th>
                  <th>Amount Withdrawn</th>
                  <th>Date</th>                  				  
                 </tr>
                </thead>
                <tbody>   		  
			
<?php

$account =  mysqli_real_escape_string($link, $_POST['account']);
$select = mysqli_query($link, "SELECT * FROM transaction WHERE date_time between '$date1' and '$date2' ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}


else{
	
	$bag = mysqli_query($link, "SELECT * FROM transaction WHERE date_time between '$date1' and '$date2' && t_type = 'Withdraw' ") or die (mysqli_error($link));
	 
while($row = mysqli_fetch_array($bag))
{
$fn = $row['fn'];
$ln = $row['ln'];
$pdate = $row['date_time'];
$type = $row['t_type'];
$amount = $row['amount'];


?> 

                <tr>
                <td><?php echo $ln; ?></td>
                <td><?php echo $fn; ?></td>
                <td><?php echo $type; ?></td>
				        <td><?php echo number_format($amount,2,'.',','); ?></td>
                <td><?php echo $pdate; ?></td>
			    </tr>
<?php  } } ?>
             </tbody>
                </table> 



<?php

   }else{

$getin = mysqli_query($link, "SELECT * FROM transaction where id = '$borrower'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($getin))
				
	{
		if(mysqli_num_rows($getin)>0)
		{

	$fname = $row['fn'];
    $lname = $row['ln'];	
		}
	}
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
}  
  $sel = mysqli_query($link, "SELECT sum(amount) FROM transaction WHERE id = '$borrower' && date_time between '$date1' and '$date2' && t_type = 'Withdraw' ") or die (mysqli_error($link));
  $rows = mysqli_fetch_array($sel);

    echo "<br>";
		echo "<font color='#555FFF'><br><b>$fname &nbsp $lname<b></font>" ;
    echo "<br>";
    echo "<font color='#555FFF'><br><b>Withdraws Worthy &nbsp : &nbsp</b></font>" ;
    echo $currency.' '.number_format(($rows['sum(amount)']),2,".",",")."</b>";
    echo "<br>";
		echo "<font color='#555FFF'><br><b> From:</b></font> &nbsp &nbsp $date1 &nbsp &nbsp &nbsp &nbsp <font color='#555FFF'><b>To:</b></font> &nbsp &nbsp$date2" ;
	

?>
	<hr>		
	 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Txn. Type</th>
                  <th>Amount Withdrawn</th>				  
                 </tr>
                </thead>
                <tbody>   		  
			
<?php

$account =  mysqli_real_escape_string($link, $_POST['account']);
$select = mysqli_query($link, "SELECT * FROM transaction WHERE  id = '$borrower' && date_time between '$date1' and '$date2' ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}


else{
	
	$bag = mysqli_query($link, "SELECT * FROM transaction WHERE  id = '$account' && date_time between '$date1' and '$date2' && t_type = 'Withdraw' ") or die (mysqli_error($link));
	 
while($row = mysqli_fetch_array($bag))
{

$pdate = $row['date_time'];
$type = $row['t_type'];
$amount = $row['amount'];


?> 

                <tr>
                <td><?php echo $pdate; ?></td>
                <td><?php echo $type; ?></td>
				<td><?php echo number_format($amount,2,'.',','); ?></td>

			    </tr>
<?php  } } } ?>
             </tbody>
                </table> 
                
               </form>				

              </div>


	
</div>	
</div>
</div>	
</div>