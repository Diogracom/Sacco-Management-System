<?php include "../config/session.php"; ?>  

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
  margin:auto;
  
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
<div style="width:100%;text-align:center;vertical-align:bottom">
		<div class="loader"></div>
<?php
if(isset($_POST['save_loan']))
{
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname =  mysqli_real_escape_string($link, $_POST['lname']);
$account =  mysqli_real_escape_string($link, $_POST['account']);
$amount = mysqli_real_escape_string($link, $_POST['amount']);
$desc = mysqli_real_escape_string($link, $_POST['desc']);
$date_release = mysqli_real_escape_string($link, $_POST['date_release']);
$agent = mysqli_real_escape_string($link, $_POST['agent']);
$gname = mysqli_real_escape_string($link, $_POST['g_name']);
$gphone =  mysqli_real_escape_string($link, $_POST['g_phone']);
$gaddrs =  mysqli_real_escape_string($link, $_POST['g_addrs']);
$remarks =  mysqli_real_escape_string($link, $_POST['remarks']);
$maturity_date = mysqli_real_escape_string($link, $_POST['maturity_date']);
$amount_topay = mysqli_real_escape_string($link, $_POST['amount_topay']);
$loanid = rand(100,340000);

$sqli = mysqli_query($link, "SELECT * FROM loan_info WHERE loanId = '$loanid' AND  account ='$account'") or die(mysqli_error($link));
$numrows = mysqli_num_rows($sqli);                                                                          

if ($numrows == 0){

$sql = mysqli_query($link, "SELECT * FROM loan_info WHERE fname = '$fname' AND  lname ='$lname'") or die(mysqli_error($link));
$numberOfRows = mysqli_num_rows($sql);                                                                          
if ($numberOfRows == 0) 
{

              $query = mysqli_query($link, "SELECT * FROM user WHERE fname = '$fname' AND  lname ='$lname' AND account = '$account'") or die(mysqli_error($link));
              $numberOfRows = mysqli_num_rows($query);                                                                          
              if ($numberOfRows == 0) 
              {
                echo '<meta http-equiv="refresh" content="2;url=newloans.php?tid='.base64_encode("409").'">';
                echo '<hr>';
                echo '<div class="itext" style="color: #FF0000">Account Name and Number Do Not Match</div>';
                echo '<hr>';
              } 
              else
              {
                $row = mysqli_fetch_array($query);
                $ids = $row['id']; 
                $ph = $row['phone'];        

              
              $insert = mysqli_query($link, "INSERT INTO loan_info VALUES('','$ids','$loanid','$fname','$lname','$account','$desc','$amount','$date_release','$agent','$gname','$gphone','$gaddrs','$remarks','$maturity_date','$amount_topay','0','','0','0' )") or die (mysqli_error($link));

               
              if(!$insert)
              {
               echo '<meta http-equiv="refresh" content="2;url=newloan.php?tid='.$_SESSION['tid'].'">';
              echo '<br>';
              echo'<span class="itext" style="color: #FF0000">Unable to Save Loan Information.....Please try again later!</span>';
              }
              else{
              echo '<meta http-equiv="refresh" content="2;url=listloans.php?tid='.$_SESSION['tid'].'">';
              echo '<br>';
              echo'<span class="itext" style="color: #FF0000">Saving Loan Information......</span>';
              }
              }
              }
 
 else{

   $row = mysqli_fetch_array($sql);
   $amount_to_pay = $row['amount_to_pay'];
   $amount_paid = $row['amount_paid'];
   $bal = $amount_to_pay - $amount_paid;
   

   $mysql = mysqli_query($link, "SELECT  SUM(loan) FROM loan_info WHERE fname = '$fname' AND  lname ='$lname' AND amount_to_pay != amount_paid") or die(mysqli_error($link));
   $fetch = mysqli_fetch_array($mysql);
   $sum = $fetch['SUM(loan)'];


    $que = mysqli_query($link, "SELECT * FROM user WHERE fname = '$fname' AND  lname ='$lname' AND account = '$account'") or die(mysqli_error($link)); 
      $data = mysqli_fetch_array($que);
      $dpst = $data['balance'];
      $dpst1 = $dpst * 3;

    if($bal == 0)
    {
            
                       $query = mysqli_query($link, "SELECT * FROM user WHERE fname = '$fname' AND  lname ='$lname' AND account = '$account'") or die(mysqli_error($link));
                      $numberOfRows = mysqli_num_rows($query);                                                                          
                      if ($numberOfRows == 0) 
                      {
                        echo '<meta http-equiv="refresh" content="2;url=newloans.php?tid='.base64_encode("409").'">';
                        echo '<hr>';
                        echo '<div class="itext" style="color: #FF0000">Account Name and Number Do Not Match</div>';
                        echo '<hr>';
                      } 
                      else
                      {
                        $row = mysqli_fetch_array($query);
                        $ids = $row['id']; 
                           
                      $insert = mysqli_query($link, "INSERT INTO loan_info VALUES('','$ids','$loanid','$fname','$lname','$account','$desc','$amount','$date_release','$agent','$gname','$gphone','$gaddrs','$remarks','$maturity_date','$amount_topay','0','','0','0')") or die (mysqli_error($link));

                            if(!$insert)
                            {
                             echo '<meta http-equiv="refresh" content="2;url=newloan.php?tid='.$_SESSION['tid'].'">';
                            echo '<br>';
                            echo'<span class="itext" style="color: #FF0000">Unable to Save Loan Information.....Please try again later!</span>';
                            }
                            else{
                            echo '<meta http-equiv="refresh" content="2;url=listloans.php?tid='.$_SESSION['tid'].'">';
                            echo '<br>';
                            echo'<span class="itext" style="color: #FF0000">Saving Loan Information......</span>';
                            }
                            }
                            }



     elseif ($bal != 0 && $dpst1 > $sum)
     {

          $query = mysqli_query($link, "SELECT * FROM user WHERE fname = '$fname' AND  lname ='$lname' AND account = '$account'") or die(mysqli_error($link));
                      $numberOfRows = mysqli_num_rows($query);                                                                          
                      if ($numberOfRows == 0) 
                      {
                        echo '<meta http-equiv="refresh" content="2;url=newloans.php?tid='.base64_encode("409").'">';
                        echo '<hr>';
                        echo '<div class="itext" style="color: #FF0000">Account Name and Number Do Not Match</div>';
                        echo '<hr>';
                      } 
                      else
                      {
                        $row = mysqli_fetch_array($query);
                        $ids = $row['id']; 
                           
                      $insert = mysqli_query($link, "INSERT INTO loan_info VALUES('','$ids','$loanid','$fname','$lname','$account','$desc','$amount','$date_release','$agent','$gname','$gphone','$gaddrs','$remarks','$maturity_date','$amount_topay','0','','0','0')") or die (mysqli_error($link));

                            if(!$insert)
                            {
                             echo '<meta http-equiv="refresh" content="2;url=newloan.php?tid='.$_SESSION['tid'].'">';
                            echo '<br>';
                            echo'<span class="itext" style="color: #FF0000">Unable to Save Loan Information.....Please try again later!</span>';
                            }
                            else{
                            echo '<meta http-equiv="refresh" content="2;url=listloans.php?tid='.$_SESSION['tid'].'">';
                            echo '<br>';
                            echo'<span class="itext" style="color: #FF0000">Saving Loan Information......</span>';
                            }
                            }
                            }
     
     else{

          echo '<meta http-equiv="refresh" content="2;url=newloans.php?tid='.base64_encode("409").'">';
          echo '<hr>';
          echo '<div class="itext" style="color: #FF0000"> Please Pay the Previous Loan First !!!</div>';
          echo '<hr>';

    }
  } 
}
else {

  echo '<meta http-equiv="refresh" content="2;url=newloans.php?tid='.base64_encode("409").'">';
      echo '<hr>';
      echo '<div class="itext" style="color: #FF0000"> Loan Details Miss Match Please Process the Loan again.........!!!</div>';
      echo '<hr>';
} 
}
?>
