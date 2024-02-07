<div class="box">	
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-gear"></i>&nbsp;Company Setup</h3>
            </div>
             <div class="box-body">

			 <?php 
			$call = mysqli_query($link, "SELECT * FROM systemset");
			while($row = mysqli_fetch_assoc($call))
			{
			?>
               
			 <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $row ['sysid']; ?>" name="sysid">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
				
			<div class="form-group">
            <label for="" class="col-sm-2 control-label" style="color:#009900">Company Logo</label>
			<div class="col-sm-10">
  		  			 <input type='file' name="image" onChange="readURL(this);">
       				 <img id="blah"  src="../img/<?php echo $row ['image']; ?>" alt="System Logo Here" height="100" width="100"/>
			</div>
			</div>
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Name</label>
                  <div class="col-sm-10">
                  <input name="fname" type="text" class="form-control" value="<?php echo $row ['name']; ?>" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Phone</label>
                  <div class="col-sm-10">
                  <input name="number" type="text" class="form-control" value="<?php echo $row ['mobile']; ?>" required>
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email" type="text" class="form-control" value="<?php echo $row ['email']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Title</label>
                  <div class="col-sm-10">
                  <input type="text" name="title" type="text" class="form-control" value="<?php echo $row ['title']; ?>">
                  </div>
                  </div>
				  
				  <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Footer</label>
                  <div class="col-sm-10">
                  <input type="text" name="footer" type="text" class="form-control" value="<?php echo $row ['footer']; ?>">
                  </div>
                  </div>
				  
				   <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Abbreviation</label>
                  <div class="col-sm-10">
                  <input type="text" name="abb" type="text" class="form-control" value="<?php echo $row ['abb']; ?>">
                  </div>
                  </div>
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Company Currency</label>
                  <div class="col-sm-10">
                  <input name="currency" type="text" class="form-control" value="<?php echo $row ['currency']; ?>"required>
                  </div>
                  </div>
				  
				  
		 
				  
		<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Website</label>
                  <div class="col-sm-10">
                  <input name="website" type="text" class="form-control" value="<?php echo $row ['website']; ?>">
                  </div>
                  </div>
		
				<div class="form-group">
						<label for="" class="col-sm-2 control-label" style="color:#009900">Upload Stamp</label>
						<div class="col-sm-10">
								 <input type='file' name="image2">
								 <img src="../image/<?php echo $row ['stamp']; ?>" alt="Bank Stamp Here" height="100" width="100"/>
						</div>
						</div>		  
						 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-upload">&nbsp;Update Now</i></button>

              </div>
			  </div>
			 <?php 
			 }
			 ?>
			 </form> 
			 <?php   
			  				if (isset($_POST['save'])){

										$id= $_POST['sysid'];
										$fname = $_POST['fname'];
										$number = $_POST['number'];
										$email = $_POST['email'];
										$title = $_POST['title'];
										$footer = $_POST['footer'];
										$abb = $_POST['abb'];
										$currency = $_POST['currency'];
										$website = $_POST['website'];
										$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
										$image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));										
										if($image == "" || $image2 == ""){

							            mysqli_query($link,"UPDATE systemset SET name='$fname',mobile='$number',email='$email',title='$title',footer='$footer',abb='$abb',currency='$currency',website='$website' WHERE sysid ='$id'")or die(mysqli_error()); 
											echo "<script>alert('System Configured Successfully!'); </script>";
											echo "<script>window.location='system_set.php?id=".$_SESSION['tid']."';</script>";
										
										}else{

											$target_dir = "../img/";
											$target_dir2 = "../image/";
											$target_file = $target_dir.basename($_FILES["image"]["name"]);
											$target_file2 = $target_dir2.basename($_FILES["image2"]["name"]);
											$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
											$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
											$check = getimagesize($_FILES["image"]["tmp_name"]);
											$check2 = getimagesize($_FILES["image2"]["tmp_name"]);
											if($check == false || $check2 == false)
											{
												echo "<p style='font-size:24px; color:#FF0000'>Invalid file type</p>";
											}
											elseif(file_exists($target_file) || file_exists($target_file2)) 
											{
												echo "<p style='font-size:24px; color:#FF0000'>Already exists.</p>";
											}
											elseif($_FILES["image"]["size"] > 500000 || $_FILES["image2"]["size"] > 500000)
											{
												echo "<p style='font-size:24px; color:#FF0000'>Image must not more than 500KB!</p>";
											}
											elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
											{
												echo "<p style='font-size:24px; color:#FF0000'>Sorry, only JPG, JPEG, PNG & GIF Files are allowed for the System Logo.</p>";
											}
											elseif($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif")
											{
												echo "<p style='font-size:24px; color:#FF0000'>Sorry, only JPG, JPEG, PNG & GIF Files are allowed for the Stamp.</p>";
											}
											else{
												$sourcepath = $_FILES["image"]["tmp_name"];
												$sourcepath2 = $_FILES["image2"]["tmp_name"];
												$targetpath = "../img/" . $_FILES["image"]["name"];
												$targetpath2 = "../image/" . $_FILES["image2"]["name"];
												move_uploaded_file($sourcepath,$targetpath);
												move_uploaded_file($sourcepath2,$targetpath2);
												
												$stamp = $_FILES["image2"]["name"];
																			
							                mysqli_query($link,"UPDATE systemset SET name='$fname',mobile='$number',email='$email',title='$title',footer='$footer',abb='$abb',currency='$currency',website='$website', image='$targetpath' , stamp='$stamp' WHERE sysid ='$id'")or die(mysqli_error()); 
											echo "<script>alert('System Configured Successfully!'); </script>";
											echo "<script>window.location='system_set.php?id=".$_SESSION['tid']."';</script>";
											}
										}
									}
								?>


</div>	
</div>
</div>	
</div>