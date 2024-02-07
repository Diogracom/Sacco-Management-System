<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>    
    <?php if ($pcreate == 1) { ?>

<div class="box">
        
		 <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> View Member</h3>
            </div>
             <div class="box-body">

<?php
$id = $_GET['id'];

$select = mysqli_query($link, "SELECT * FROM user WHERE userid = '$id'") or die (mysqli_error($link));
while($rows = mysqli_fetch_array($select))
{
	
?>			 
               
			 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_memb.php?id=<?php echo $id; ?>" >
			 <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
				
                <div class="form-group">
            <label for="" class="col-sm-2 control-label">Your Image</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);" >
       				 <img id="blah"  src="../<?php echo $rows['image']; ?>" alt="Image Here" height="100" width="100"/>
			</div>
			</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $rows['fname']; ?>" required >
                  </div>
                  </div>
				  
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Last Name</label>
                  <div class="col-sm-10">
                  <input name="lname" type="text" class="form-control" value="<?php echo $rows['lname']; ?>" required >
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
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $rows['email']; ?>">
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
                  	<div class="col-sm-10"><textarea name="addrs"  class="form-control" rows="3" cols="80"><?php echo $rows['addrs']; ?></textarea></div>
          </div>
					
			<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Next of Keen Details</label>
                  	<div class="col-sm-10"><textarea name="keen"  class="form-control" rows="3" cols="80"><?php echo $rows['keen']; ?></textarea></div>
          	</div>
			
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Village</label>
                  <div class="col-sm-10">
                  <input name="village" type="text" class="form-control" value="<?php echo $rows['village']; ?>" required >
                  </div>
                  </div>
				  
						  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  <div class="col-sm-10">
				           <input name="district" type="text" class="form-control" value="<?php echo $rows['district']; ?>" required >         
									 </div>
                 					 </div>
									 
									 
				<div class="form-group">
                  	<label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                  	<div class="col-sm-10"><textarea name="comment"  class="form-control" rows="3" cols="80"><?php echo $rows['comment']; ?></textarea></div>
          	</div>

                <div align="right">
              <div class="box-footer">
                        <button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                        <button name="memb" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;Update</i></button>

              </div>
        </div>
			  
			 </form> 
<?php } ?>
</div>
</div>
</div>

<?php } else { ?>

<div class="box">
        
     <div class="box-body">
      <div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> My Profile</h3>
            </div>
             <div class="box-body">


<?php
if(isset($_POST['submit']))
{
$fname = mysqli_real_escape_string($link, $_POST['fname']);
$lname = mysqli_real_escape_string($link, $_POST['lname']);
$username =  mysqli_real_escape_string($link, $_POST['username']);
$password =  mysqli_real_escape_string($link, $_POST['password']);
$encrypt = base64_encode($password);



  $update = mysqli_query($link,"UPDATE user SET username='$username',password='$encrypt' WHERE  fname='$fname' AND lname='$lname'")or die(mysqli_error()); 
  if(!$update)
  {
  echo '<hr>';
  echo"<div class='alert alert-danger'>Unable to update Profile....!!!!!!</div>";
  echo '<hr>';

  }
  else{
  echo '<hr>';
  echo"<div class='alert alert-success'>Member Profile Updated.........!!!!!!</div>";
  echo '<hr>';
}
}
?>

<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM user WHERE userid = '$id'") or die (mysqli_error($link));
while($rows = mysqli_fetch_array($select))
{
  
?>       
               
       <form class="form-horizontal" method="post" enctype="multipart/form-data">
       <?php echo '<div class="alert alert-info fade in" >
        <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
          <strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
        </div>'?>
        
                <div class="form-group">
            <label for="" class="col-sm-2 control-label">Your Image</label>
      <div class="col-sm-10">
              <img id="blah"  src="../<?php echo $rows['image']; ?>" alt="Image Here" height="100" width="100"/>
      </div>
      </div>
      
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">First Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $rows['fname']; ?>" required readonly="readonly">
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
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $rows['email']; ?>" required >
                  </div>
                  </div>
          
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Mobile Number</label>
                  <div class="col-sm-10">
                  <input name="phone" type="text" class="form-control" value="<?php echo $rows['phone']; ?>" required >
                  </div>
                  </div>
          
          
     <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Address </label>
                    <div class="col-sm-10" "><textarea name="addrs"  class="form-control" rows="3" cols="80" ><?php echo $rows['addrs']; ?></textarea></div>
          </div>
          
      <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Next of Keen Details</label>
                    <div class="col-sm-10"><textarea name="keen"  class="form-control" rows="4" cols="80" ><?php echo $rows['keen']; ?></textarea></div>
            </div>
      
      
      <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Village</label>
                  <div class="col-sm-10">
                  <input name="village" type="text" class="form-control" value="<?php echo $rows['village']; ?>" required >
                  </div>
                  </div>
          
              
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">District</label>
                  <div class="col-sm-10">
                   <input name="district" type="text" class="form-control" value="<?php echo $rows['district']; ?>" required >         
                   </div>
                           </div>
                   
                   
        <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Comment</label>
                    <div class="col-sm-10" readonly="readonly"><textarea name="comment"  class="form-control" rows="3" cols="80" ><?php echo $rows['comment']; ?></textarea></div>
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
<?php } }?>
</div>
