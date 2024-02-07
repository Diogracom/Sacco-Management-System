<?php include "../config/session.php"; ?>  

<!DOCTYPE html>
<html>
<head>

<style>
.loader {
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 10px solid blue;
  border-right: 10px thin;
  border-bottom: 10px thin;
  border-left: 10px thin;
  width: 100px;
  height: 100px;
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
$id = $_GET['id'];
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname =  mysqli_real_escape_string($link, $_POST['lname']);
$email =  mysqli_real_escape_string($link, $_POST['email']);
$phone =  mysqli_real_escape_string($link, $_POST['phone']);
$addrs =  mysqli_real_escape_string($link, $_POST['addrs']);
$keen =  mysqli_real_escape_string($link, $_POST['keen']);
$village =  mysqli_real_escape_string($link, $_POST['village']);
$district =  mysqli_real_escape_string($link, $_POST['district']);
$comment =  mysqli_real_escape_string($link, $_POST['comment']);
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
if($image == '')
{
	$update = mysqli_query($link,"UPDATE user SET fname='$fname', lname='$lname', email='$email', phone='$phone', addrs='$addrs', keen='$keen', village='$village', district='$district', comment='$comment' WHERE userid ='$id'")or die(mysqli_error()); 
	if(!$update)
	{
	echo '<meta http-equiv="refresh" content="2;url=listmembers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Unable to update member records!</span>';
	}
	else{
	echo '<meta http-equiv="refresh" content="2;url=listmembers.php?id='.$id.'&&mid='.base64_encode("409").'">';
	echo '<br>';
	echo'<span class="itext" style="color: #FF0000">Updating Member.....Please Wait!</span>';
	}	
}
else{
	$target_dir = "../mimg/";
	$target_file = $target_dir.basename($_FILES["image"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$check = getimagesize($_FILES["image"]["tmp_name"]);
	
	if($check == false)
	{
		echo '<meta http-equiv="refresh" content="2;url=listmembers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
		echo '<br>';
		echo'<span class="itext" style="color: #FF0000">Invalid file type</span>';
	}
	
	elseif($_FILES["image"]["size"] > 500000)
	{
		echo '<meta http-equiv="refresh" content="2;url=listmembers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
		echo '<br>';
		echo'<span class="itext" style="color: #FF0000">Image must not more than 500KB!</span>';
	}
	elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
	{
		echo '<meta http-equiv="refresh" content="2;url=listmembers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
		echo '<br>';
		echo'<span class="itext" style="color: #FF0000">Sorry, only JPG, JPEG, PNG & GIF Files are allowed.</span>';
	}
	else{
		$sourcepath = $_FILES["image"]["tmp_name"];
		$targetpath = "../mimg/" . $_FILES["image"]["name"];
		move_uploaded_file($sourcepath,$targetpath);

		$location = "mimg/".$_FILES['image']['name'];

		$update = mysqli_query($link,"UPDATE user SET fname='$fname', lname='$lname', email='$email',phone='$phone',addrs='$addrs',keen='$keen',village='$village',district='$district',comment='$comment', image='$location' WHERE userid ='$id'")or die(mysqli_error()); 
		if(!$update)
		{
			echo '<meta http-equiv="refresh" content="2;url=listmembers.php?tid='.$id.'&&mid='.base64_encode("409").'">';
			echo '<br>';
			echo'<span class="itext" style="color: #FF0000">Unable to update member records!</span>';
		}
		else{
			echo '<meta http-equiv="refresh" content="2;url=listmembers.php?id='.$id.'&&mid='.base64_encode("409").'">';
			echo '<br>';
			echo'<span class="itext" style="color: #FF0000">Updating Member.....Please Wait!</span>';
		}
	}
}
?>
</div>
</body>
</html>