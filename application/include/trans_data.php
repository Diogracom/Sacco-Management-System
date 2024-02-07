<div class="box">
         <div class="box-body">
      <div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i>Transfer Share Form</h3>
            </div>
             <div class="box-body">
             
            
            
       <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
             <div class="box-body">
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Transfer From</label>
                  <div class="col-sm-10">
        <select name="account1"  class="form-control select2" required='required'>
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
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Transfer To</label>
                  <div class="col-sm-10">
        <select name="account2"  class="form-control select2" required='required'>
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
                <label for="" class="col-sm-2 control-label" style="color:#009900">Transfer Date</label>
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
                        <button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Transfer</i></button>

              </div>
        </div>
<?php
if(isset($_POST['save']))
{
try{
 $account1 =  mysqli_real_escape_string($link, $_POST['account1']);
 $account2 =  mysqli_real_escape_string($link, $_POST['account2']);
 $cshare = mysqli_real_escape_string($link, $_POST['cshare']);
 $nshare = mysqli_real_escape_string($link, $_POST['nshare']);
 $amount = mysqli_real_escape_string($link, $_POST['amount']);
 $remark = mysqli_real_escape_string($link, $_POST['remark']);
 $txid = 'TXID-'.rand(2000000,100000000);

if($account1 != $account2){
 
  if($amount < 0 || $nshare < 0){
        throw new UnexpectedValueException();     
              }
      else{
           

    $fetch = mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account1'");
    $fetch_data = mysqli_fetch_array($fetch);
    $id = $fetch_data['id'];
    $fname = $fetch_data['fname'];
    $lname = $fetch_data['lname'];
    $tamount = $fetch_data['amount'];
    $tshare = $fetch_data['nshare'];
   
    $nshare_bal = $tshare - $nshare;
    $amount_bal = $tamount - $amount;

    $google = mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account2'");
     
    if(mysqli_num_rows($google) == 0){

              $get = mysqli_query($link, "SELECT * FROM user WHERE account = '$account2'");
              $get_data = mysqli_fetch_array($get);
              
              $id1 = $get_data['id'];
              $fname1 = $get_data['fname'];
              $lname1 = $get_data['lname'];

              $New_amount = $amount;
              $New_Pshare = $nshare;

              }else{
              $get_details = mysqli_fetch_array($google); 

              $id1 = $get_details['id'];
              $fname1 = $get_details['fname'];
              $lname1 = $get_details['lname'];
              $Pamount = $get_details['amount'];
              $Pshare = $get_details['nshare'];

              $New_amount = $Pamount + $amount;
              $New_Pshare = $Pshare + $nshare;

              }
      
    $goo= mysqli_query($link, "SELECT * FROM tt_shares WHERE account = '$account2'");
        
    if(mysqli_num_rows($goo) == 0)
           {
            
            $insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id1','$fname1','$lname1','$account2','$cshare','$New_Pshare','$New_amount',NOW())") or die (mysqli_error($link));
            
           $insert1 = mysqli_query($link, "INSERT INTO tt_shares VALUES('0','$id1','$fname1','$lname1','$account2','$cshare','$New_Pshare','$New_amount',NOW())") or die (mysqli_error($link));
            
            $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Share Transfer','$account2','$fname1','$lname1','$id1','','$New_amount','$remark',NOW())") or die (mysqli_error($link));

            $update = mysqli_query($link, "UPDATE tt_shares SET amount = '$amount_bal', nshare = '$nshare_bal' WHERE account = '$account1'") or die (mysqli_error($link));

            $update1 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));


              }
              else
              {
              
             
            $insert = mysqli_query($link, "INSERT INTO shares VALUES('0','$id1','$fname1','$lname1','$account2','$cshare','$New_Pshare','$New_amount',NOW())") or die (mysqli_error($link));
            
            $update = mysqli_query($link, "UPDATE tt_shares SET amount = '$New_amount', nshare = '$New_Pshare' WHERE account = '$account2'") or die (mysqli_error($link));
            
            $insert2 = mysqli_query($link, "INSERT INTO transaction VALUES('0','$txid','Share Transfer','$account2','$fname1','$lname1','$id1','','$New_amount','$remark',NOW())") or die (mysqli_error($link));

            $update1 = mysqli_query($link, "UPDATE tt_shares SET amount = '$amount_bal', nshare = '$nshare_bal' WHERE account = '$account1'") or die (mysqli_error($link));

             $update2 = mysqli_query($link, "UPDATE last_update SET updates = NOW()") or die (mysqli_error($link));
              }

      if(!($insert && $insert2 && $update && $update1))
      {
      echo "<div class='alert alert-info'>Unable to Process Transaction.....Please try again later</div>";
      }
      else{
      
      echo "<div class='alert alert-success'>Share Transfer Successfull!</div>";
      ?>
                <div align="center">
              <div class="box-footer">
                <a href="#myModal"><button type="submit" class="btn btn-info btn-flat" data-toggle="modal" data-target="#myModal" ><i class="fa fa-print">&nbsp;Please Take You Receipt</i></button></a>
                  
              </div>
        </div> 
        
               <?php
                include 'modal/transfer_modal.php';    
        }


      }
    }else{
      echo "<div class='alert alert-danger'>The Two Accounts Must Be Different!!!!....</div>";
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