<div class="box">
        
         <div class="box-body">
              <div class="panel panel-success">
                   <div class="panel-heading">
                         <h3 class="panel-title"><i class="fa fa-dollar"></i>&nbsp;New Loans</h3>
                   </div>
              <div class="box-body">

                <div class="col-md-14">
             <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
              <li><a href="#tab_1" data-toggle="tab"><b>Loan Form</b></a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab">Pay Back Plan</a></li>
                            

              </ul>
             <div class="tab-content">
             <div class="tab-pane" id="tab_1">
            <br>   

			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
       
        <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
			 <div class="box-body">
				
			
			 <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
				 <div class="col-sm-10">
                <select name="fname" class="customer select2" style="width: 100%;" required="required">
            				<option selected="selected" ></option>
            				<?php
            				$get = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin' order by userid") or die (mysqli_error($link));
            				while($rows = mysqli_fetch_array($get))
            				{
            				echo '<option>'.$rows['fname'].'</option>';
            				}
            				?>
                </select>
              </div>
			  </div>

         <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">                  
                    <select name="lname" class="customer select2" style="width: 100%;" required="required">
                      <option selected="selected"></option>
                      <?php
                      $get = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin' order by userid") or die (mysqli_error($link));
                      while($rows = mysqli_fetch_array($get))
                      {
                      echo '<option>'.$rows['lname'].'</option>';
                      }
                      ?>
                    </select>
                  </div>
        </div>


        <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account No.</label>
                  <div class="col-sm-10">                  
                    <select name="account" class="customer select2" style="width: 100%;" required="required">
                      <option selected="selected"></option>
                      <?php
                      $get = mysqli_query($link, "SELECT * FROM user wHERE username !='Agent' AND username !='Admin' order by userid") or die (mysqli_error($link));
                      while($rows = mysqli_fetch_array($get))
                      {
                      echo '<option value="'.$rows['account'].'">'.$rows['account'].' '.'('.$rows['fname'].' '.$rows['lname'].')'.'</option>';
                      }
                      ?>
                    </select>
                  </div>
        </div>
			  
			

		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" placeholder="Amount" required='required'>
                  </div>
                  </div>
    
     <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Description</label>
                    <div class="col-sm-10">
          <textarea name="desc"  class="form-control" rows="4" cols="80"></textarea>
                 </div>
           </div>
    
     <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Date Release</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="date" class="form-control pull-right" id="datepicker2" required="required">
                </div>
              </div>
        </div>
        
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Agent</label>
                  <div class="col-sm-10">
<?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="agent" type="text" class="form-control" value="<?php echo $row['fname']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
  <hr>  
<div class="alert-danger">&nbsp;GUARANTOR INFORMATION</div>
<hr>
             
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Name</label>
                  <div class="col-sm-10">                  
                    <select name="g_name" class="customer select2" style="width: 100%;" required="required">
                      <option selected="selected"></option>
                      <?php
                      $get = mysqli_query($link, "SELECT * FROM user order by userid") or die (mysqli_error($link));
                      while($rows = mysqli_fetch_array($get))
                      {
                      echo '<option>'.$rows['fname'].' '.$rows['lname'].'</option>';
                      }
                      ?>
                    </select>
                  </div>
        </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Phone Number</label>
                  <div class="col-sm-10">
                  <input name="g_phone" type="text" class="form-control" required placeholder = "Guarantor's Number" required="required">
                  </div>
                  </div>
          
         
         <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Guarantor's Address</label>
                    <div class="col-sm-10">
          <textarea name="g_addrs"  class="form-control" rows="4" cols="80"></textarea>
                 </div>
            </div> 
      
                         
      <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                    <div class="col-sm-10">
          <textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
                 </div>
            </div>
      <hr>  
<div class="alert-danger">&nbsp;PAYMENT INFORMATION</div>
<hr>  
          
           <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Current Balance</label>
                  <div class="col-sm-10">
                  <input name="user" type="text" class="form-control" value="0.00" readonly="">
                  </div>
                  </div>
          
           <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="maturity_date" type="date" class="form-control pull-right" id="datepicker2" required="required">
                </div>
              </div>
        </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" placeholder="Amount to Pay" required="required">
                  </div>
                  </div>
                          
           
         
					 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save_loan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>
			  </form>
          </div>





              </div>

              <!-- /.tab-pane -->



              <div class="tab-pane active" id="tab_2">
            <br>    
             

                          <div align="center">
<h1>Loan Amortisation Schedule</h1>

<?php

// look for no POST entries, or the RESET button
if (count($_POST) == 0 or @$_POST['reset']) {
    // POST array is empty - set initial values
    $principal = 0;
    $number    = 0;
    $rate      = 0;
    $payment   = 0;
} else {
    // retrieve values from POST array
    $principal = $_POST['principal'];
    $number    = $_POST['number'];
    $rate      = $_POST['rate'];
    $payment   = $_POST['payment'];
} // if
// validate all fields
$error = array();
if (!empty($principal)) {
   if (!is_numeric($principal)) {
      $error['principal'] = "must be numeric";
   } elseif ($principal < 0) {
      $error['principal'] = "must be > zero";
   } else {
      $principal = (float)$principal;    // convert to floating point
   } // if
} // if

if (!empty($number)) {
   if (!preg_match('/^[0-9]+$/', $number)) {
      $error['number'] = "must be an integer";
   } else {
      $number = (int)$number;    // convert to integer
   } // if
} // if

if (!empty($rate)) {
   if (!is_numeric($rate)) {
      $error['rate'] = "must be numeric";
   } elseif ($rate < 0) {
      $error['rate'] = "must be > zero";
   } else {
      $rate = (float)$rate;    // convert to floating point
   } // if
} // if

if (!empty($payment)) {
   if (!is_numeric($payment)) {
      $error['payment'] = "must be numeric";
   } elseif ($payment < 0) {
      $error['payment'] = "must be > zero";
   } else {
      $payment = (float)$payment;    // convert to floating point
   } // if
} // if

if (count($error) == 0) {
   // no errors - perform requested action
   
   // if
   if (isset($_POST['button4'])) {
      $payment = calc_payment($principal, $number, $rate, 2);
   } // if
} // if
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<table class="table table-bordered table-striped ">
<colgroup align="right">
<colgroup align="left">
<colgroup align="center">
<tr>
    <td>Principal</td><td><input type="text" name="principal" value="<?php echo $principal ?>" >
<?php
   if (isset($error['principal'])) {
      echo '<p class="error">' .$error['principal'] .'</p>';
   } // if
?>
    </td>
</tr>
<tr>
    <td>Number of Payments</td><td><input type="text" name="number" value="<?php echo $number ?>" >
<?php
   if (isset($error['number'])) {
      echo '<p class="error">' .$error['number'] .'</p>';
   } // if
?>
    </td>
</tr>
<tr>
    <td>Interest Rate (%) per Payment</td><td><input type="text" name="rate" value="<?php echo $rate ?>" >
<?php
   if (isset($error['rate'])) {
      echo '<p class="error">' .$error['rate'] .'</p>';
   } // if
?>
    </td>
</tr>
<tr>
    <td>Payment</td><td><input type="text" name="payment" value="<?php echo $payment ?>" ><td><input  class="btn btn-primary" type="submit" name="button4" value="calculate Payment" ></td>
<?php
   if (isset($error['payment'])) {
      echo '<p class="error">' .$error['payment'] .'</p>';
   } // if
?>
    </td>
</tr>

</table>
<br>
<p><input class="btn btn-success" type="submit" name="button5" value ="Payment Schedule" >&nbsp;&nbsp;&nbsp;<input class="btn btn-danger" type="submit" name="reset" value="reset" ></p>
<br>
</form>

<?php
if (isset($_POST['button5'])) {
   print_schedule($principal, $rate, $payment);
} // if
?>
</div>
</body>
</html>
<?php



function calc_payment($pv, $payno, $int, $accuracy)
{
// check that required values have been supplied
if (empty($pv)) {
   echo "<p class='error'>a value for PRINCIPAL is required</p>";
   exit;
} // if
if (empty($payno)) {
   echo "<p class='error'>a value for NUMBER of PAYMENTS is required</p>";
   exit;
} // if
if (empty($int)) {
   echo "<p class='error'>a value for INTEREST RATE is required</p>";
   exit;
} // if

// now do the calculation using this formula:

//******************************************
//            INT * ((1 + INT) ** PAYNO)
// PMT = PV * --------------------------
//             ((1 + INT) ** PAYNO) - 1
//******************************************

$int    = $int / 100;    // convert to a percentage
$value1 = $int * pow((1 + $int), $payno);
$value2 = pow((1 + $int), $payno) - 1;
$pmt    = $pv * ($value1 / $value2);
// $accuracy specifies the number of decimal places required in the result
$pmt    = number_format($pmt, $accuracy, ".", "");

return $pmt;

} // calc_payment ====================================================================

function print_schedule($balance, $rate, $payment)
{
// check that required values have been supplied
if (empty($balance)) {
   echo "<p class='error'>a value for PRINCIPAL is required</p>";
   exit;
} // if
if (empty($rate)) {
   echo "<p class='error'>a value for INTEREST RATE is required</p>";
   exit;
} // if
if (empty($payment)) {
   echo "<p class='error'>a value for PAYMENT is required</p>";
   exit;
} // if

echo '<table class="table table-bordered table-striped ">';
echo '<colgroup align="right" width="20">';
echo '<colgroup align="right" width="115">';
echo '<colgroup align="right" width="115">';
echo '<colgroup align="right" width="115">';
echo '<colgroup align="right" width="115">';
echo '<tr><th>#</th><th>PAYMENT</th><th>INTEREST</th><th>PRINCIPAL</th><th>BALANCE</th></tr>';

$count = 0;
do {
   $count++;

   // calculate interest on outstanding balance
   $interest = $balance * $rate/100;

   // what portion of payment applies to principal?
   $principal = $payment - $interest;

   // watch out for balance < payment
   if ($balance < $payment) {
      $principal = $balance;
      $payment   = $interest + $principal;
   } // if

   // reduce balance by principal paid
   $balance = $balance - $principal;

   // watch for rounding error that leaves a tiny balance
   if ($balance < 0) {
      $principal = $principal + $balance;
      $interest  = $interest - $balance;
      $balance   = 0;
   } // if

   echo "<tr>";
   echo "<td>$count</td>";
   echo "<td>" .number_format($payment,   2, ".", ",") ."</td>";
   echo "<td>" .number_format($interest,  2, ".", ",") ."</td>";
   echo "<td>" .number_format($principal, 2, ".", ",") ."</td>";
   echo "<td>" .number_format($balance,   2, ".", ",") ."</td>";
   echo "</tr>";

   @$totPayment   = $totPayment + $payment;
   @$totInterest  = $totInterest + $interest;
   @$totPrincipal = $totPrincipal + $principal;

   if ($payment < $interest) {
      echo "</table>";
      echo "<p>Payment < Interest amount - rate is too high, or payment is too low</p>";
      exit;
   } // if

} while ($balance > 0);

echo "<tr>";
echo "<td>&nbsp;</td>";
echo "<td><b>" .number_format($totPayment,   2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($totInterest,  2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($totPrincipal, 2, ".", ",") ."</b></td>";
echo "<td>&nbsp;</td>";
echo "</tr>";
echo "</table>";

} // print_schedule ==================================================================
?>

                           
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
