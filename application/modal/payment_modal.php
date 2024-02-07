
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >

    <div class="modal-dialog" id="printableArea">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><a href="#">&times;</a></button>
<legend style="color: red;"><?php echo 'Loan Payment'; ?> Receipt</legend>
        </div>
        <div class="modal-body">
<?php
$search = mysqli_query($link, "SELECT * FROM systemset");
$get_searched = mysqli_fetch_array($search);
?>	
			<div align="center" style="color: red;"><h4><strong><?php echo $get_searched['name']; ?></strong></h4></div>
			<hr>
			
			<table id="example1" class="table table-bordered table-striped">
				<tr>
				<td width="130">Transaction ID: </td>
				<th style="color: blue;"><?php echo $txid; ?></th>
				</tr>
                <tr>
				<td width="130">Full Name: </td>
				<th style="color: blue;"><?php echo strtoupper($fname); ?> &nbsp; <?php echo strtoupper($lname); ?></th>
				</tr>
				<tr>
				<td width="150">Transaction Purpose</td>
				<th style="color: blue;"><?php 

				 echo 'Payment'.' '.$get_searched['currency'].' '.number_format($amount_paid,2,'.',',').'&nbsp;'.'for'.'&nbsp;'.$account; 
                 
                  ?></th>
				</tr>
				 <tr>
				<td width="130">Date/Time: </td>
				<th style="color: blue;"><?php
				$get = mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("Y"));
				$date = date("Y-m-d".' '.'h:i:s',$get); 
                 echo "$date";
				?></th>
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