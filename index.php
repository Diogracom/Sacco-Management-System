<?php 
 session_start();
include "config/connect.php";
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  
<?php 
$call = mysqli_query($link, "SELECT * FROM systemset");
if(mysqli_num_rows($call) == 0)
{
echo "<script>alert('Data Not Found!'); </script>";
}
else
{
while($row = mysqli_fetch_assoc($call)){
?>
<title><?php echo $row ['title']?></title>
<?php }}?>  

<?php 
$call = mysqli_query($link, "SELECT * FROM systemset");
if(mysqli_num_rows($call) == 0)
{
echo "<script>alert('Data Not Found!'); </script>";
}
else
{
while($row = mysqli_fetch_assoc($call)){
?>

<link href="img/<?php echo $row['image']; ?>" rel="icon" type="dist/img">
<?php }}?> 

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <?php 
$call = mysqli_query($link, "SELECT * FROM systemset");
if(mysqli_num_rows($call) == 0)
{
echo "<script>alert('Data Not Found!'); </script>";
}
else
{
while($row = mysqli_fetch_assoc($call)){
?>
   <a href="../index.html"> <img src="img/<?php echo $row ['image'] ;?>" class="img-circle" alt="User Image" width="70" height="70"></a>
   <a href="index.php"><h3 style="color: red;"><strong><?php echo $row ['name'];?></strong></h3></a>
   <?php }}?>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please sign in here</p>

    <form class="form"  method="post" enctype="multipart/form-data">
	
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username/Email Address" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="pass" type="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	  
	  	  
        <div align="right">
          <a href="forgetpassword.php"><button  type="button" class="btn btn-warning btn-flat"><i class="fa fa-mail-reply-all"></i>&nbsp;Forget Password&nbsp;?</button></a>
		  <button name="submit" type="submit" class="btn btn-success btn-flat"><i class="fa fa-send"></i>&nbsp;Sign In</button> 
        </div>
		
	
<?php
//include("emailfunc.php");						
if(isset($_POST['submit']))
{						
$username= mysqli_real_escape_string($link, $_POST['username']);
$pass= mysqli_real_escape_string($link, $_POST['pass']);
$encrypt = base64_encode($pass);
		
$query = mysqli_query($link, "SELECT * FROM user WHERE '$username' IN(email, username) AND password = '$encrypt'") or die(mysqli_error($link));
$row = mysqli_fetch_array($query);
$numberOfRows = mysqli_num_rows($query);																																					
if ($numberOfRows == 0) 
{
  echo '<hr>';
  echo '<div class="alert alert-danger">Invalid Username or Password</div>';
  echo '<hr>';
} 
else
{
//$sql = mysqli_query($link,"UPDATE user SET Signal='On' WHERE Email = '$email'") or die(mysqli_error($link));
echo '<hr>';
echo '<div class="alert alert-success">You have Successfully Login</div>';
$_SESSION['tid'] = $row['id'];
$_SESSION['tun'] = $row['username'];
$_SESSION['ln'] = $row['lname'];
echo "<script>window.location='loader.php';</script>";												
}							
}

?>
	  
	  
    </form>

    
    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
</html>
<!-- <?php 
//} 
?> -->
