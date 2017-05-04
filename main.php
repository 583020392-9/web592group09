<!DOCTYPE html>
<?php
 $appid = "web592group09.appspot.com";
 $page = $_GET['p'];
 if($page=='') $page='main';
 $title = $page;
 function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
 include($file);
}else{
 echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
 }
use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
 global $appid;
 $userpic="gs://$appid/{$uid}.jpg";
 if(!file_exists($userpic)){
 return "img/profile.png";
 }
 return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
}
  include_once("config.php");

?>
<html lang="en">

<head>
<style>
	{
	margin: 0;
	padding: 0;
	list-style: none;
	text-decoration: none;
}

.slider{
	overflow: hidden;
	height: 350px;
}

.slider figure div{
	width: 20%;
	float: left;
}

.slider figure img{
	width: 100%;
	float: left;
}

.slider figure{
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 20s slidy infinite;
}

@keyframes slidy{
	0%{
		left: 0%
	}

	10%{
		left: 0%;
	}

	12%{
		left: -100%;
	}

	22%{
		left: -100%;
	}

	24%{
		left: -200%;
	}

	34%{
		left: -200%;
	}

	36%{
		left: -300%;
	}

	46%{
		left: -300%;
	}

	48%{
		left: -400%;
	}

	58%{
		left: -400%;
	}

	60%{
		left: -300%;
	}

	70%{
		left: -300%;
	}

	72%{
		left: -200%;
	}

	82%{
		left: -200%;
	}

	84%{
		left: -100%;
	}

	94%{
		left: -100%;
	}

	96%{
		left: 0%;
	}

	100%{
		left: 0%;
	}
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    <link rel="icon" href="favicon.ico">

    <title>Group 09</title>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Icon -->
	<link rel="icon" href="game-controller.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 ?>
<body id="page-top" class="index">

<div id="skipnav"><a href="#maincontent">eieife</a></div>	
 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="main.php">Project Group09</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		 <?php 
		   include_once("menu.php");
		 ?>         
        </div>
	  </div>	
    </nav>
	
    <!-- Header -->
	<?php
	readfile("gs://$appid/header.html");
	?>
	<div class="container">
	<div class='panel panel-success'>
	<div class='panel-body'>
	<?php include("work_body.php");
	 ?> 
	</div> 
	</div> 
	</div> 
	
	
	


   <!-- Footer -->
	
  <footer class="text-center">
   <?php
	readfile("gs://$appid/footer.html");
	if (UserService::isCurrentUserAdmin()){
	echo "<br><a href='?p=edit&file=home.html' class='btn btn-default'>แก้ไข home</a>";
	echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
	echo "<br><a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
	echo "<br><a href='main.php?p=editgroup' class='btn btn-default'>แก้ไข group</a>";
 }
?>

 </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	
	
</body>

</html>
