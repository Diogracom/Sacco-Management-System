<div class="row">
       	
	 <section class="content">
     
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab">2016 Savings</a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab">2017 Savings</a></li>
              <li><a href="#tab_3" data-toggle="tab">2018 Savings</a></li>
              <li><a href="#tab_4" data-toggle="tab">2019 Savings</a></li>
              <li><a href="#tab_5" data-toggle="tab">2020 Savings</a></li>

              </ul>
             <div class="tab-content">
             <div class="tab-pane" id="tab_1">
            <br>   
               <table>
				<th></th>
				<th> <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> </th>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th align="center" width="300">Annual Savings 2016</th>
                <tbody> 

				</tbody>
                </table>
                <hr>

             	     <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <td>Id</td>
                  <th>Full Name</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Totals</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM 2016_savings") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$name = $row['name'];
$ja = $row['january'];
$fe = $row['february'];
$ma = $row['march'];
$ap = $row['april'];
$my = $row['may'];
$ju = $row['june'];
$jy = $row['july'];
$au = $row['august'];
$se = $row['september'];
$oc = $row['october'];
$no = $row['november'];
$de = $row['december'];
$sum = $ja + $fe + $ma + $ap + $my + $ju + $jy + $au + $se + $oc + $no + $de;
?>    
                <tr>
       
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $ja; ?></td>
        <td><?php echo $fe; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ap; ?></td>
        <td><?php echo $my; ?></td>
        <td><?php echo $ju; ?></td>
        <td><?php echo $jy; ?></td>
        <td><?php echo $au; ?></td>
        <td><?php echo $se; ?></td>
        <td><?php echo $oc; ?></td>
        <td><?php echo $no; ?></td>
        <td><?php echo $de; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].'&nbsp;'.$sum; ?></td>
                
        </tr>
<?php } } ?>
             </tbody>
                </table>  




              </div>

              <!-- /.tab-pane -->



              <div class="tab-pane active" id="tab_2">
            <br>    
			 	<table>
				<th></th>
				<th> <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> </th>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th align="center" width="300">Annual Savings 2017</th>
                <tbody> 

				</tbody>
                </table>
                <hr>
                
                                  <div>
                        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <td>Id</td>
                  <th>Full Name</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Totals</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM 2017_savings") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$name = $row['name'];
$ja = $row['january'];
$fe = $row['february'];
$ma = $row['march'];
$ap = $row['april'];
$my = $row['may'];
$ju = $row['june'];
$jy = $row['july'];
$au = $row['august'];
$se = $row['september'];
$oc = $row['october'];
$no = $row['november'];
$de = $row['december'];
$sum = $ja + $fe + $ma + $ap + $my + $ju + $jy + $au + $se + $oc + $no + $de;
?>    
                <tr>
        
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $ja; ?></td>
        <td><?php echo $fe; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ap; ?></td>
        <td><?php echo $my; ?></td>
        <td><?php echo $ju; ?></td>
        <td><?php echo $jy; ?></td>
        <td><?php echo $au; ?></td>
        <td><?php echo $se; ?></td>
        <td><?php echo $oc; ?></td>
        <td><?php echo $no; ?></td>
        <td><?php echo $de; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].'&nbsp;'.$sum; ?></td>
                
        </tr>
<?php } } ?>
             </tbody>
                </table>  

			     </div>
   
            
              </div>
              <!-- /.tab-pane -->



              <div class="tab-pane" id="tab_3">
            <br>
              	<table>
				<th></th>
				<th> <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> </th>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th align="center" width="300">Annual Savings 2018</th>
                <tbody> 

				</tbody>
                </table>
                <hr>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <td>Id</td>
                  <th>Full Name</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Totals</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM 2018_savings") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$name = $row['name'];
$ja = $row['january'];
$fe = $row['february'];
$ma = $row['march'];
$ap = $row['april'];
$my = $row['may'];
$ju = $row['june'];
$jy = $row['july'];
$au = $row['august'];
$se = $row['september'];
$oc = $row['october'];
$no = $row['november'];
$de = $row['december'];
$sum = $ja + $fe + $ma + $ap + $my + $ju + $jy + $au + $se + $oc + $no + $de;
?>    
                <tr>
       
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $ja; ?></td>
        <td><?php echo $fe; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ap; ?></td>
        <td><?php echo $my; ?></td>
        <td><?php echo $ju; ?></td>
        <td><?php echo $jy; ?></td>
        <td><?php echo $au; ?></td>
        <td><?php echo $se; ?></td>
        <td><?php echo $oc; ?></td>
        <td><?php echo $no; ?></td>
        <td><?php echo $de; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].'&nbsp;'.$sum; ?></td>
                
        </tr>
<?php } } ?>
             </tbody>
                </table>  

           
              </div>
              <!-- /.tab-pane -->


                            <div class="tab-pane" id="tab_4">
                <br>
              	<table>
				<th></th>
				<th> <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> </th>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th align="center" width="300">Annual Savings 2019</th>
                <tbody> 

				</tbody>
                </table>
                <hr>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <td>Id</td>
                  <th>Full Name</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Totals</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM 2019_savings") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$name = $row['name'];
$ja = $row['january'];
$fe = $row['february'];
$ma = $row['march'];
$ap = $row['april'];
$my = $row['may'];
$ju = $row['june'];
$jy = $row['july'];
$au = $row['august'];
$se = $row['september'];
$oc = $row['october'];
$no = $row['november'];
$de = $row['december'];
$sum = $ja + $fe + $ma + $ap + $my + $ju + $jy + $au + $se + $oc + $no + $de;
?>    
                <tr>
        
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $ja; ?></td>
        <td><?php echo $fe; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ap; ?></td>
        <td><?php echo $my; ?></td>
        <td><?php echo $ju; ?></td>
        <td><?php echo $jy; ?></td>
        <td><?php echo $au; ?></td>
        <td><?php echo $se; ?></td>
        <td><?php echo $oc; ?></td>
        <td><?php echo $no; ?></td>
        <td><?php echo $de; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].'&nbsp;'.$sum; ?></td>
                
        </tr>
<?php } } ?>
             </tbody>
                </table>  
     
           
              </div>
              <!-- /.tab-pane -->

             <div class="tab-pane" id="tab_5">
                <br>
              	<table>
				<th></th>
				<th> <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> </th>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th align="center" width="300">Annual Savings 2020</th>
                <tbody> 

				</tbody>
                </table>
                <hr>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
               
                  <td>Id</td>
                  <th>Full Name</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>August</th>
                  <th>September</th>
                  <th>October</th>
                  <th>November</th>
                  <th>December</th>
                  <th>Totals</th>
                  </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT * FROM 2020_savings") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$id = $row['id'];
$name = $row['name'];
$ja = $row['january'];
$fe = $row['february'];
$ma = $row['march'];
$ap = $row['april'];
$my = $row['may'];
$ju = $row['june'];
$jy = $row['july'];
$au = $row['august'];
$se = $row['september'];
$oc = $row['october'];
$no = $row['november'];
$de = $row['december'];
$sum = $ja + $fe + $ma + $ap + $my + $ju + $jy + $au + $se + $oc + $no + $de;
?>    
                <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $ja; ?></td>
        <td><?php echo $fe; ?></td>
        <td><?php echo $ma; ?></td>
        <td><?php echo $ap; ?></td>
        <td><?php echo $my; ?></td>
        <td><?php echo $ju; ?></td>
        <td><?php echo $jy; ?></td>
        <td><?php echo $au; ?></td>
        <td><?php echo $se; ?></td>
        <td><?php echo $oc; ?></td>
        <td><?php echo $no; ?></td>
        <td><?php echo $de; ?></td>
<?php
$query = mysqli_query($link, "SELECT * FROM systemset");
$get_query = mysqli_fetch_array($query);
?>
        <td><?php echo $get_query['currency'].'&nbsp;'.$sum; ?></td>
                
        </tr>
<?php } } ?>
             </tbody>
                </table>  

           
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
            <div class="alert alert-info" align="center" class="style2" style="color: #FFFFFF">Transfers From Taxis Project</div>


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Member</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Amount Transfered</th>
                          <th>Transfer Date</th>
                          </tr>
                        </thead>
                        <tbody>
        <?php
        $select = mysqli_query($link, "SELECT * FROM transfer") or die (mysqli_error($link));
        while($row = mysqli_fetch_array($select)){
        $nm = $row['name'];
        $em = $row['email'];
        $ph = $row['phone'];
        $amt = $row['amount'];
        $dt = $row['date'];

        $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
        while($row1 = mysqli_fetch_array($select1))
        {
        $currency = $row1['currency'];
        ?>    
                        <tr>
               
                <td><?php echo $nm; ?></td>
                <td><?php echo $em; ?></td>
                 <td><?php echo $ph; ?></td>
                <td><?php echo $currency.'&nbsp;'.number_format($amt); ?></td>
                 <td><?php echo $dt; ?></td>
                
                          </tr>
        <?php } }   ?>
                     </tbody>
                </table>  
      
       <div id="chartdiv1"></div>               
      </div>
      </div>    