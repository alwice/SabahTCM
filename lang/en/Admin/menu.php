<html>
<head>
	<meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
	<link href="../../../images/logo2.jpg" rel="icon" /> <!--Icon-->
	<link href="../../../css/font-awesome.css" rel="stylesheet" /> <!--font-awsome icon-->
	<link href="../../../css/docs.css" rel="stylesheet" /> <!--doc css-->
	<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
	<link href="../../../css/bootstrap.min.css" rel="stylesheet"> <!--Bootstrap-->	
	<script src="../../../js/jquery-3.1.1.min.js"></script> 
		
	<script> 
		(function($) {
		 	jQuery.expr[':'].Contains = function(a,i,m){
				return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
		  	};
		 
			function listFilter(search, list) {
				var form = $("<form>").attr({"class":"filterform","action":"#"}),
				input = $("<input>").attr({"class":"filterinput form-control","type":"text","placeholder":"Search"}).css('margin-top','15px','font-size','15px');
				$(form).append(input).appendTo(search);
				$(input)
				.change(function () {
					var filter = $(this).val();
					if(filter) {
						$(list).find("a:not(:Contains(" + filter + "))").parent().slideUp();
					  	$(list).find("a:Contains(" + filter + ")").parent().slideDown();
					} 
					else {
					  	$(list).find("li").slideDown();
					}
					return false;
				})
				.keyup(function () {
					$(this).change();
				});
			}
		
			$(function () {
				listFilter($("#search"), $("#list"));
			});
		}(jQuery));
	</script>		
</head>

<?php 
	include("db_conn.php");
	session_start();
	global $page_title;

	function is_active($page_title = NULL, $menu_title = NULL) {
	  	if($page_title == $menu_title) {
	    return '"current"';
		} 
		else {
			return '';
		}
	}
?>

</br>
	<div id="header">
		<p style="text-align: right;font-size: 10">Welcome, &nbsp;
		<?php
			echo $_SESSION['username'];
		?>
		&nbsp;&nbsp;|||
		<a href="logout.php">&nbsp;&nbsp;Log out</a>&nbsp;&nbsp;
		&nbsp;&nbsp;|||&nbsp;&nbsp;
		<a href="../../cn/Admin/index.php"><img style="" src="../../../images/cn.ico">&nbsp;CN</a></p>
		<div>		
			<a href="index.php"><img style="width:100px; height:95px; float:left;margin: 20px 0px 0px 0px; padding-left:5px;" src="../../../images/logo2.jpg"></a>
			
			<div id="logo" style="font-size:30px;color:green; padding: 40px 0px 0px 0px ;padding-left:15px;">
				<p></p>
				<p style="background-color:#FFEED7; font-size:30px">SABAH TRADITIONAL CHINESE MEDICINE DATABASE</p>
				<p style="text-align:left;font-size:25px">&nbsp;</p>
			</div>

			<div id="navigation" >
				<div>
					<ul>
					<b>				
						<li class= <?php echo is_active($page_title,'herbs'); ?> ><a href="herbs.php"><i class="icon-leaf icon-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;Herbs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						<li class= <?php echo is_active($page_title,'diseases'); ?> ><a href="diseases.php"><i class="icon-tasks icon-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;Diseases&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						<li class= <?php echo is_active($page_title,'images'); ?> ><a href="images.php"><i class="icon-search icon-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;Images&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
						<li class= <?php echo is_active($page_title,'forum'); ?> ><a href="forum.php"><i class="icon-question icon-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;Forum&nbsp;&nbsp;&nbsp;&nbsp;</a></li>	
					</b>
					</ul>
				</div>
			</div>
		</div>
	</div>
</html>