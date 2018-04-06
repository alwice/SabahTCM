<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
</head>
<body>
<?php 
	include("db_conn.php");

	$herb_id=$_POST['herb_id'];
	$info_id=$_POST['info_id'];
	$herb_name=$_POST['herb_name'];
	$other_name=$_POST['other_name'];
	$sci_name=$_POST['sci_name'];
	$family=$_POST['family'];
	$part=$_POST['part'];
	$function=$_POST['function'];
	$disease=$_POST['disease'];

	$mode = $_POST['mode'];
	$add_id = isset($_GET['add_id']) ? $_GET['add_id'] : NULL ;	
	$m = isset($_POST['m']) ? $_POST['m'] : 0 ;
	// Upload Picture Algo start
	$target = "../../../pics/";
	$target = $target . basename( $_FILES['image']['name']);
	//This gets all the other information from the form
	$image=basename( $_FILES['image']['name']);
	//Writes the image to the server
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	    //Tells you if its all ok
	    echo "The file ". basename( $_FILES['image']['name']). " has been uploaded, and your information has been added to the directory.";	
		// Upload Picture Algo End			
			
	} 
	else{
	    //Gives and error if its not
	    echo "Sorry, there was a problem uploading your file.";
	} 

	if($mode==1){
		if($m==3){/*update*/
			$sql="UPDATE herb_info_cn SET local_name='$herb_name',  usage_part='$part', function='$function', disease='$disease' WHERE info_id='$info_id'";
			mysqli_query($conn,$sql)or die(mysqli_error($conn));
		
			$sql3="UPDATE herb_list_cn SET local_name='$herb_name', other_name='$other_name', scientific_name='$sci_name', family='$family' WHERE herb_id='$herb_id'";
			mysqli_query($conn,$sql3)or die(mysqli_error($conn));
			
			if($image!=NULL){
				$sql2="UPDATE herb_list_cn SET image='$image' WHERE local_name='$herb_name'";
				mysqli_query($conn,$sql2)or die(mysqli_error($conn));
			}
			echo "<script>alert('草药资料更新成功。'); location.href='herbs.php' </script>";
		}/*end update m=3*/

		else if($m==2){/*add herb's data*/
			$sql="INSERT INTO herb_info_cn (herb_id, local_name, usage_part, function, disease)
				VALUES('$add_id', '$herb_name', '$part', '$function', '$disease')";
			mysqli_query($conn,$sql)or die(mysqli_error($conn));
			echo "<script>alert('草药资料储存成功。'); location.href='herbs.php' </script>";
		}/*end add herb's data m=2*/
	}
	else{/*insert new mode*/
		//Writes the information to the database
		$sql2="INSERT INTO herb_list_cn (local_name, other_name, scientific_name, family, image)
			VALUES('$herb_name', '$other_name', '$sci_name', '$family', '$image')";
		mysqli_query($conn,$sql2)or die(mysqli_error($conn));
		$lastID = mysqli_insert_id($conn);
		/*get the primarykey*/
		
		$sql="INSERT INTO herb_info_cn (herb_id, local_name, usage_part, function, disease)
			VALUES('$lastID', '$herb_name', '$part', '$function', '$disease')";
		mysqli_query($conn,$sql)or die(mysqli_error($conn));
		echo "<script>alert('草药资料储存成功。'); location.href='herbs.php' </script>";
	}/*end insert mode*/
?>	
</body>