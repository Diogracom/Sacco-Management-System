<?php include("include/header.php"); ?>
<div class="wrapper">

<?php include("include/top_bar.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php include("include/side_bar.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <?php
$check = mysqli_query($link, "SELECT * FROM emp_permission WHERE tid = '".$_SESSION['tid']."' AND module_name = 'Members'") or die ("Error" . mysqli_error($link));
$get_check = mysqli_fetch_array($check);
$pcreate = $get_check['pcreate'];
?>  
<?php if ($pcreate == 1) { ?> 

       <h1>
        List of Members
        <small>Control panel</small>
      </h1>

<?php } else { ?>
    
      <h1>
        My Profile
        <small>Control panel</small>
      </h1>

<?php  }?>
      
      <ol class="breadcrumb">
        <li><a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> <a href="listmember.php?id=<?php echo $_SESSION['tid']; ?>">Members</a></li>
        <li class="active">List</li>
      </ol>
    </section>
    <section class="content">
		<?php include("include/listmembers_data.php"); ?>
	</section>
</div>	

<?php include("include/footer.php"); ?>