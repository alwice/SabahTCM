<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<?php
		session_start();
		$_SESSION['pages']="add_herbs.php";
		$page_title="herbs";
		include("menu.php");
	?>
	<title>Add Herbs - SabahTCM</title>
</head>
<body>
	<?php
		if(isset($_GET['m']))/*m2,m3,m4*/{
			/*m3=ud, m4=-dt*/
			if(($_GET['m']==3)||($_GET['m']==4)){
				$info_id=$_GET['info_id'];
				/*get herb_info*/
				$herb_info_show=mysqli_query($conn,"SELECT * FROM herb_info WHERE info_id='$info_id'")or die(mysqli_error($conn));
				while($data=mysqli_fetch_array($herb_info_show)){
					$herb_id=$data['herb_id'];
					$part=$data['usage_part'];
					$function=$data['function'];
					$disease=$data['disease'];
				}
				/*get herb_list*/
				$herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list WHERE herb_id='$herb_id'")or die(mysqli_error($conn));
				while($data1=mysqli_fetch_array($herb_list_information)){
					$herb_name=$data1['local_name'];
					$other_name=$data1['other_name'];
					$sci_name=$data1['scientific_name'];
					$family=$data1['family'];
					$image=$data1['image'];
				}
			}/*end fetch herb_info&&herb_list if m3&&m4*/
			/*m2=+dt-*/
			else if($_GET['m']==2){
				$herb_id=$_GET['list_id'];
				/*get herb_list*/
				$herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list WHERE herb_id='$herb_id'")or die(mysqli_error($conn));
				while($data1=mysqli_fetch_array($herb_list_information)){
					$herb_name=$data1['local_name'];
					$other_name=$data1['other_name'];
					$sci_name=$data1['scientific_name'];
					$family=$data1['family'];
					$image=$data1['image'];
				}
			}/*end fetch herb_list if m2*/
			$mode=1;/*set mode=1*/
		}/*end ifset m2,m3,m4*/
	?>
	</br>

	<div id="body">
        <div style="background:lightblue" class="alert alert-info">Add Herb</div>
		</br>	 
		<div class="sidebar">	 
			<p><a href="herbs.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
		</div>
	
		<div id="home" style="width:600px">
			<div id="hd">Please fills the herb's information below</div>		
	
			<form class="form-inline" method="POST" action="add_herbs_save.php" enctype="multipart/form-data">
				<input type="hidden" name="mode" value="<?php echo $mode;?>">
				<input type="hidden" name="info_id" value="<?php echo $info_id;?>">		
				<input type="hidden" name="herb_id" value="<?php echo $herb_id;?>">
				<br><br>
						
				<!--Local Name-->
				<div class="form-group">
					<label style="padding-left: 80px">Local Name:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin Only One Local Name" class="form-control" value="<?php if(isset($herb_name)) echo $herb_name;?>" name="herb_name" placeholder="Herbs' Local Name" required>
				</div>
				<br><br>
				<!--Other Name-->
				<div class="form-group">
					<label style="padding-left: 76px">Other Name:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin The Other Names" class="form-control" value="<?php if(isset($other_name)) echo $other_name;?>" name="other_name" placeholder="Herbs' Other Name" />
				</div>
				<br><br>
				<!--Scientific Name-->
				<div class="form-group">
					<label style="padding-left: 46px">Scientific Name:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin the Scientific Name" class="form-control" value="<?php if(isset($sci_name)) echo $sci_name;?>" name="sci_name" placeholder="Herbs' Scientific Name" required>
				</div>
				<br><br>
				<!--Family-->
				<div class="form-group">
					<label style="padding-left: 122px">Family:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin the Family" class="form-control" value="<?php if(isset($family)) echo $family;?>" name="family" placeholder="Herbs's Family" required>
				</div>
				<br><br>
				<!--Usage Part-->
				<div class="form-group">
					<label style="padding-left: 64px">Part of Usage:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin Only One Part of Usage" class="form-control" value="<?php if(isset($part)) echo $part;?>" name="part" placeholder="Herb's Usage Part" required>
				</div>
				<br><br>
				<!--Function-->
				<div class="form-group">
					<label style="padding-left: 20px">Expertise Function:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin Only One Expertise Function" class="form-control" value="<?php if(isset($function)) echo $function;?>" name="function" placeholder="Herb's Function" required>
				</div>
				<br><br>
				<!--Disease-->
				<div class="form-group">
					<label style="padding-left: 112px">Disease:</label>
					<input style="width:350px" type="text" data-toggle="tooltip" data-placement="right" title="Fillin Only One Type of Disease" class="form-control" name="disease" value="<?php if(isset($disease)) echo $disease;?>" placeholder="Disease Treat" required>
				</div>
				<br><br>
				<!--Image-->
				<div class="form-group">
					<?php
						$dir = '../../../pics';
						if(isset($image) && $image != null){
						 echo '<img style="width:150px; height:150px;margin:0px 40px 0px 250px" src="'. $dir. '/'. $image. '"  /> </br></br>';
						}
					?>
					<label style="padding-left: 123px" >Image:</label>	
					<input class="form-control"  style="padding-left: 200;width:350px;" type="file" name="image" multiple>
				</div>
				<br><br>
				<!--Save, update & delete-->
				<div class="control-group">
					<div class="controls" style="padding-left: 250px" >
					<?php
						if(isset($mode) && $mode == 1){
           					$m=$_GET['m'];
           			?>
           					<input type="hidden" name="m" value="<?php echo $m;?>">
           			<?php		
							if($m==2){
					?>
			  					<button type="submit" class="btn btn-save" value="Add" onClick="this.form.action='add_herbs_save.php?add_id=<?php echo $herb_id;?>'"><i class="icon-save icon-large"></i>&nbsp;Add</button>
					<?php	
							}/*end if add data m2*/
				            else if($m==3){	
				    ?>
			  					<button type="submit" class="btn btn-save" value="Update"><i class="icon-save icon-large"></i>&nbsp;Update</button>
					<?php	
							}/*end elseif update m=3*/
							else if($m==4){
					?>
								Delete record?
					            <button type="submit" class="btn btn-save" onClick="this.form.action='delete_herbs.php?info_id=<?php echo $info_id;?>'">&nbsp;Yes</button>
					            <button type="submit" class="btn btn-save" onClick="this.form.action='herbs.php'">&nbsp;No</button>
					            <input type="hidden" name="m" value="<?php echo $m;?>" formaction="delete_herbs.php">					
					<?php	
							} /*end else delete m=4*/
						}/*end if-else add&update&delete*/
						else{ 
					?>
							<button name="submit" type="submit" class="btn btn-save"><i class="icon-save icon-large"></i>&nbsp;Save</button>
					<?php	
						}/*end else save*/
					?>					
					</div>
				</div>
	   		</form>					
		</div>
		</br></br>		
    </div>
	<?php
		include("footer.php");
	?>
</body>
</html>