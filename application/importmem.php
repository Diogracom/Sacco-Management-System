<?php
include '../config/connect.php';
if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];
		
		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           
	           $account = '1003'.rand(100000,1000000);
	           $id = rand(10000,34000);

	          //It wiil insert a row to our subject table from our csv file`
$sql = "INSERT into user (`userid`, `fname`, `lname`, `email`,`phone`, `account`, `addrs`,`keen`,`village`,`district`,`comment`,`username`,`password`,`id`,`image`,`balance`,`date`) 
	                 values('','$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$account','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$id','','$emapData[11]','$emapData[12]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($link, $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"import_members.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"import_members.php\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($link); 
				
		 	
			
		 }
	}	 
?>