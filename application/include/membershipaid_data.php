<div class="row">
       	
	 <section class="content">
     
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">List of Membership Payments</a></li>
              <li ><a href="#tab_2" data-toggle="tab">List of UnPaid Membership</a></li>
              </ul>
             <div class="tab-content">

             <div class="tab-pane active" id="tab_1">
     
            <br>   
               <table>
				<th></th>
				<th>
				<a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
                 
                 <a href="membership.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;Pay Membership</button></a>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y",$get);
				$select = mysqli_query($link, "SELECT * FROM membership WHERE year < '$date' ") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;UnPaid Membership:&nbsp;<?php echo number_format($num); ?></button>
						
				</th>
				<tbody> 

				</tbody>
                </table>
                					
                <hr>
		        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>FName</th>
				  <th>LName</th>
				  <th>AcctNo.</th>
                 </tr>
                </thead>
                <tbody>
<?php
$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
$date = date("Y",$get);
$select = mysqli_query($link, "SELECT * FROM membership WHERE year = '$date'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$fn = $row['fname'];
$ln = $row['lname'];
$acctno = $row['account'];
?>    
        <tr>
        	    <td><?php echo $id; ?></td>
				<td><?php echo $fn; ?></td>
				<td><?php echo $ln; ?></td>
				<td><?php echo $acctno; ?></td>
			
				
				</tr>
<?php } } ?>
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
                 
                 <a href="membership.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-dollar"></i>&nbsp;Pay Membership</button></a>
				<?php
				$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
				$date = date("Y",$get);
				$select = mysqli_query($link, "SELECT * FROM membership WHERE year < '$date' ") or die (mysqli_error($link));
				$num = mysqli_num_rows($select);
				?>
					<button type="button" class="btn btn-flat btn-danger"><i class="fa fa-times"></i>&nbsp;UnPaid Membership:&nbsp;<?php echo number_format($num); ?></button>
				
			    </th>
				<tbody> 

				</tbody>
                </table>
              
				 <hr>
					
							 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>FName</th>
				  <th>LName</th>
				  <th>AcctNo.</th>
                </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM membership WHERE year < '$date'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$fn = $row['fname'];
$ln = $row['lname'];
$acctno = $row['account'];
?>    
        <tr>    
        	    <td><?php echo $id; ?></td>
				<td><?php echo $fn; ?></td>
				<td><?php echo $ln; ?></td>
				<td><?php echo $acctno; ?></td>
							
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
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">NUMBER OF MEMBERS:&nbsp;
			<?php 
			$call3 = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin'");
			$num3 = mysqli_num_rows($call3);
			?>
			<?php echo $num3; ?> 
			
			</div>
			
										
			</div>
			</div>		
       
</div>

