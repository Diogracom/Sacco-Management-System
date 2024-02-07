<div class="box">
        
         <div class="box-body">
              <div class="panel panel-success">
                   <div class="panel-heading">
                         <h3 class="panel-title"><i class="fa fa-dollar"></i>&nbsp;Pay Loan</h3>
                   </div>
              <div class="box-body">

              <div class="col-md-14">
              <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
              <li ><a href="#tab_1" data-toggle="tab"><b>Pay Loan</b></a></li>
              <li class="active"><a href="#tab_2" data-toggle="tab"><b>Calculate Interest</b></a></li>
                            

              </ul>
             <div class="tab-content">
             <div class="tab-pane" id="tab_1">
             <br>   
             

       <form class="form-horizontal" method="post" enctype="multipart/form-data" id="registrationForm">
        <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
             <div class="box-body">
             
    
        
            <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Account</label>
         <div class="col-sm-10">
                <select class="account select2" name="account" style="width: 100%;">
        <option selected="selected">--Select Borrower's Account--</option>
        <?php
        $getin = mysqli_query($link, "SELECT * FROM loan_info WHERE loan != Principal_Paid order by userid") or die (mysqli_error($link));
        while($row = mysqli_fetch_array($getin))
        {
        echo '<option value="'.$row['account'].'">'.$row['account'].' '.'('.$row['fname'].' '.$row['lname'].')'.' </option>';
        }
        ?> 
                </select>
              </div>
        </div>

            
        
        <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Loan</label>
         <div class="col-sm-10">
                <select class="loan select2" name="loan" style="width: 100%;">
        <option selected="selected">--Select Loan--</option>
        <?php

        $get = mysqli_query($link, "SELECT * FROM loan_info WHERE loan != Principal_Paid order by userid") or die (mysqli_error($link));
        while($rows = mysqli_fetch_array($get))
        {
        echo '<option value="'.$rows['loan'].'">'.$rows['loan'].'&nbsp;&nbsp;'.'('.$rows['fname'].' '.$rows['lname'].')'.' '.'['.$rows['loanId'].']'.' </option>';
        }
        ?>
                </select>
              </div>
        </div>

        <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Loan ID</label>
         <div class="col-sm-10">
        <select class="loan select2" name="loanId" style="width: 100%;">
        <option selected="selected">--Select Loan ID--</option>
                 <?php
        $get = mysqli_query($link, "SELECT * FROM loan_info WHERE loan != Principal_Paid order by userid") or die (mysqli_error($link));
        while($rows = mysqli_fetch_array($get))
        {
        echo '<option value="'.$rows['loanId'].'">'.$rows['loanId'].'</option>';
        }
        ?>
                </select>
              </div>
        </div>
        
        
        <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker2" name="pay_date" required>
                </div>
              </div>
        </div>
          
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Amount to Pay" required>
                  </div>
                  </div>
          
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Teller By</label>
                  <div class="col-sm-10">
                 <?php
$tid = $_SESSION['tid'];
$sele = mysqli_query($link, "SELECT * from user WHERE id = '$tid'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($sele))
{
?>
                  <input name="teller" type="text" class="form-control" value="<?php echo $row['fname']; ?>" readonly>
<?php } ?>
                  </div>
                  </div>
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:red"><b><i>TYPE&nbsp;<sup><b>*</b></sup> </i></b></label>
                  <div class="col-sm-10">
                  <select class="type select2" name="type" style="width: 100%;" required>
                          <option value="Principal + Interest">Principal + Interest</option>
                          <option value="Principal">Principal</option>
                          <option value="Interest">Interest</option> 
                  </select>
                  </div>
                  </div>
          
          
     <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Remarks</label>
                    <div class="col-sm-10">
          <textarea name="remarks"  class="form-control" rows="4" cols="80"></textarea>
                 </div>
          </div>

       </div>
       
        <div align="right">
              <div class="box-footer">
                        
                        <button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Make Payment</i></button>

              </div>
        </div>
              
              <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<script>
$('#registrationForm').on('submit', function(e) {
    // Prevent form submission by the browser
    e.preventDefault();

    // Rest of the logic
});
</script>
        </form>
			  
  <?php
if(isset($_POST['save']))
{
$account = mysqli_real_escape_string($link, $_POST['account']);
$loan = mysqli_real_escape_string($link, $_POST['loan']);
$loanid = mysqli_real_escape_string($link, $_POST['loanId']);
$pay_date = mysqli_real_escape_string($link, $_POST['pay_date']);
$type = mysqli_real_escape_string($link, $_POST['type']);
$amount_paid = mysqli_real_escape_string($link, $_POST['amount']);
$remarks = mysqli_real_escape_string($link, $_POST['remarks']);
$txid = 'TXID-'.rand(2000000,100000000);                    

$dateElements = explode('-', $pay_date);
        
        $yr = $dateElements[0];
        
        $mo = $dateElements[1];
 

$google_detail = mysqli_query($link, "SELECT * FROM user WHERE account ='$account'");
$rows = mysqli_fetch_array($google_detail);
$ph = $rows['phone'];

$google_details = mysqli_query($link, "SELECT * FROM loan_info WHERE account ='$account' AND loan = '$loan' AND loanId = '$loanid'");
$get_details = mysqli_num_rows($google_details);
if ($get_details == 0) 
{

  echo '<hr>';
    echo"<div class='alert alert-danger'>Loan Details Do Not Match......!!!</div>";
  echo '<hr>';

  
    }
else
{

$row = mysqli_fetch_array($google_details);
  $ids = $row['id']; 
  $fname = $row['fname'];
  $lname = $row['lname'];
  $loanid = $row['loanId'];
  $amount_topay = $row['amount_to_pay'];
  $CuLoan = $row['loan'];
  $PaidPrincipal = $row['Principal_Paid'];
  $paid = $row['amount_paid'];
  $total = $amount_paid + $paid;
  
  $ToCal = $CuLoan - $PaidPrincipal;

   $fetch = mysqli_query($link, "SELECT * FROM loan_info WHERE account ='$account' AND loan = '$loan' AND loanId = '$loanid'");
         $details = mysqli_fetch_array($fetch);

         $PrePri = $details['Principal_Paid'];
         $PreInt = $details['Interest'];


       $interest = 0.03 * $ToCal;
       $Principal = $amount_paid - $interest;
       
       $NewPrincCal = $PrePri + $Principal;
       $NewIntCal = $PreInt + $interest;  
       
       $NewPrinc = $PrePri + $amount_paid;
       $NewInt = $PreInt + $amount_paid;
        
    $IncomeUP = mysqli_query($link, "SELECT * FROM income WHERE id = '1'");
    $Incomedetails = mysqli_fetch_array($IncomeUP);  
    $Income = $Incomedetails['amount'];

    $IncomePri = $Income + $interest;
    $incomeOnly = $Income + $amount_paid;


     if ($type == 'Principal + Interest') {
        
       $update = mysqli_query($link, "UPDATE loan_info SET amount_paid = '$total', last_paid = '$pay_date', Principal_Paid = '$NewPrincCal', Interest = '$NewIntCal' WHERE fname = '$fname' AND lname ='$lname' AND id = '$ids' AND loanId = '$loanid'") or die (mysqli_error($link));

      $IncomUpdate = mysqli_query($link, "UPDATE income SET amount = '$IncomePri'") or die (mysqli_error($link));

       $insert = mysqli_query($link, "INSERT INTO payments(userid,id,loanId,fname,lname,account,loan,pay_date,amount_paid,Principal_paid, Interest,remarks,Year) VALUES('0','$ids','$loanid','$fname','$lname','$account','$loan','$pay_date','$amount_paid','$Principal','$interest','$remarks','$yr')") or die (mysqli_error($link));
 
       $insert1 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Payment','$account','$fname','$lname','$ids','$ph','$amount_paid','Loan Payment',NOW())") or die (mysqli_error($link));

        $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
         }


      elseif($type == 'Principal'){

        $update = mysqli_query($link, "UPDATE loan_info SET amount_paid = '$total', last_paid = '$pay_date',Principal_Paid = '$NewPrinc'WHERE fname = '$fname' AND lname ='$lname' AND id = '$ids' AND loanId = '$loanid'") or die (mysqli_error($link));

       
        $insert = mysqli_query($link, "INSERT INTO payments(userid,id,loanId,fname,lname,account,loan,pay_date,amount_paid,Principal_Paid,remarks,Year) VALUES('0','$ids','$loanid','$fname','$lname','$account','$loan','$pay_date','$amount_paid','$amount_paid','$remarks','$yr')") or die (mysqli_error($link));

        
         $insert1 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Payment','$account','$fname','$lname','$ids','$ph','$amount_paid','Loan Payment',NOW())") or die (mysqli_error($link));

        $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
    
         }
      
      else{
            $update = mysqli_query($link, "UPDATE loan_info SET amount_paid = '$total', last_paid = '$pay_date', Interest = '$NewInt' WHERE fname = '$fname' AND lname ='$lname' AND id = '$ids' AND loanId = '$loanid'") or die (mysqli_error($link));
           
            $IncomUpdate = mysqli_query($link, "UPDATE income SET amount = '$incomeOnly'") or die (mysqli_error($link));
       
            $insert = mysqli_query($link, "INSERT INTO payments(userid,id,loanId,fname,lname,account,loan,pay_date,amount_paid,Interest,remarks,Year) VALUES('0','$ids','$loanid','$fname','$lname','$account','$loan','$pay_date','$amount_paid','$amount_paid','$remarks','$yr')") or die (mysqli_error($link));

        
            $insert1 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Payment','$account','$fname','$lname','$ids','$ph','$amount_paid','Loan Payment',NOW())") or die (mysqli_error($link));

            $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
    
         } 

    if(!($update && $insert && $insert1 && $update1))
    {
     echo '<hr>';
    echo"<div class='alert alert-danger'>Unable to Update payment records.....Please try again later!</div>";
     echo '<hr>';
        }
    else{
       echo '<hr>';
        echo"<div class='alert alert-success'>Payment Successfully.....!!!</div>";
       echo '<hr>';
      ?>
                <div align="center">
              <div class="box-footer">
                <a href="#myModal"><button type="submit" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal" ><i class="fa fa-print">&nbsp;Please Take You Receipt</i></button></a>
                  
              </div>
        </div> 
        
               <?php
                include 'modal/payment_modal.php';    
    }


}
}
?>        
             </div>
            

              <!-- /.tab-pane -->



          <div class="tab-pane active" id="tab_2">
            <br>    
             

            
       <form class="form-horizontal" method="post"  enctype="multipart/form-data">
        <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
             <div class="box-body">
      
      
      <div class="form-group">
            
         
  <script type="text/javascript">
function calc(theForm) {
  var amnt = parseFloat(theForm.cshare.value)
  if (isNaN(amnt)) amnt=0;
  var type = parseFloat(theForm.type.value)
  if (isNaN(type)) type=0;
  var exchangeRate = parseFloat(theForm.nshare.value)
  if (isNaN(exchangeRate)) exchangeRate=0;
 
 var amt =  (amnt * exchangeRate * type)
  theForm.amount.value=amt.toFixed(3);
}
</script>



<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date 1</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right"  name="d1" <?php if(isset($_POST['save1'])) echo 'value="'.$_POST['d1'].'"'; ?>>
                </div>
              </div>
        </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date 2</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                   </div>
                  <input type="date" class="form-control pull-right" name="d2" <?php if(isset($_POST['save1'])) echo 'value="'.$_POST['d2'].'"'; ?>>
                </div>
               </div>
        </div>


          <div align="right">
              <div class=" ">
                        
                        <button name="save1" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Get months</i></button>
              </div>
          </div>
          <br>
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Months</label>
                  <div class="col-sm-10">
                  <input name="cshare" type="number" class="form-control"  value="<?php
          if(isset($_POST['save1']))
{
  $d1 =  $_POST['d1'];
  $d2 =  $_POST['d2'];
 $months= (int)abs((strtotime($d1) - strtotime($d2))/(60*60*24*30));  
          echo $months; }?>" readonly onKeyUp="calc(this.form)">
                  </div>
          </div>       

                  
                   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Loan Type</label>
                  <div class="col-sm-10">
                  <select class="type select2" name="type" style="width: 100%;" required>
        <option selected="selected">--Loan Type--</option>
                <option value="0.03">Ordinary</option>
                <option value="0.05">Emergency</option> 
                </select>
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Principle Balance</label>
                  <div class="col-sm-10">
                  <input name="nshare" type="number" class="form-control" placeholder="Enter Principle Balance"  value="" onKeyUp="calc(this.form)">
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Total Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here"   value="0.00" readonly>
                  </div>
                  </div>

       
    </div>          
     </div>
       </form> 


                           
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
