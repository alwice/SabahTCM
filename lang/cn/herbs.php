<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<?php
		$page_title="herbs";
		include("menu.php");
	?>
	<title>草药 - SabahTCM</title>
</head>
<body>
	<div id="body">
		<div>
		</br>
			<div class="sidebar">	
				<h4 style="text-align:center" id="search">药草类型</h4>
				<!--Start listing all herbs-->
				<ul id="list">		
				<?php 							
					$herb_query=mysqli_query($conn,"SELECT * FROM herb_list_cn GROUP BY local_name")or die(mysqli_error($conn));
			
					while($row=mysqli_fetch_array($herb_query)){
						$herbs_id=$row['herb_id'];
						$herb_name=$row['local_name'];
				?>
						<li><a href="herbs.php?id=<?php echo $herbs_id;?>&amp;herb=<?php echo $herb_name;?>"><?php echo $herb_name;?><i class="pull-right col-lg-4 icon-expand icon-medium">&nbsp;详情</i></a></li>
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
					$id=isset($_GET['id'])?$_GET['id']:NULL;

					/*if no herb is selected, print comment*/
					if($id==NULL){
						echo "请选择药草";
					}
					/*else retrieve db*/
					else{
						/*get herb_list*/
						$herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list_cn WHERE herb_id='$id'")or die(mysqli_error($conn));
						while($data1=mysqli_fetch_array($herb_list_information)){
							$herb_id=$data1['herb_id'];
							$herb_name=$data1['local_name'];
							$other_name=$data1['other_name'];
							$sci_name=$data1['scientific_name'];
							$family=$data1['family'];
							$image=$data1['image'];
						}
				?>
						<!--print herb_list-->
						<h3 class="first"><?php echo $herb_name;?></h3>
						</br>
						<p><img style="width:150px; height:150px; float:right;margin:0px 0px 0px 10px" src="../../pics/<?php echo $image;?>"></p>
						<p style="padding-bottom:4px"><b> 名称: </b><?php echo $herb_name;?></p>
						<p style="padding-bottom:4px"><b> 别称: </b><?php echo $other_name;?></p>
						<p style="padding-bottom:4px"><b> 学名: </b><i><?php echo $sci_name;?></i></p>		
						<p style="padding-bottom:4px"><b> 科别: </b><?php echo $family;?></p>
						</br> 
						<!--done print herb_list-->
				<?php 	
						/*get herb_info*/
						$herb_info_show=mysqli_query($conn,"SELECT * FROM herb_info_cn WHERE herb_id='$herb_id'")or die(mysqli_error($conn));
						while($data=mysqli_fetch_array($herb_info_show)){
							$info_id=$data['info_id'];
							$part=$data['usage_part'];
							$function=$data['function'];
							$disease=$data['disease'];
				?>	
							<!--print herb_info-->
							<p style="padding-bottom:4px"><b> 药用部位: </b><?php echo $part;?></p>
							<p style="padding-bottom:4px"><b> 功效: </b><?php echo $function;?></p>
							<p style="padding-bottom:4px"><b> 主治: </b><?php echo $disease;?></p>	
							<hr>
				<?php 		
						} /* end while print herb_info*/
					} /*end else selected herb*/
				?>
			</div><!--end content div-->
		</div><!--end div-->
		</br></br>
	</div><!--end body div-->
	<?php
		include("footer.php");
	?>
</body>
</html>