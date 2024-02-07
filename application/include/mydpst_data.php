<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Member Deposits</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" action="mysave.php" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			<div class="form-group">
                 
			<?php 
               

			 ?>
			<div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Enter Account Number</label>
                  <div class="col-sm-10">
                <select class="account select2" name="account" style="width: 100%;">
				<option selected="selected">--Select Member--</option>
             <?php
				$getin = mysqli_query($link, "SELECT * FROM transaction order by userid") or die (mysqli_error($link));
				while($row = mysqli_fetch_array($getin))
				{
				echo '<option value="'.$row['acctno'].'">'.$row['acctno'].' '.'('.$row['fn'].' '.$row['ln'].')'.'</option>';
				}
				?> 
                </select>
              </div>
                  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				<button type="reset" class="btn btn-primary btn-flat"><i class="fa fa-times">&nbsp;Reset</i></button>
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-eye">&nbsp;View</i></button>

              </div>
			  </div>
              
             
			 </form> 


</div>	
</div>	
</div>
</div>