<a href="index.php?language=en"><img src="images/language/languageNO.png"></a>
<a href="index.php?language=no"><img src="images/language/languageNEN.png"></a>

<?php
	if (!empty($_GET['language'])){
		$_COOKIE['language']=$_GET['language']==='en'?'en':'nl';
	}
	else{
		$_COOKIE['language']='nl';
	}
	setcookie('language', $_COOKIE['language']);

	if($_COOKIE['language']=='en'){
		include("headerEN.php");
	}
	else{
		include("header.php");
	}
?>