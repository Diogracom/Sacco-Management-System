<div class="row">
    
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>&&mid=<?php echo base64_encode("401"); ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	<hr>	

<form class="form-horizontal" method="post" enctype="multipart/form-data">
			  <?php echo '<div class="alert alert-info fade in" >
			  <a href = "#" class = "close" data-dismiss= "alert"> &times;</a>
  				<strong>Add Module Permission</strong> | <label style="color: red;">Here you declare which module you want the user to get access to in their respective account.</label></div>'?>	
<div class="box-body">

			<div class="form-group">
				<label for="" class="col-sm-2 control-label" style="color:#009900">User Name:</label>
                <div class="col-sm-10">
                <select name="tide"  class="form-control select2" required>
					<?php
					$search_user = mysqli_query($link, "SELECT * FROM user WHERE id != '".$_SESSION['tid']."'") or die ("Error: " . mysqli_error($link));
					while($get_users = mysqli_fetch_array($search_user))
					{
					?>		
					<option value="<?php echo $get_users['id']; ?>"><?php echo $get_users['fname'].' '.$get_users['lname']; ?></option>
					<?php } ?>
					
				</select>
                </div>			
            </div>
			<div class="form-group">
			<hr><hr>
			<div>
			
			 <table class="table" border="0.95">
			 <thead>
                <tr>
                  <th>S/No.</th>
                  <th>Module Name</th>
				  <th><div align="center">Create</div></th>
                  <th><div align="center">Read</div></th>
				  <th><div align="center">Update</div></th>
                  <th><div align="center">Delete</div></th>
                 </tr>
                </thead>
             <tbody>
               
				<tr>
				   <td width="30">1</td>
                   <td width="450">Members <input type="hidden" name="members" value="Members"/></td>
				   <td><div align="center"><input name="member_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="member_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="member_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="member_delete" type="checkbox" value="On"></div></td>
                </tr>
				<tr>
				   <td width="30">2</td>
                   <td width="450">Account Status <input type="hidden" name="account" value="Account Status"/></td>
				   <td><div align="center"><input name="account_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="account_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="account_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="account_delete" type="checkbox" value="On"></div></td>
                </tr>
				<tr>
				   <td width="30">3</td>
                   <td width="450">Transactions <input type="hidden" name="transact" value="Transactions"/></td>
				   <td><div align="center"><input name="transact_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="transact_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="transact_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="transact_delete" type="checkbox" value="On"></div></td>
                </tr>
				
				
				<tr>
				   <td width="30">4</td>
                   <td width="450">Payment <input type="hidden" name="payment" value="Payment"/></td>
				   <td><div align="center"><input name="payment_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="payment_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="payment_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="payment_delete" type="checkbox" value="On"></div></td>
                </tr>
				
				<tr>
				   <td width="30">5</td>
                   <td width="450">Module Permission <input type="hidden" name="permission_m" value="Module Permission"/></td>
				   <td><div align="center"><input name="permission_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="permission_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="permission_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="permission_delete" type="checkbox" value="On"></div></td>
                </tr>
				<tr>
				   <td width="30">6</td>
                   <td width="450">Shares <input type="hidden" name="shares" value="Shares"/></td>
				   <td><div align="center"><input name="shares_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="shares_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="shares_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="shares_delete" type="checkbox" value="On"></div></td>
                </tr>
                <tr>
				   <td width="30">6</td>
                   <td width="450">Loan Interest Ratio <input type="hidden" name="ratio" value="Loan Interest Ratio"/></td>
				   <td><div align="center"><input name="ratio_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="ratio_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="ratio_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="ratio_delete" type="checkbox" value="On"></div></td>
                </tr>
				<tr>
				   <td width="30">7</td>
                   <td width="450">General Settings <input type="hidden" name="general_t" value="General Settings"/></td>
				   <td><div align="center"><input name="general_create" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="general_read" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="general_update" type="checkbox" value="On"></div></td>
				   <td><div align="center"><input name="general_delete" type="checkbox" value="On"></div></td>
                </tr>
               
			 </tbody>
             </table> 
	

		<div align="right">
            <div class="box-footer">
				<button type="submit" class="btn btn-info btn-flat" name="save"><i class="fa fa-save">&nbsp;Save Module</i></button>
			</div>
		</div>

<?php
if(isset($_POST['save']))
{
//$id = $_POST['selector'];
$tide = mysqli_real_escape_string($link, $_POST['tide']);

$verify = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '$tide'") or die ("Error: " . mysqli_error($link));
$get_verify = mysqli_num_rows($verify);
if($get_verify == 8)
{
	echo "<script>alert('Error: Permission Already granted. Please visit permission list to see!!'); </script>";
}
else{

//Starting of first module
$module1 = mysqli_real_escape_string($link, $_POST['members']);
$pcreate1 = (isset($_POST['members_create'])) ? 1 : 0;
$pread1 = (isset($_POST['members_read'])) ? 1 : 0;
$pupdate1 = (isset($_POST['members_update'])) ? 1 : 0;
$pdelete1 = (isset($_POST['members_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module1','$pcreate1','$pread1','$pupdate1','$pdelete1')") or die ("Error: " . mysqli_error($link));
//End of first module

//Starting of second module
$module2 = mysqli_real_escape_string($link, $_POST['account']);
$pcreate2 = (isset($_POST['account_create'])) ? 1 : 0;
$pread2 = (isset($_POST['account_read'])) ? 1 : 0;
$pupdate2 = (isset($_POST['account_update'])) ? 1 : 0;
$pdelete2 = (isset($_POST['account_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module2','$pcreate2','$pread2','$pupdate2','$pdelete2')") or die ("Error: " . mysqli_error($link));
//End of second module

//Starting of third module
$module3 = mysqli_real_escape_string($link, $_POST['transact']);
$pcreate3 = (isset($_POST['transact_create'])) ? 1 : 0;
$pread3 = (isset($_POST['transact_read'])) ? 1 : 0;
$pupdate3 = (isset($_POST['transact_update'])) ? 1 : 0;
$pdelete3 = (isset($_POST['transact_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module3','$pcreate3','$pread3','$pupdate3','$pdelete3')") or die ("Error: " . mysqli_error($link));
//End of third module

//Starting of fourth module
$module4 = mysqli_real_escape_string($link, $_POST['payment']);
$pcreate4 = (isset($_POST['payment_create'])) ? 1 : 0;
$pread4 = (isset($_POST['payment_read'])) ? 1 : 0;
$pupdate4 = (isset($_POST['payment_update'])) ? 1 : 0;
$pdelete4 = (isset($_POST['payment_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module4','$pcreate4','$pread4','$pupdate4','$pdelete4')") or die ("Error: " . mysqli_error($link));
//End of fourth module

//Starting of fifth module
$module5 = mysqli_real_escape_string($link, $_POST['permission_m']);
$pcreate5 = (isset($_POST['permission_create'])) ? 1 : 0;
$pread5 = (isset($_POST['permission_read'])) ? 1 : 0;
$pupdate5 = (isset($_POST['permission_update'])) ? 1 : 0;
$pdelete5 = (isset($_POST['permission_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module5','$pcreate5','$pread5','$pupdate5','$pdelete5')") or die ("Error: " . mysqli_error($link));
//End of fifth module

//Starting of sixth module
$module6 = mysqli_real_escape_string($link, $_POST['shares']);
$pcreate6 = (isset($_POST['shares_create'])) ? 1 : 0;
$pread6 = (isset($_POST['shares_read'])) ? 1 : 0;
$pupdate6 = (isset($_POST['shares_update'])) ? 1 : 0;
$pdelete6 = (isset($_POST['shares_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module6','$pcreate6','$pread6','$pupdate6','$pdelete6')") or die ("Error: " . mysqli_error($link));
//End of sixth module

//Starting of seventh module
$module6 = mysqli_real_escape_string($link, $_POST['ratio']);
$pcreate6 = (isset($_POST['ratio_create'])) ? 1 : 0;
$pread6 = (isset($_POST['ratio_read'])) ? 1 : 0;
$pupdate6 = (isset($_POST['ratio_update'])) ? 1 : 0;
$pdelete6 = (isset($_POST['ratio_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module6','$pcreate6','$pread6','$pupdate6','$pdelete6')") or die ("Error: " . mysqli_error($link));
//End of seventh module

//Starting of eigth module
$module7 = mysqli_real_escape_string($link, $_POST['general_t']);
$pcreate7 = (isset($_POST['general_create'])) ? 1 : 0;
$pread7 = (isset($_POST['general_read'])) ? 1 : 0;
$pupdate7 = (isset($_POST['general_update'])) ? 1 : 0;
$pdelete7 = (isset($_POST['general_delete'])) ? 1 : 0;

$insert1 = mysqli_query($link, "INSERT INTO emp_permission VALUES('','$tide','$module7','$pcreate7','$pread7','$pupdate7','$pdelete7')") or die ("Error: " . mysqli_error($link));
//End of eigth module


if(!$insert1)
{
echo "<script>alert('Record not inserted.....Please try again later!'); </script>";
}
else{
echo "<script>alert('Permission Added Successfully!!'); </script>";
echo "<script>window.location='permission_list.php?id=".$_SESSION['tid']."&&mid=".base64_encode("413")."'; </script>";
}
}
}
?>
</div>				
</form>
                </div>

				</div>	
				</div>
			
</div>	
					
       
</div>