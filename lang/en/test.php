<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<title></title>
</head>
<body>


<?php
	require "db_conn.php";
	$herb_list_information=mysqli_query($conn,"SELECT * FROM test`")or die(mysqli_error($conn));
	echo "<table><th>Name</th><th>blob image</th><th>varbin image</th>";
	while($data1=mysqli_fetch_array($herb_list_information)){
		$varbin=$data1['varbin'];
		$bb=$data1['bb'];
		$name=$data1['name'];
	echo "<tr><td>".$name."</td><td>";
	header('Content-Type: image/x-bmp');
	echo '<img style="width:100px; height:auto" src="data:image/jpeg;base64,'.base64_encode($bb).'"/>';
	echo "</td><td>";
	echo '<img style="width:100px; height:auto" src="data:image/jpeg;base64,'.base64_encode($varbin).'"/>';
	echo "</td></tr>";
	}
	echo "</table>";

?>
<form enctype="multipart/form-data" action="" method="post">
	<input type="file" name="file" />
	<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){//count($_FILES)>0){
		$file_name= $_FILES['file']['name'];
		$file_temp= $_FILES['file']['tmp_name'];					
		if(is_uploaded_file($file_temp)){
			$img=addslashes(file_get_contents($file_temp));
			$img3=file_get_contents($file_temp);
			$img2='data:image/jpeg;base64,'.base64_encode($img3);
			$sql=mysqli_query($conn,"INSERT INTO test (varbin, bb, name) VALUES('$img2', '$img', '$file_name')")or die(mysqli_error($conn));
		}	
	}
?>