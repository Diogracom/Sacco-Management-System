<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
    
<?php 
$date1 =  mysqli_real_escape_string($link, $_POST['date1']);
$date2 =  mysqli_real_escape_string($link, $_POST['date2']);

	
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
  
  $sel = mysqli_query($link, "SELECT sum(amount) FROM expense WHERE date_time between '$date1' and '$date2' ") or die (mysqli_error($link));
  $rows = mysqli_fetch_array($sel);


}
        echo "<br>";
		    echo "<font color='#555FFF'><br><b>Expenses Worthy &nbsp : &nbsp</b></font>" ;
		    echo $currency.' '.number_format(($rows['sum(amount)']),2,".",",")."</b>";
        echo "<br>";
        echo "<font color='#555FFF'><br><b> From:</b></font> &nbsp &nbsp $date1 &nbsp &nbsp &nbsp &nbsp <font color='#555FFF'><b> To:</b></font> &nbsp &nbsp$date2" ;
        echo "<br>";
        
?>
	<hr>		
	 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Narration </th>
                  <th>Txn. Type</th>
                  <th>Amount </th>
                  <th>Remark</th>
                  <th>Date</th>                  				  
                 </tr>
                </thead>
                <tbody>   		  
			
<?php

$select = mysqli_query($link, "SELECT * FROM expense WHERE date_time between '$date1' and '$date2' ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}


else{
	
	$bag = mysqli_query($link, "SELECT * FROM expense WHERE date_time between '$date1' and '$date2'") or die (mysqli_error($link));
	 
while($row = mysqli_fetch_array($bag))
{
$id = $row['id'];
$nar = $row['narration'];
$type = $row['type'];
$remark = $row['remarks'];
$amount = $row['amount'];
$date = $row['date_time'];

?> 

                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nar; ?></td>
                <td><?php echo $type; ?></td>
                <td><?php echo number_format($amount,2,'.',','); ?></td>
                <td><?php echo $remark; ?></td>
				        <td><?php echo $date; ?></td>
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