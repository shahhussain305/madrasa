﻿<?php ini_set('display_errors',0); 
 error_reporting(0);  // to keep error warning off replace E_ALL on 0
 ?>
<?php session_start(); ?>
<?php require_once('classes/classes.php'); ?>
<?php require_once('classes/Hijri_GregorianConvert.php');  ?>
<?php $hijri = new Hijri_GregorianConvert(); ?>
<?php require_once('includes/security.php'); ?>
<?php $crud = new CRUD(); ?>
<?php require_once("includes/configuration.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::: <?php echo(@$_SESSION['hijri']); ?>  ::: مدرسہ منیجیمنٹ سسٹم </title>
<link rel="stylesheet" type="text/css" href="css/default.css"/>
<link rel="icon" type="image/png" href="http://esdn.com.pk/images/facebookIcon.png" />
<link rel="stylesheet" href="menu/menu.css" type="text/css" media="screen" />
<?php /* */ ?>
<script language="javascript" type="text/javascript" src="js/functions.js"></script>
<?php /* */ ?>
<?php // light box stylesheet ?>
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<?php // end light box stylesheet ?>
<?php // thickbox  ?>
<script type="text/javascript" src="js/thickbox.js"></script>
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<?php // end thickbox  ?>
<?php /*?> Calendar <?php */?>
<script type="text/javascript" src="js/jquery.datepick.js"></script>
<style type="text/css">
@import "js/jquery.datepick.css";
</style>
<script language="javascript" type="text/javascript">
$(document).ready(function() {
    try{
		var bg = Math.floor((Math.random()*5)+1)+".jpg";
		$("body").css("background-image","url(images/bg/"+bg+")");
		}catch(e){
		
		}
	});
</script>
<?php /*?>End of Calendar <?php */?>
</head>
<body>
<div id="innercontainer">
	 <div id="header">&nbsp;</div>
     <div id="menu"> <?php require_once('includes/menuGeneral.php'); ?> </div>                    
     <div id="content" class="generalTextFonts">
		<?php 
			$cmd = 1;
				if(!isset($_REQUEST['cmd']) || empty($_REQUEST['cmd'])){
					$cmd = "home";
					}
				else{
					$cmd = addslashes($_REQUEST['cmd']);
					}
					if(file_exists("pages/".$cmd.".php")){
					 	 include("pages/".$cmd.".php");
					  	}
					else{
						  include("pages/error.php");	
					  }
				?>
  
	</div>
</div>
    <div id="footer"> 
    	<div id="mainFooter"><?php require_once("includes/footer.php"); ?> </div>  
	</div>            
</body>
</html>