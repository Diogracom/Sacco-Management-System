<div class="box">
         <div class="box-body">
      <div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Savings/Share Form</h3>
            </div>
             <div class="box-body">
             
            
            
       <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
             <div class="box-body">
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
        <select name="account"  class="form-control select2" required='required'>
          <option selected value ='' >Select Account</option>
<?php
$search = mysqli_query($link, "SELECT * FROM user wHERE username !='Ntwani'");
while($get_search = mysqli_fetch_array($search))
{
?>
          <option value="<?php echo $get_search['account']; ?>"><?php echo $get_search['account']; ?>&nbsp; [<?php echo $get_search['fname']; ?>&nbsp;<?php echo $get_search['lname']; ?>]</option>
<?php } ?>
        </select>
        </div>
            </div>

   <div class="form-group">
        <label for="" class="col-sm-2 control-label" style="color:#009900">Savings</label>
        <div class="col-sm-10">
        <input name="savings" type="number" value='0' class="form-control" placeholder="Enter Amount Here">
        </div>
        </div>

      <div class="form-group">
         
  <script type="text/javascript">
function calc(theForm) {
  var amnt = parseFloat(theForm.cshare.value)
  if (isNaN(amnt)) amnt=0;
  var exchangeRate = parseFloat(theForm.nshare.value)
  if (isNaN(exchangeRate)) exchangeRate=0;
 
 var amt =  (amnt * exchangeRate)
  theForm.amount.value=amt;
}
</script>

                  <label for="" class="col-sm-2 control-label" style="color:#009900">Cost of Share</label>
                  <div class="col-sm-10">
                  <input name="cshare" type="number" class="form-control" placeholder="Enter Cost per Share"  value="30000" onKeyUp="calc(this.form)" readonly="">
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">No. of Shares</label>
                  <div class="col-sm-10">
                  <input name="nshare" type="number" class="form-control" placeholder="Enter Qnty of Shares" value="0" onKeyUp="calc(this.form)">
                  </div>
                  </div>
                  
                  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Total Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="number" class="form-control" placeholder="Enter Amount Here"   value="0" readonly="readonly">
                  </div>
                  </div>

                  <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Pay Date</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="Ddate" type="date" class="form-control pull-right"  required>
                </div>
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Remark</label>
                  <div class="col-sm-10">
                  <input name="remark" type="varchar" class="form-control" placeholder="Enter Period Here" required>
                  </div>
                  </div>


       </div>
       
        <div align="right">
              <div class="box-footer">
                        <button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                        <button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Buy</i></button>

              </div>
        </div>
<?php
if(isset($_POST['save']))
{
try{
 $account =  mysqli_real_escape_string($link, $_POST['account']);
 $savings =  mysqli_real_escape_string($link, $_POST['savings']);
 $cshare = mysqli_real_escape_string($link, $_POST['cshare']);
 $nshare = mysqli_real_escape_string($link, $_POST['nshare']);
 $amount = mysqli_real_escape_string($link, $_POST['amount']);
 $remark = mysqli_real_escape_string($link, $_POST['remark']);
 $txid = 'TXID-'.rand(2000000,100000000);

 
  if($amount < 0 || $savings <0){
        throw new UnexpectedValueException();     
              }
      else{

    $fetch = mysqli_query($link, "SELECT * FROM user WHERE account = '$account'");
    $fetch_data = mysqli_fetch_array($fetch);
    $fname = $fetch_data['fname'];
    $lname = $fetch_data['lname'];
    $id = $fetch_data['id'];
    $ph = $fetch_data['phone'];
    $bal = $fetch_data['balance'];
    $total_bal = $savings + $bal;
    $total_pay = $savings + $amount;

 $google = mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account'");
        
   if(mysqli_num_rows($google) == 0)
   {
    
    $insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));
    
    $insert1 = mysqli_query($link, "INSERT INTO tt_shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));
    
    $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Savings/Shares','$account','$fname','$lname','$id','','$total_pay','$remark',NOW())") or die (mysqli_error($link));
    
    $update = mysqli_query($link, "UPDATE user SET balance = '$total_bal' WHERE account = '$account'") or die (mysqli_error($link));
      

    $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
      }
      else
      {
      
         $get_details = mysqli_fetch_array($google);
      
         $Pamount = $get_details['amount'];
         $Pshare = $get_details['nshare'];

         $Ushare = $Pshare + $nshare;
         $Uamount = $Pamount + $amount;
     
     $insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id','$fname','$lname','$account','$cshare','$nshare','$amount',NOW())") or die (mysqli_error($link));
      
     $insert1 = mysqli_query($link, "UPDATE tt_shares SET amount = '$Uamount', nshare = '$Ushare' WHERE account = '$account'") or die (mysqli_error($link));


     $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Savings/Shares','$account','$fname','$lname','$id','','$total_pay','$remark',NOW())") or die (mysqli_error($link));

     $update = mysqli_query($link, "UPDATE user SET balance = '$total_bal' WHERE account = '$account'") or die (mysqli_error($link));

     $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
      }

      if(!($insert && $insert1 && $insert2 && $update && $update1))
      {
      echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
      }
      else{
      
      echo "<div class='alert alert-success'>Savings/Shares Transaction Successfull!</div>";
      ?>
                <div align="center">
              <div class="box-footer">
                <a href="#myModal"><button type="submit" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal" ><i class="fa fa-print">&nbsp;Please Take You Receipt</i></button></a>
                  
              </div>
        </div> 
        
               <?php
                include 'modal/deposit_modal.php';    
        }
      }
      }catch(UnexpectedValueException $ex)
  {
    echo "<div class='alert alert-danger'>Invalid Amount Entered!</div>";
  }
 }
?>        
       </form> 


</div>  
</div>  
</div>
</div>