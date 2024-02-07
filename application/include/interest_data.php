<div class="row">
       	
	 <section class="content">
     
	        <div class="box box-success">
            <div class="box-body">
            <div class="table-responsive">
            <div class="box-body">

			<div class="col-md-14">
            <div class="nav-tabs-custom">
 
		<table id="example1" class="table table-bordered table-striped">
                <thead>
		                <tr>
		                 <th>Total Loans</th>
		                 <th>Total Pay Back</th> 
		                 <th>Total Interest</th>                 
		                </tr>
		        </thead>
		                <tbody> 
							<?php
							$select = mysqli_query($link, "SELECT SUM(loan), SUM(amount_to_pay) FROM loan_info WHERE amount_to_pay = amount_paid") or die (mysqli_error($link));
							while($row = mysqli_fetch_array($select))
							{
							$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
							while($row1 = mysqli_fetch_array($select1))
							{
							$currency = $row1['currency'];
							?> 
											<tr>
							<td><?php echo $currency.'&nbsp;'.number_format($row['SUM(loan)']); ?></td>
							<td><?php echo $currency.'&nbsp;'.number_format($row['SUM(amount_to_pay)']); ?></td>
							<td><?php echo $currency.'&nbsp;'.number_format($row['SUM(amount_to_pay)'] - $row['SUM(loan)']); ?></td>
							</tr>
	                        <?php } }  ?>
                         </tbody>
        </table>  


           
            </div>

		    </div>
	
            </div>
            </div>	
            </div>
   </div>	
</div>

			<div class="box box-info">
            <div class="box-body">
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF LOANS:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM loan_info WHERE amount_to_pay = amount_paid");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
			</div>
			
											
			</div>
			</div>		
       
