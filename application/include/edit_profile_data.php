<div class="box">
        
	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i>&nbsp;Update Profile Status</h3>
            </div>
             <div class="box-body">
              <?php
if(isset($_POST['submit']))
{
$id = $_GET['id'];
$fname =  mysqli_real_escape_string($link, $_POST['fname']);
$lname =  mysqli_real_escape_string($link, $_POST['lname']);
$account = mysqli_real_escape_string($link, $_POST['account']);
$email =  mysqli_real_escape_string($link, $_POST['email']);
$phone =  mysqli_real_escape_string($link, $_POST['phone']);
$addrs =  mysqli_real_escape_string($link, $_POST['addrs']);
$keen =  mysqli_real_escape_string($link, $_POST['keen']);
$village =  mysqli_real_escape_string($link, $_POST['village']);
$district =  mysqli_real_escape_string($link, $_POST['district']);
$comment =  mysqli_real_escape_string($link, $_POST['comment']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$encrypt = base64_encode($password);

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
if($image == '')
{
  $update = mysqli_query($link,"UPDATE user SET email='$email', phone='$phone', addrs='$addrs', keen='$keen', village='$village', district='$district', comment='$comment',username='$username',password='$encrypt' WHERE fname='$fname' && lname='$lname' && account = '$account' ")or die(mysqli_error()); 
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

    $update = mysqli_query($link,"UPDATE user SET email='$email',phone='$phone',addrs='$addrs',keen='$keen',village='$village',district='$district',comment='$comment', image='$location' WHERE fname='$fname' && lname='$lname' && account = '$account',username='$username',password='$encrypt' ")or die(mysqli_error()); 
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
 }
?>


<?php
$id = $_GET['id'];

$select = mysqli_query($link, "SELECT * FROM user WHERE id = '$id'") or die (mysqli_error($link));
while($rows = mysqli_fetch_array($select))
{
  
?>       
               
       <form class="form-horizontal" method="post" enctype="multipart/form-data">

     <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
           
                <div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Your Image</label>
      <div class="col-sm-10">
               <input type='file' name="image" onChange="readURL(this);" >
               <img id="blah"  src="../<?php echo $rows['image']; ?>" alt="Image Here" height="100" width="100"/>
      </div>
      </div>
      
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $rows['fname']; ?>" readonly="readonly">
                  </div>
                  </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" value="<?php echo $rows['lname']; ?>" required readonly="readonly">
                  </div>
                  </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Account</label>
                  <div class="col-sm-10">
                  <input name="account" type="text" class="form-control"  value="<?php echo $rows['account']; ?>" readonly="readonly">
                  </div>
                  </div>
    
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $rows['email']; ?>" >
                  </div>
                  </div>
          
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php echo $rows['phone']; ?>" >
                  </div>
                  </div>
          
          
     <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Address </label>
                    <div class="col-sm-10"><textarea name="addrs"  class="form-control" rows="3" cols="80" ><?php echo $rows['addrs']; ?></textarea></div>
          </div>
          
      <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Next of Keen Details</label>
                    <div class="col-sm-10" ><textarea name="keen"  class="form-control" rows="3" cols="80" ><?php echo $rows['keen']; ?></textarea></div>
            </div>
      
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Village</label>
                  <div class="col-sm-10">
                  <input name="village" type="text" class="form-control" value="<?php echo $rows['village']; ?>" >
                  </div>
                  </div>
          
              
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  <div class="col-sm-10">
                   <input name="district" type="text" class="form-control" value="<?php echo $rows['district']; ?>" >         
                   </div>
                           </div>
                   
                   
        <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                    <div class="col-sm-10" ><textarea name="comment"  class="form-control" rows="3" cols="80" ><?php echo $rows['comment']; ?></textarea></div>
            </div>


<hr>  
<div class="alert-danger">&nbsp;MEMBER LOGIN INFORMATION</div>
<hr>  
          
           <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Username</label>
                  <div class="col-sm-10">
                  <input name="username" type="text" class="form-control" value="<?php echo $rows['username']; ?>" required>
                  </div>
                  </div>
          
           <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Password</label>
                  <div class="col-sm-10">
                  <input name="password" type="text" class="form-control" value="<?php echo base64_decode($rows['password']); ?>" required>
                  </div>
                  </div>
          
                              
                   <div align="right">
              <div class="box-footer">
                        <button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                        <button name="submit" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Update</i></button>

              </div>
        </div>
        
       </form> 
<?php } ?>


</div>	
</div>
</div>
</div>