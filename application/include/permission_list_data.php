<div class="row">
    
		    <section class="content">  
	        <div class="box box-success">
            <div class="box-body">
              <div class="table-responsive">
             <div class="box-body">
<form method="post">
			 <a href="dashboard.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-warning"><i class="fa fa-mail-reply-all"></i>&nbsp;Back</button> </a> 
	 <button type="submit" class="btn btn-flat btn-danger" name="delete"><i class="fa fa-times"></i>&nbsp;Delete</button>
	<a href="add_permission.php?id=<?php echo $_SESSION['tid']; ?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-cogs"></i>&nbsp;Add Permission</button></a>
	
	<hr>		
			  
			 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><input type="checkbox" id="select_all"/></th>
                  <th>User Name</th>
                  <th>Actions</th>
                 </tr>
                </thead>
                <tbody>
<?php
$select = mysqli_query($link, "SELECT DISTINCT(tid) FROM emp_permission") or die (mysqli_error($link));
if(mysqli_num_rows($select)==0)
{
echo "<div class='alert alert-info'>No data found yet!.....Check back later!!</div>";
}
else{
while($row = mysqli_fetch_array($select))
{
$tid = $row['tid'];
$getin = mysqli_query($link, "SELECT * FROM user WHERE id = '$tid'") or die (mysqli_error($link));
$have = mysqli_fetch_array($getin);
$fname = $have['fname'];
$lname = $have['lname'];

?>    
                <tr>
                <td><input id="optionsCheckbox" class="checkbox" name="selector[]" type="checkbox" value="<?php echo $tid; ?>"></td>
				<td><?php echo $fname.' '.$lname; ?></td>
                <td>
				<a rel="tooltip" title="View" href="view_perm.php?id=<?php echo $tid;?>"><button type="button" class="btn btn-flat btn-success"><i class="fa fa-eye"></i></button></a>
				<a rel="tooltip" title="Update" href="edit_perm.php?id=<?php echo $tid;?>"><button type="button" class="btn btn-flat btn-info"><i class="fa fa-edit"></i></button></a>
				
				</td>		    
			    </tr>
<?php } } ?>
             </tbody>
                </table>  
			
<?php
						if(isset($_POST['delete'])){
						$idm = $_GET['id'];
							$id=$_POST['selector'];
							$N = count($id);
						if($id == ''){
						echo "<script>alert('Row Not Selected!!!'); </script>";	
						echo "<script>window.location='permission_list.php?id=".$_SESSION['tid']."'; </script>";
							}
							else{
							for($i=0; $i < $N; $i++)
							{
								$result = mysqli_query($link,"DELETE FROM emp_permission WHERE tid ='$id[$i]'");
								echo "<script>alert('Row Delete Successfully!!!'); </script>";
								echo "<script>window.location='permission_list.php?id=".$_SESSION['tid']."'; </script>";
							}
							}
							}
?>			
				
</form>
                </div>

				</div>	
				</div>
			
</div>	
			
					
       
</div>