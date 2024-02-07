<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Member Shares</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" action="myshare.php" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			<div class="form-group">
                 
			
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Enter Account Number</label>
                  <div class="col-sm-10">
                <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Select Member--</option>
             <?php
				$getin = mysqli_query($link, "SELECT * FROM shares order by userid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['account'].'">'.$row['account'].' '.'('.$row['fname'].' '.$row['lname'].')'.'</option>';
				}
				?> 
                </select>
              </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save">&nbsp;View</i></button>

              </div>
			  </div>
              
             
			 </form> 


</div>	
</div>	
</div>
</div><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>