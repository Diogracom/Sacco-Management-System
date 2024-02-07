<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> New Member Registration</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
<?php
if(isset($_POST['save']))
{
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$phone = mysqli_real_escape_string($link, $_POST['phone']);
$addrs = mysqli_real_escape_string($link, $_POST['addrs']);
$keen = mysqli_real_escape_string($link, $_POST['keen']);
$village = mysqli_real_escape_string($link, $_POST['village']);
$district = mysqli_real_escape_string($link, $_POST['district']);
$comment = mysqli_real_escape_string($link, $_POST['comment']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$username =  mysqli_real_escape_string($link, $_POST['username']);
$password =  mysqli_real_escape_string($link, $_POST['password']);
$cpaswword =  mysqli_real_escape_string($link, $_POST['cpassword']);
$target_dir = "../mimg/";
$target_file = $target_dir.basename($_FILES["image"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$check = getimagesize($_FILES["image"]["tmp_name"]);

$encrypt = base64_encode($password);
$id = "Save"."=".rand(10000000,340000000);

  $calls = mysqli_query($link, "SELECT * FROM user WHERE username = '$username' || id = '$id' || account = '$account'");
  $numberOfRows =  mysqli_num_rows($calls);   

if ($numberOfRows == 0){
     
     if($password != $cpaswword)
{
echo "<script>alert('The 2 Password does not match!'); </script>";
}

elseif($check == false)
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?tid=&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Invalid file type</span>';
}
elseif(file_exists($target_file)) 
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Img Name Already exists.</span>';
}
elseif(file_exists($account)) 
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Account Number Already exists.</span>';
}
elseif(file_exists($id )) 
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Unique ID Already exists.</span>';
}
elseif(file_exists($username)) 
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Username Already exists.</span>';
}
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
{
	echo '<meta http-equiv="refresh" content="2;url=newmember.php?&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</span>';
}
else{
	$sourcepath = $_FILES["image"]["tmp_name"];
	$targetpath = "../mimg/" . $_FILES["image"]["name"];
	move_uploaded_file($sourcepath,$targetpath);
	
	$location = "mimg/".$_FILES['image']['name'];

$insert = mysqli_query($link, "INSERT INTO user VALUES('0','$fname','$lname','$email','$phone','$account','$addrs','$keen','$village','$district','$comment','$username','$encrypt','$id','$location','0.0',NOW())") or die (mysqli_error($link));

$member = mysqli_query($link, "INSERT INTO membership VALUES('0','$id','$fname','$lname','$account','')") or die (mysql_error($link));

if(!($insert & $member))
{
echo "<div class='alert alert-info'>Unable to Add Member Records.....Please try again later</div>";
}
else{
echo "<div class='alert alert-success'>Member Information Created Successfully!</div>";
}
}
}
     
else{
    echo "<div class='alert alert-danger'>Username Already Exists.....!!!</div>";
     }
}

?>			  				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Your Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" required="">
       				 <img id="blah"  src="../avtar/user2.png" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account Number</label>
                  <div class="col-sm-10">
<?php
$account = '1003'.rand(100000,1000000);
?>
                  <input name="account" type="text" class="form-control" value="<?php echo $account; ?>" placeholder="Account Number" readonly>
                  </div>
                  </div>
				  
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" placeholder="First Name" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" placeholder="Last Name" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" placeholder="Email">
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" placeholder="Mobile Number" required>
                  </div>
                  </div>
				  
				  
		 <div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Address </label>
                  	<div class="col-sm-10"><textarea name="addrs"  class="form-control" rows="4" cols="80"></textarea></div>
          </div>
					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Next of Keen Details</label>
                  	<div class="col-sm-10"><textarea name="keen"  class="form-control" rows="4" cols="80"></textarea></div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Village</label>
                  <div class="col-sm-10">
                  <input name="village" type="text" class="form-control" placeholder="Village"required >
                  </div>
                  </div>
				  
						  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  <div class="col-sm-10">
				<select name="district"  class="form-control" required>
										<option value="">Select a district&hellip;</option>
										<option>Bugiri</option>
										<option>Gulu</option>
										<option>Iganga</option>
										<option>Jinja</option>
										<option>Kampala</option>
										<option>Kayunga</option>
										<option>Kibaale</option>
										<option>Luweero</option>
										<option>Masaka</option>
										<option>Mbarara</option>
										<option>Mityana</option>
										<option>Mpigi</option>
										<option>Mubende</option>
										<option>Mukono</option>
										<option>Nakasongola</option>
										<option>Wakiso</option>
										</select>                 
									 </div>
                 					 </div>
									 
									 
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                  	<div class="col-sm-10"><textarea name="comment"  class="form-control" rows="4" cols="80"></textarea></div>
          	</div>


<hr>	
<div class="alert-danger">&nbsp;MEMBER LOGIN INFORMATION</div>
<hr>	
					
					 <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Username</label>
                  <div class="col-sm-10">
                  <input name="username" type="text" class="form-control" placeholder="Username" required>
                  </div>
                  </div>
				  
				   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Password</label>
                  <div class="col-sm-10">
                  <input name="password" type="text" class="form-control" placeholder="Password" required>
                  </div>
                  </div>
				  
				    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Confirm Password</label>
                  <div class="col-sm-10">
                  <input name="cpassword" type="text" class="form-control" placeholder="Confirm Password" required>
                  </div>
                  </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Save</i></button>

              </div>
			  </div>

			 </form> 


</div>	
</div>	
</div>
</div>