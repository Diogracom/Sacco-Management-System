<div class="row">	
		
	 <section class="content">
     
		        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">

			 <div class="col-md-14">
             <div class="">
              <a href="listloans.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
                  &nbsp;&nbsp;  <b> Loan Information </b>
             <hr>
              
<?php
$id = $_GET['id'];
$select = mysqli_query($link, "SELECT * FROM loan_info WHERE id = '$id'") or die (mysqli_error($link));
while($row = mysqli_fetch_array($select))
 
{   
?> 
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="process_loan_info.php">
        
             <div class="box-body">
        
    <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Borrower</label>
         <div class="col-sm-10">
        
          <input name="borrower" type="text" class="form-control" value="<?php echo $row['borrower']; ?>" readonly>
        
              </div>
        </div>
                  
    <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount</label>
                  <div class="col-sm-10">
                  <input name="amount" type="text" class="form-control" value="<?php echo $row['amount']; ?>" readonly>
                  </div>
                  </div>
    
     <div class="form-group">
                    <label for="" class="col-sm-2 control-label" style="color:#009900">Description</label>
                    <div class="col-sm-10">
          <textarea name="description"  class="form-control" rows="4" cols="80" readonly><?php echo $row['description']; ?></textarea>
                 </div>
           </div>
    
     <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Date Release</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date_release" type="text" class="form-control pull-right" value="<?php echo $row['date_release']; ?>" readonly>
                </div>
              </div>
        </div>
        
     
<hr>  
<div class="alert-danger">&nbsp;GUARANTOR INFORMATION</div>
<hr>
          
     
       <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">1<sup>st</sup>&nbsp; Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="g_name1" type="text" class="form-control" value="<?php echo $row['g_name1']; ?>" readonly>
                  </div>
                  </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">2<sup>nd</sup>&nbsp; Guarantor's Name</label>
                  <div class="col-sm-10">
                  <input name="g_name2" type="text" class="form-control" value="<?php echo $row['g_name2']; ?>" readonly>
                  </div>
        </div>

               
<hr>  
<div class="alert-danger">&nbsp;PAYMENT INFORMATION</div>
<hr>  
          
                   
           <div class="form-group">
                <label for="" class="col-sm-2 control-label" style="color:#009900">Payment Date</label>
       <div class="col-sm-10">
              <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="maturity_date" type="text" class="form-control pull-right" value="<?php echo $row['maturity_date']; ?>" readonly>
                </div>
              </div>
        </div>
          
          <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="color:#009900">Amount to Pay</label>
                  <div class="col-sm-10">
                  <input name="amount_topay" type="number" class="form-control" value="<?php echo $row['amount_topay']; ?>" readonly>
                  </div>
                  </div>
                                
       </div>

       <div align="right">
              <div class="box-footer">
                       
                        <button name="delete_loan" type="submit" class="btn btn-danger btn-flat"><i class="fa fa-save">&nbsp;Delete Loan</i></button>

              </div>
        </div>
       
        </form>
<?php } ?>
            
          </div>
				 
					
					
				
				
				</div>
				

              </div>
			 

	
</div>	
</div>
</div>	
</div>	