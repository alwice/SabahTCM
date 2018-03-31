<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<?php
		$page_title="diseases";
		include("menu.php");
	?>
	<title>疾病 - SabahTCM</title> 
</head>
<body>
	<div id="body">
		</br>
		<div>
			<div class="sidebar">
				<h4 style="text-align:center" id="search">疾病种类</h4>
				<!--Start listing all herbs-->
				<ul id="list">		
				<?php 							
					$disease_query=mysqli_query($conn,"SELECT disease FROM herb_info_cn GROUP BY disease")or die(mysqli_error($conn));
					while($row=mysqli_fetch_array($disease_query)){
						$disease=$row['disease'];
				?>			
						<li><a href="diseases.php?disease=<?php echo $disease;?>"><?php echo $disease;?><i class="pull-right col-lg-4 icon-expand icon-medium">&nbsp;详情</i></a></li>
				<?php 
					}/*end while listing*/
				?>
				</ul>
				<!--end listing-->
			</div><!--sidebar div-->
			</br>
			</br>
			
			<div class="content">	
				<?php 
					$disease=isset($_GET['disease'])?$_GET['disease']:NULL;
					$herb=isset($_GET['herb'])?$_GET['herb']:NULL;
					/*if no disease is selected, print comment*/
		 	 		if($disease==NULL){
		 	 			echo "请选择疾病";
		 	 		}
		 	 		/*else retrieve db*/
					else{
						/*breadcrumb*/
						echo "<b>疾病&nbsp;>&nbsp;".$disease."</b>";
						/*get local_name from herb_list*/
						if($herb==NULL){
							/*if no herb is selected yet, print list*/
							/*breadcrumb*/
							echo "</br></br>";
							$herb_show=mysqli_query($conn,"SELECT local_name FROM herb_info_cn WHERE disease='$disease'")or die(mysqli_error($conn));
							while($data=mysqli_fetch_array($herb_show)){
								$herb=$data['local_name'];
				?>
								<!--print list of local_name-->
								<p style="padding-bottom:2px"><li style="display:inline-block"><a href="diseases.php?disease=<?php echo $disease;?>&amp; herb=<?php echo $herb;?>"><?php echo $herb;?></a></li></p>	
								</br>
								<!--done print list-->
				<?php
					 		}/*end while listing*/
						}/*end if herb null*/
						/*else retrieve db get information*/
						else{
							/*breadcrumb*/
							echo "<b>&nbsp;>&nbsp;".$herb."</b></br></br>";	
							/*get herb_list*/
							$herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list_cn WHERE local_name='$herb' ")or die(mysqli_error($conn));
							while($data1=mysqli_fetch_array($herb_list_information)){
								$herb_id=$data1['herb_id'];
								$herb_name=$data1['local_name'];
								$other_name=$data1['other_name'];
								$sci_name=$data1['scientific_name'];
								$family=$data1['family'];
								$image=$data1['image'];
							}/* end while fetch herb_list*/
				?>
							<!--print herb_list-->
							<h3 class="first"><?php echo $herb_name;?></h3>
							</br>
							<p><img style="width:187px; height:180px; float:right;margin:0px 0px 0px 10px" src="../../../pics/<?php echo $image;?>"></p>
							<p style="padding-bottom:2px"><b>名称：</b><?php echo $herb_name;?></p>
							<p style="padding-bottom:2px"><b>别称：</b><?php echo $other_name;?></p>
							<p style="padding-bottom:2px"><b>学名：</b><i><?php echo $sci_name;?></i></p>	
							<p style="padding-bottom:2px"><b>科别：</b><?php echo $family; ?></p>	
							</br> 
							<!--done print herb_list-->
				<?php
							/*get herb_info*/
							$herb_info_show=mysqli_query($conn,"SELECT * FROM herb_info_cn WHERE local_name='$herb' AND disease='$disease'")or die(mysqli_error($conn));
							while($data=mysqli_fetch_array($herb_info_show)){
								$part=$data['usage_part'];
								$function=$data['function'];
								$disease=$data['disease'];
							}/* end while fetch herb_info*/
				?>
							<!--print herb_info-->
							<p style="padding-bottom:4px"><b>药用部位：</b><?php echo $part;?></p>
							<p style="padding-bottom:4px"><b>功效：</b><?php echo $function;?></p>
							<p style="padding-bottom:4px"><b>主治：</b><?php echo $disease;?></p>		
							<hr>
							
							<p><a href="diseases.php?disease=<?php echo $disease;?>" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;回去</a></p>
				<?php	
						}/*end else selected herb*/	
					}/*end else selected disease*/
				?>			
			</div><!--end content div-->
		</div>
		</br></br>
	</div><!--end body div-->
	<?php
		include("../footer.php");
	?>
</body>
</html>