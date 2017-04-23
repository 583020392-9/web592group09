<!doctype html>
<?php   $appid = "web592group09.appspot.com/";  
 $page  = $_GET['p'];  
 if($page=='') $page='main';  
 $title = $page;   
function panel_include($title,$file,$ptype='default'){ 
 echo "<div class='panel panel-$ptype'>"; 
 echo "<div class='panel-heading'>$title</div>";  
 echo "<div class='panel-body'>";  
 if(file_exists($file)){  
 include($file); 
 }else{  
 echo "ไมพ่บไฟล ์ $file "; 
 }  echo "</div>"; 
 echo "</div>"; 
 } 
 ?>
 <?php 
 
use google\appengine\api\cloud_storage\CloudStorageTools; 
 
function userpic($uid){ 
   global $appid;  
   $userpic="gs://$appid/{$uid}.jpg"; 
   if(!file_exists($userpic)){ 
   return "user.png"; 
   } 
   return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
   } 
?>
 
<html lang="en">
<head>
<meta charset="utf-8">
<title>Groovin one page bootstrap template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<!--ajax-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
 <!--ajax-->
 
<script src="assets/js/modernizr.custom.js"></script>
</head>
<body>
<header>

<!-- navbar--><?php include("navbar.php"); ?> 

</header>

<!-- section intro -->
<?php
	readfile("gs://$appid/header.html");
	?>


<!-- end intro -->

<!-- section works -->
<?php

 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 ?>
 <div class="col-sm-9">
<?php
 
 if (UserService::isCurrentUserAdmin()){
 panel_include($title,"body.php" ,"primary"); 
 echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
 echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
 echo "<br><a href='?p=edit&file=body.html' class='btn btn-default'>แก้ไข body</a>";
 echo "<br><a href='?p=edit&file=aboutus.html' class='btn btn-default'>แก้ไข about us</a>";
 }
?>
</div>
<?php
	readfile("gs://$appid/body.html");
?>
<!-- section works -->

<!-- Section about -->
<?php
	readfile("gs://$appid/aboutus.html");
	?>
<!-- end section about -->

<!-- section contact -->

			<div class="col-sm-9">
<?php panel_include($title,"body.php" ,"primary"); ?>
</div>
     
<!-- end section contact -->

    <div class="container" id="login">
	<div class="row">
<div class="col-md-4 col-sm-offset-4">

 <?php panel_include("login","user.php");?>

		</div>
	</div>
</div>

<?php
	readfile("gs://$appid/footer.html");
	?>


<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
<!-- javascript -->
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/slippry.min.js"></script>
<script src="assets/js/nagging-menu.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/jquery.fancybox-media.js"></script> 
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/AnimOnScroll.js"></script>
    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );
    </script>
<script>
	$(document).ready(function(){
	  $('#slippry-slider').slippry(
		defaults = {
			transition: 'vertical',
			useCSS: true,
			speed: 5000,
			pause: 3000,
			initSingle: false,
			auto: true,
			preload: 'visible',
			pager: false,		
		} 
	  
	  )
	});
</script>

<script src="assets/js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>