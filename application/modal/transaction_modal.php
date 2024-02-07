<?php
$select = mysqli_query($link, "SELECT * FROM transaction") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
?>

<div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog" id="printableArea">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
<?php
$search = mysqli_query($link, "SELECT * FROM systemset");
$get_searched = mysqli_fetch_array($search);
?>	
			<div align="center" style="color: red;"><div><?php echo ($get_searched['image'] == "") ? 'No Stamp Yet...' : '<img src="../image/'.$get_searched['image'].'" width="150" height="100"/>'; ?></div><h4><strong><br>

            <?php 
        if ($row['t_type'] == "Withdraw") { echo 'Withdrawal';}
        elseif ($row['t_type'] == "Deposit") { echo 'Deposit'; } 
        elseif ($row['t_type'] == "Membership Payment") { echo 'Membership Payment'; } 
        elseif ($row['t_type'] == "Shares") { echo 'Shares'; } 
        elseif ($row['t_type'] == "Savings/Shares") { echo 'Savings/Shares'; } 
        elseif ($row['t_type'] == "Share Transfer") { echo 'Share Transfer'; } 
        else{ echo 'Loan Payment';} 
        ?> Receipt</legend></h4></div>
              
			 </strong><legend style="color: red;">
	
			<hr>
			
			<table id="example1" class="table table-bordered table-striped">
				<tr>
				<td width="130">Transaction ID: </td>
				<th style="color: blue;"><?php echo $row['txid']; ?></th>
				</tr>
                <tr>
				<td width="130">Full Name: </td>
				<th style="color: blue;"><?php echo strtoupper($row['fn']); ?> &nbsp; <?php echo strtoupper($row['ln']); ?></th>
				</tr>
				<tr>
				<td width="150">Transaction Purpose</td>
				<th style="color: blue;"><?php 

				if($row['t_type'] == "Withdraw"){
				 echo  'Withdraw '.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'from'.'&nbsp;'.$row['acctno'];
                 }
                 elseif($row['t_type'] == "Deposit"){
				 echo 'Deposit'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'to'.'&nbsp;'.$row['acctno']; 
                 }
                  elseif($row['t_type'] == "Membership Payment"){
				 echo 'Membership Payment'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'to'.'&nbsp;'.$row['acctno']; 
                 }
                 elseif($row['t_type'] == "Shares"){
				 echo 'Shares Bought'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'to'.'&nbsp;'.$row['acctno']; 
                 }
                 elseif($row['t_type'] == "Savings/Shares"){
				 echo 'Savings/Shares'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'to'.'&nbsp;'.$row['acctno']; 

                 }elseif($row['t_type'] == "Share Transfer"){
				 echo 'Bought Shares Worthy'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'to'.'&nbsp;'.$row['acctno'];    
                 }
                  else {
                  echo 'Loan Payment'.' '.$get_searched['currency'].' '.number_format($row['amount'],2,'.',',').'&nbsp;'.'for'.'&nbsp;'.$row['acctno'];                 
                  }				
                  ?></th>
				</tr>
				 <tr>
				<td width="130">Date/Time: </td>
				<th style="color: blue;"><?php echo strtoupper($row['date_time']); ?> </th>
				</tr>
				
				<tr>
				<td width="130">Stamp: </td>
				<th style="color: blue;"><div><?php echo ($get_searched['stamp'] == "") ? 'No Stamp Yet...' : '<img src="../image/'.$get_searched['stamp'].'" width="80" height="80"/>'; ?></div></th>
				</tr>
                <tr>
			</table>
			
			<div class="box-footer">
				<button type="button" onclick="window.print();" class="btn btn-warning pull-right" ><i class="fa fa-print"></i>Print</button>
			</div>
			
        </div>
      </div>    
    </div>
</div>
<?php } ?>