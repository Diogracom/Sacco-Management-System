<div class="row">     
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
	<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
    
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

$select = mysqli_query($link, "SELECT * FROM expense ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}


else{
	
	$bag = mysqli_query($link, "SELECT * FROM expense ") or die (mysqli_error($link));
	 
while($row = mysqli_fetch_array($bag))
{
$id = $row['id'];
$nar = $row['narration'];
$type = $row['type'];
$remark = $row['remarks'];
$amount = $row['amount'];
$date = $row['pay_date'];

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