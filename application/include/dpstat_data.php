<div class="box">
	       <div class="box-body">
			<div class="panel panel-success">
            <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> Member Loans</h3>
            </div>
             <div class="box-body">
            
			 <form class="form-horizontal" method="post" action="dpupdate.php" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Note that&nbsp;</strong> &nbsp;&nbsp;Some Fields are Rquired.
				</div>'?>
             <div class="box-body">
			
			<div class="form-group">
                 
			
			<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Member</label>
				 <div class="col-sm-10">
                <select name="account" class="customer select2" style="width: 100%;">
				<option selected="selected">--Select Member --</option>
				<?php
				$get = mysqli_query($link, "SELECT * FROM user order by id") or die (mysqli_error($link));
				while($rows = mysqli_fetch_array($get))
				{
				echo '<option value="'.$rows['id'].'">'.$rows['fname'].'&nbsp;'.$rows['lname'].'</option>';
				}
				?>
                </select>
              </div>
			  </div>
               <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">From </label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date1" type="date" class="form-control pull-right" id="datepicker2" required="">
                </div>
              </div>
			  </div>
			
			<div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">To</label>
			 <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date2" type="date" class="form-control pull-right" id="datepicker2" required="">
                </div>
              </div>
			  </div>

			 </div>
			 
			  <div align="right">
              <div class="box-footer">
                				
                				<button name="save" type="submit" class="btn btn-success btn-flat"><i class="fa fa-search">&nbsp;Search</i></button>

              </div>
			  </div>
              
             
			 </form> 


</div>	
</div>	
</div>
</div>