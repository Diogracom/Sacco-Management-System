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
  
  $sel = mysqli_query($link, "SELECT sum(loan) FROM loan_info WHERE date_release between '$date1' and '$date2'") or die (mysqli_error($link));
  $rows = mysqli_fetch_array($sel);


}
        echo "<br>";
        echo "<font color='#555FFF'><br><b>Loans Out Worthy &nbsp : &nbsp</b></font>" ;
        echo $currency.' '.number_format(($rows['sum(loan)']),2,".",",")."</b>";
        echo "<br>";
        echo "<font color='#555FFF'><br><b> From:</b></font> &nbsp &nbsp $date1 &nbsp &nbsp &nbsp &nbsp <font color='#555FFF'><b> To:</b></font> &nbsp &nbsp$date2" ;
        echo "<br>";
        
?>
  
    <hr>    
   <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No.</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Loan ID</th>
                 <th>Loan Amount</th>
                 <th>Paid Loan</th>
                 <th>Interest</th>
                 <th>Paid Interest</th>
                 <th>Loan Bal.</th>
                 <th>Interest Bal.</th>
                 <th>Status</th>          
                  </tr>
                </thead>
                <tbody>         
      
<?php

$select = mysqli_query($link, "SELECT * FROM loan_info where date_release between '$date1' and '$date2' ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
   
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$fname = $row['fname'];
$lname = $row['lname'];
$loanId = $row['loanId'];
$loan = $row['loan'];
$amt_to_pay = $row['amount_to_pay'];
$amt = $row['Principal_Paid'];
$Interest = $row['Interest'];
$maturity = $row['maturity_date'];
$date = date('Y-m-d');
$ttIn = $amt_to_pay - $loan;
$bal = $loan - $amt;
?> 

        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $fname; ?></td>
        <td><?php echo $lname; ?></td>
        <td><?php echo $loanId; ?></td>
        <td><?php echo $loan; ?></td>
        <td><?php echo number_format($amt,2,'.',','); ?></td>
        <td><?php echo number_format(($amt_to_pay - $loan),2,'.',','); ?></td>
        <td><?php echo number_format($Interest,2,'.',','); ?></td>
        <td><?php echo number_format(($loan - $amt),2,'.',','); ?></td>
        <td><?php echo number_format(($ttIn - $Interest),2,'.',','); ?></td>
        
        <td><?php if ( $bal == 0 && $ttIn == 0) {echo "<font class='btn btn-success btn-flat'>Complete</font>";}
    
        elseif (($maturity < $date) && (!$bal = 0 && !$ttIn = 0)){echo "<font class='btn btn-danger btn-flat'>Overdue</font>";}
    
        elseif (!$bal == 0 || !$ttIn == 0){echo "<font class='btn btn-info btn-flat'>On going</font>";}
    
    
     ?></td>

          </tr>
<?php }  }  ?>
             </tbody>
                </table> 

  <?php

}else{

$sel = mysqli_query($link, "SELECT * FROM loan_info WHERE id = '$borrower'") or die (mysqli_error($link));
$rows = mysqli_fetch_array($sel);
$lname = $rows['lname'];
$fname = $rows['fname'];

        echo "<br>";
        echo "<font color='#555FFF'><br><b>Loan Out to &nbsp : &nbsp</b></font>" ;
        echo $lname.' '.$fname."</b>";
        echo "<br>";
        echo "<font color='#555FFF'><br><b> From:</b></font> &nbsp &nbsp $date1 &nbsp &nbsp &nbsp &nbsp <font color='#555FFF'><b> To:</b></font> &nbsp &nbsp$date2" ;
        echo "<br>";
        
?>
  
    <hr>    
   <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No.</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Loan ID</th>
                 <th>Loan Amount</th>
                 <th>Paid Loan</th>
                 <th>Interest</th>
                 <th>Paid Interest</th>
                 <th>Loan Bal.</th>
                 <th>Interest Bal.</th>
                 <th>Status</th>          
                  </tr>
                </thead>
                <tbody>         
      
<?php

$select = mysqli_query($link, "SELECT * FROM loan_info where id = '$borrower' && date_release between '$date1' and '$date2' ") or die (mysqli_error($link));

if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
   
while($row = mysqli_fetch_array($select))
{
$id = $row['userid'];
$fname = $row['fname'];
$lname = $row['lname'];
$loanId = $row['loanId'];
$loan = $row['loan'];
$amt_to_pay = $row['amount_to_pay'];
$amt = $row['Principal_Paid'];
$Interest = $row['Interest'];
$maturity = $row['maturity_date'];
$date = date('Y-m-d');
$ttIn = $amt_to_pay - $loan;
$bal = $loan - $amt;
?> 

        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $fname; ?></td>
        <td><?php echo $lname; ?></td>
        <td><?php echo $loanId; ?></td>
        <td><?php echo $loan; ?></td>
        <td><?php echo number_format($amt,2,'.',','); ?></td>
        <td><?php echo number_format(($amt_to_pay - $loan),2,'.',','); ?></td>
        <td><?php echo number_format($Interest,2,'.',','); ?></td>
        <td><?php echo number_format(($loan - $amt),2,'.',','); ?></td>
        <td><?php echo number_format(($ttIn - $Interest),2,'.',','); ?></td>
        
        <td><?php if ( $bal == 0 && $ttIn == 0) {echo "<font class='btn btn-success btn-flat'>Complete</font>";}
    
        elseif (($maturity < $date) && (!$bal = 0 && !$ttIn = 0)){echo "<font class='btn btn-danger btn-flat'>Overdue</font>";}
    
        elseif (!$bal == 0 || !$ttIn == 0){echo "<font class='btn btn-info btn-flat'>On going</font>";}
    
    
     ?></td>

          </tr>
<?php }  } } ?>
             </tbody>
                </table> 


</form>       

              </div>


  
</div>  
</div>
</div>  
</div>