
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
  ?>
<?php if ($pcreate == 1) { ?>
      
      <div class="alert alert-info fade in" ><a href = "#" class = "close" data-dismiss= "alert">  &times;</a>&nbsp;
      <?php 
      $call3 = mysqli_query($link, "SELECT * FROM last_update ");
      $get_check = mysqli_fetch_array($call3);
      $update = $get_check['updates']
      ?>
      
     <strong>Last Updated on :&nbsp;</strong>&nbsp;&nbsp;<?php echo "$update"; ?>.
       
</div> 

      <?php } else { echo " Please Update Your Profile";  }?>


 



<div class="row">

  <!-- ./col -->

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php
$select = mysqli_query($link, "SELECT sum(balance) FROM user ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "0.00";
}
else{
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];

echo $currency.' '.number_format(($row['sum(balance)']),2,".",",")."</b>";
}
}
}
?>      </h4>
              <p>Saving</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
            <a href="dpst.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("404"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>      
        </div>
<?php
}
else{
  ?>

       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      <h4>
<?php
$select = mysqli_query($link, "SELECT sum(balance) FROM user ") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "0.00";
}
else{
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];

echo $currency.' '.number_format(($row['sum(balance)']),2,".",",")."</b>";
}
}
}
?>      </h4>
              <p>Total Sacco Saving</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/bitcoin.png">
              <i class=""></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>      
        </div>

           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php
$ids = $_GET['id'];
$select = mysqli_query($link, "SELECT balance FROM user WHERE id ='$ids'") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "0.00";
}
else{
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.' '.number_format($row['balance'],2,".",",")."</b>";
}
}
}
?>      </h4>
              <p>My Savings</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
            <a href="dpst.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("404"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>      
        </div>

<?php  } ?>
        <!-- ./col -->




<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
<h4>
<?php 
$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
$date = date("Y",$get);
$select = mysqli_query($link, "SELECT SUM(amount_to_pay), SUM(amount_paid) FROM loan_info WHERE amount_to_pay != amount_paid") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
 
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];

echo $currency.' '.number_format($row['SUM(amount_to_pay)'] - $row['SUM(amount_paid)'],2,".",","); 
}
}
?>
</h4>
      <p>Loans</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png"> <i class=""></i> </div>
             <a href="listloans.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
        </div>
<?php
}
else{
?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
<h4>
<?php 
$ids = $_GET['id'];
$select = mysqli_query($link, "SELECT SUM(loan) FROM loan_info wHERE id = '$ids' AND amount_to_pay != amount_paid") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.' '.number_format($row['SUM(loan)'],2,".",",")."</b>";
}
}
?>
</h4>
      <p>My Loans</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/bitcoin_34.png"> <i class=""></i> </div>
             <a href="listloans.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>
        </div>

<?php } ?>
        <!-- ./col -->



<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
      
      <h4>
<?php

$select = mysqli_query($link, "SELECT * FROM user WHERE username !='Agent' AND username !='Admin' ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num ;
?>
      </h4>
              <p>Members</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/school.png">
              <i class=""></i>
            </div>
            <a href="listmembers.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php
}
else{ 
  echo '';
}
?>

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
       <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
      
      <h4>
<?php
$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
$date = date("Y",$get);

$select = mysqli_query($link, "SELECT * FROM membership WHERE year = '$date' ") or die (mysqli_error($link));
$num = mysqli_num_rows($select);

echo $num ;
?>
      </h4>
              <p>Membership</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/comittee.png">
              <i class=""></i>
            </div>
            <a href="membershipay.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php
}
else{ 
  echo '';
}
?>
    

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Shares'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
      
      <h4>
<?php
$select = mysqli_query($link, "SELECT * FROM tt_shares") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Share Holders</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/report.png">
              <i class=""></i>
            </div>
            <a href="listshare.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php
}
else{ ?>
  
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
      
      <h4>
<?php
$ids = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM tt_shares WHERE id = '$ids'" ) or die (mysqli_error($link));
$num = mysqli_fetch_array($select);
$sh = $num['nshare'];
echo $sh;
?>
      </h4>
              <p>My Shares </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/report.png">
              <i class=""></i>
            </div>
            <a href="listshare.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php base64_encode("405"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

<?php } ?>

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      <h4>
<?php
$select = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
$num = mysqli_num_rows($select);
echo $num;
?>
      </h4>
              <p>Company Setup</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/setting.png">
              <i class=""></i>
            </div>
            <a href="system_set.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("411"); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php
}
else{
  echo '';
}
?>
  


        <!-- ./col -->
<?php

$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Payment'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>
<?php 
$get = mktime(0,0,0,date("m"),date("d"),date("Y"));
$date = date("Y",$get);

$select = mysqli_query($link, "SELECT SUM(Principal_paid) FROM payments WHERE Year = '$date'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.' '.number_format($row['SUM(Principal_paid)'],2,".",",")."</b>";
}
}
?>
      </h4>
              <p>Payments </p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
             <a href="listpayment.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("411"); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
<?php
}
else{ echo ""; }
?>
        <!-- ./col -->  

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Transactions'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>    
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
      
      <h4>
<?php 
$select = mysqli_query($link, "SELECT SUM(amount) FROM transaction ") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.' '.number_format($row['SUM(amount)'],2,".",",")."</b>";
}
}
?>
      </h4>
              <p>Total Transactions</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
            <a href="transaction.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("411"); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  
        <!-- ./col -->  
        <?php
}
else{ ?>

 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      <h4>

<?php 
  $select = mysqli_query($link, "SELECT SUM(amount) FROM transaction WHERE id ='$ids' ") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
{
$select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
while($row1 = mysqli_fetch_array($select1))
{
$currency = $row1['currency'];
echo $currency.' '.number_format($row['SUM(amount)'],2,".",",")."</b>";
}
}
?>
      </h4>
              <p>My Transactions</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/fair.png">
              <i class=""></i>
            </div>
            <a href="transaction.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("411"); ?>" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
  
<?php  } ?>     



<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
if($pcreate == '1')
{
?>          
    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
       
      <h4>
      <?php
              $select = mysqli_query($link, "SELECT * FROM income ") or die (mysqli_error($link));
              $row = mysqli_fetch_array($select);
              $income = $row['amount']; 
              
              $select1 = mysqli_query($link, "SELECT * FROM systemset") or die (mysqli_error($link));
              $row1 = mysqli_fetch_array($select1);
              
              $currency = $row1['currency'];
              ?> 
                    
            
              <?php echo $currency.' '.number_format($row['amount'],2,".",","); ?>
      </h4>
              <p>Total Interest</p>
            </div>
            <div class="icon"><img height="80" width="80" src="../img/bitcoin.png">
              <i class=""></i>
            </div>
             <a href="#" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 <?php
}
else{
  echo '';
}
?>     



  <section class="content">
      <div class="row">
    </div>
    
    
    
    <!--  Event codes starts here-->
  
     
          <div class="box box-info">

            <div class="box-body">
      <div class="alert alert-info" align="center" class="style2" style="color: #FF0000">SACCO INFORMATION DASHBOARD</div>
             
         <div></div>                
      </div>

       
</div>  
</div>
