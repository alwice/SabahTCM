<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		session_start();
		$_SESSION['pages']="herbs.php";
		$page_title="herbs";
		include("menu.php");
	?>
	<title>草药 - SabahTCM</title>
</head>
<body>
	<div id="body">
		<div id="main">
		</br>
			<div class="sidebar">
				<h3 style="text-align:center" id="search">草药类型</h3>
				<!--Start listing all herbs-->
				<ul id="list">		
				<?php 							
					$herb_query=mysqli_query($conn,"SELECT * FROM herb_list ORDER BY local_name_cn")or die(mysqli_error($conn));
			
					while($row=mysqli_fetch_array($herb_query)){
						$herbs_id=$row['herb_id'];
						$herb_name=$row['local_name_cn'];
				?>
						<li><a href="herbs.php?id=<?php echo $herbs_id;?>&amp;herb=<?php echo $herb_name;?>"><?php echo $herb_name;?><i class="pull-right col-lg-4 icon-expand icon-medium">&nbsp;<span class="herb_detail">详情</span></i></a></li>
				<?php 
					}/*end while listing*/
				?>
				</ul>
				<!--end listing-->
			</div><!--sidebar div-->
			
			<a class="btn btn-info pull-right" href="add_herbs.php"><i class="icon-plus icon-large"></i>&nbsp;增加草药</a>
			</br> 
			</br>
			
			<div class="content">
				<?php 
					$id=isset($_GET['id'])?$_GET['id']:NULL;
					if($id==NULL){
						echo "请选择草药";
					} 
					/*else retrieve db*/
					else{
						/*get herb_list*/
						$herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list WHERE herb_id='$id' ")or die(mysqli_error($conn));
			
						while($data1=mysqli_fetch_array($herb_list_information)){
							$list_id=$data1['herb_id'];
							$herb_name=$data1['local_name_cn'];
							$other_name=$data1['other_name_cn'];
							$sci_name_gs=$data1['scientific_gen_spec'];
							$sci_name_var=$data1['scientific_var'];
							$sci_name_cv=$data1['scientific_cv'];
							$family=$data1['family_cn'];
							$image=$data1['image'];
						}
				?>
						<!--selection m5=-All m2=+dt-->
						<a class="pull-right" style="color:darkblue" href="delete_herbs.php?list_id=<?php echo $list_id;?>&amp;m=5"><i class="icon-trash icon-large"></i>删除药草</a>&nbsp;&nbsp;&nbsp;
						<span class="admin_herb_break"></br></span>
						<h3 class="first"><?php echo $herb_name;?></h3>
						<span class="admin_herb_break"></br></span>
						<a class="pull-right" style="color:darkblue" href="add_herbs.php?list_id=<?php echo $list_id;?>&amp;m=2"><i class="icon-plus icon-large"></i>增加草药记录</a>&nbsp;&nbsp;&nbsp;
						<span class="admin_herb_break"></br></span>
						</br>

						<!--print herb_list-->
						<img id="herbImg" alt="<?php echo $herb_name;?>" width="30%" height="auto" style="float:right; margin:5% 0px 0px 5%; max-height: 200px; object-fit: cover;" src="../../../pics/<?php echo $image;?>" onclick="enlarge();"/>

						<!-- The Modal -->
						<div id="enlargeImg">
							<!--Close button-->
						  	<span class="closeImg">&times;</span>  	
						  	<!--Content-->
						  	<img id="bigImg">
						  	<!--Caption-->
						  	<div id="caption"></div>
						</div>
						
						<p><b>名称：</b><?php echo $herb_name;?></p>
						<p><b>别称：</b><?php echo $other_name;?></p>
						<p><b>学名：</b>
							<?php 
								if($sci_name_var==NULL){
									echo "<i>".$sci_name_gs."</i> ".$sci_name_cv;
								}
								else{
									echo "<i>".$sci_name_gs."</i> var. <i>".$sci_name_var."</i> ".$sci_name_cv;
								}
							?>
						</p>		
						<p><b>科别：</b><?php echo $family;?></p>
						</br> 
						<!--done print herb_list-->
				<?php 
						/*get herb_info*/
						$herb_info_show=mysqli_query($conn,"SELECT * FROM herb_info WHERE herb_id='$id' ")or die(mysqli_error($conn));
						while($data=mysqli_fetch_array($herb_info_show)){
							$info_id=$data['info_id'];
							$part=$data['usage_part_cn'];
							$function=$data['function_cn'];
							$disease=$data['disease_cn'];
				?>
							<!--print herb_info-->
							<p><b>药用部位：</b><?php echo $part;?></p>
							<p><b>功效：</b><?php echo $function;?></p>
							<p><b>主治：</b><?php echo $disease;?></p>		
							<!--selection m3=ud, m4=-dt-->
							<a class="pull-right" style="color:darkblue" href="add_herbs.php?info_id=<?php echo $info_id;?>&amp;m=3"><i class="icon-edit icon-large"></i>更新</a></p>
							<span class="admin_herb_break"></br></span>
							<a class="pull-right" style="color:darkblue" href="add_herbs.php?info_id=<?php echo $info_id;?>&amp;m=4"><i class="icon-trash icon-large"></i>删除记录</a>&nbsp;&nbsp;&nbsp;
							<hr>				
				<?php 		
						} /* end while print herb_info*/
					} /*end else selected herb*/
				?>
			</div><!--end content div-->
		</div><!--end div-->
	</div><!--end body div-->
	<?php
		include("footer.php");
	?>
</body>
</html>