<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
		<?php 
			$id = $_SESSION['ln'];
			$call = mysqli_query($link, "SELECT * FROM user WHERE lname = '$id'");
			if(mysqli_num_rows($call) == 0)
			{
			echo "<script>alert('Data Not Found!'); </script>";
			}
			else
			{
			while($row = mysqli_fetch_assoc($call))
			{
			
			?>
          <img src="../<?php echo $row['image'];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $row ['username'] ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
		  <?php }}?>
        </div>
      </div>
      

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

		<li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> <span>Dashbord</span></a></li>

		
		
<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pupdate = $get_check['pupdate'];
?>	
<?php if ($pcreate == 1) { ?>	

		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-users"></i> <span>Members</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
 		<?php echo ($pcreate == 1) ? '<li class="active"><a href="newmember.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i> New Members</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ?'<li><a href="listmembers.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("403").'"><i class="fa fa-circle-o"></i>List Members</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?> 

<?php } else {  

  echo " "; 

}?>


<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Transactions'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>  
<?php if ($pcreate == 1) { ?>
    <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-dollar"></i> <span>Transactions</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>

    <?php echo ($pcreate == 1) ? '<li><a href="membership.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>Pay Membership</a></li>' : ''; ?>

        <?php echo ($pcreate == 1) ? '<li><a href="deposit.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>Savings/Shares</a></li>' : ''; ?>
       
        <?php echo ($pcreate == 1) ? '<li><a href="withdraw.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>Withdraws</a></li>' : ''; ?> 
        
        <?php echo ($pcreate == 1) ? '<li><a href="newloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("405").'"><i class="fa fa-circle-o"></i>New Loans</a></li>' : ''; ?>

        <?php echo ($pcreate == 1) ? '<li class="active"><a href="newpayments.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i>Pay Loan/Interest</a></li>' : ''; ?>
     
      <?php echo ($pcreate == 1) ? '<li><a href="bankinterest.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>More Income</a></li>' : ''; ?>

        <?php echo ($pcreate == 1) ? '<li><a href="transfer.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>Transfer Shares</a></li>' : ''; ?>
       
        <?php echo ($pcreate == 1) ? '<li><a href="expense.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-circle-o"></i>Expenses</a></li>' : ''; ?>
       
        <?php echo ($pcreate == 1) ? '<li><a href="docs/Email.docx"><i class="fa fa-circle-o"></i>Loan Form</a></li>' : ''; ?>
       
        <?php echo ($pcreate == 1) ?'<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>All Transaction</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>
    

<?php } else { ?>
       
       <?php echo ($pread == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-dollar"></i> <span>Transactions</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
               
       <?php echo ($pread == 1) ? '<li><a href="docs/Email.docx"><i class="fa fa-circle-o"></i>Loan Form</a></li>' : ''; ?>
        <?php echo ($pread == 1) ?'<li><a href="transaction.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-circle-o"></i>All Transaction</a></li>' : ''; ?>
        <?php echo ($pread == 1) ? '</ul></li>' : ''; ?>

  

<?php  } ?>

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>

    <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="mydpst.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Individual Status</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul>' : ''; ?>
    
	  <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>


<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
	?>
<?php if ($pcreate == 1) { ?>

    <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Account Status</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
    
	<?php echo ($pcreate == 1) ?'<li><a href="dpst.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Savings</span></a></li>' : ''; ?>
    
    <?php echo ($pcreate == 1) ?'<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Loan Status</span></a></li>' : ''; ?>

    <?php echo ($pcreate == 1) ?'<li><a href="listpayment.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-book"></i>List Payments</a></li>' : ''; ?>

    <?php echo ($pcreate == 1) ?'<li><a href="listshare.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span> Shares</span></a></li>' : ''; ?>
    
     <?php echo ($pcreate == 1) ? '<li><a href="interest.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("410").'"><i class="fa fa-book"></i>Interest</a></li>' : ''; ?>

     <?php echo ($pcreate == 1) ? '<li class="active"><a href="expstatus.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("408").'"><i class="fa fa-book"></i>Expenditure</a></li>' : ''; ?>
          

    <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>

<?php } else { ?>

    <?php echo ($pread == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-dollar"></i> <span>Account Status</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
    
	<?php echo ($pread == 1) ?'<li><a href="dpst.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>My Savings</span></a></li>' : ''; ?>
    
    <?php echo ($pread == 1) ?'<li><a href="listloans.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>My Loan Status</span></a></li>' : ''; ?>
    
    <?php echo ($pread == 1) ?'<li><a href="listshare.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>My Shares</span></a></li>' : ''; ?>
                   
    <?php echo ($pread == 1) ? '</ul></li>' : ''; ?>

 	

<?php  } ?>
	

<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Account Status'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>

    <?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Report</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
    
    <?php echo ($pcreate == 1) ?'<li><a href="dpstat.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Savings</span></a></li>' : ''; ?>
    
    <?php echo ($pcreate == 1) ?'<li><a href="lnstat.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Loans</span></a></li>' : ''; ?>

    <?php echo ($pcreate == 1) ?'<li><a href="wdstat.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Withdraw</span></a></li>' : ''; ?>
    
    <?php echo ($pcreate == 1) ?'<li><a href="shstat.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span>Shares</span></a></li>' : ''; ?>

    <?php echo ($pcreate == 1) ?'<li><a href="expstat.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("404").'"><i class="fa fa-book"></i> <span> Expenditure </span></a></li>' : ''; ?>
                 
    <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>    




	



<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Module Permission'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-cogs"></i> <span>Module Permission</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ?'<li><a href="permission_list.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Module Permission List</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="add_permission.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("413").'"><i class="fa fa-circle-o"></i>Add Permission</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>

	



<?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'General Settings'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
$pread = $get_check['pread'];
?>		
		<?php echo ($pcreate == 1) ? '<li class="treeview"><a href="#"><i class="fa fa-gear"></i> <span>General Settings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a><ul class="treeview-menu">' : ''; ?>
		<?php echo ($pcreate == 1) ? '<li><a href="system_set.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Company Setup</a></li>' : ''; ?>
		<?php echo ($pcreate == 1) ?'<li><a href="backupdatabase.php?id='.$_SESSION['tid'].'&&mid='.base64_encode("411").'"><i class="fa fa-circle-o"></i>Backup Database</a></li>' : ''; ?>
        <?php echo ($pcreate == 1) ? '</ul></li>' : ''; ?>

  <li>
          <a href="profile.php?id=<?php echo $_SESSION['tid']; ?>">
            <i class="fa fa-sign-out"></i> <span>Profile</span>
          </a>
        </li>
    


		<li>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
		

    </section>
    <!-- /.sidebar -->
  </aside>