<!DOCTYPE html>
<html lang="en">
<head>
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
	<!-- Icon -->
	<link rel="icon" href="game-controller.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	 <!-- jQuery -->
  
</head>
<body>
<?php
 $gid=$_GET['g'];
 use google\appengine\api\users\UserService;
 use google\appengine\api\cloud_storage\CloudStorageTools;
 if(!isset($db['groups'][$gid])){
   echo "ไม่พบข้อมูลกลุ่มสินค้า";
   return;
 } 
 $grec = $db['groups'][$gid];
 $list = [];
 if(isset($db['items'][$gid]))$list=$db['items'][$gid];
 
 echo "
 <h1>สินค้ากลุ่ม  $grec[name]</h1>
 
 ";
  $i=1;
 foreach($list as $pid=>$prec){
		$imgtag="";
	 if(isset($prec['picfile']) && file_exists($prec['picfile'])){
		 $img=CloudStorageTools::getImageServingUrl($prec['picfile'],["size"=>120]);
		 $imgtag = "<img src ='$img' class='img-responsive'>";
		 $imgtag2 = "<img src ='$img' class='img-centered' height='500'>";
	 }
	echo '<section id="portfolio">';
      echo '<div class="container">';
	echo '<div class="row">';
              echo ' <div class="col-sm-4 portfolio-item">';
                  echo ' <a href="#portfolioModal'.$i.'" class="portfolio-link" data-toggle="modal">';
                      echo ' <div class="caption">';
                        echo '  <div class="caption-content">';
                           echo '    <i class="fa fa-search-plus fa-3x"></i>';
                         echo '  </div>';
                      echo '  </div>';
                     echo "$imgtag";
                   echo ' </a>';
              echo ' </div>';
			  echo ' </div>';
			  echo ' </div>';
			  echo ' <section>';
			   
	echo '<div class="portfolio-modal modal fade" id="portfolioModal'.$i.'" tabindex="-1" role="dialog" aria-hidden="true">';
       echo '<div class="modal-content">';
          echo '<div class="close-modal" data-dismiss="modal">';
             echo '<div class="lr">';
                 echo ' <div class="rl">';
                  echo ' </div>';
               echo '</div>';
           echo '</div>';  
          echo '<div class="container">';
               echo ' <div class="row">';
                  echo '  <div class="col-lg-8 col-lg-offset-2">';
                      echo '  <div class="modal-body">';				 
   echo "<h2>$prec[name]</h2>";
    echo '<hr class="star-primary">';
		 echo "$imgtag";
                          echo'  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>';
					echo '</div>';
				echo '</div>';
            echo '</div>';
          echo '</div>';
       echo '</div>';
  echo '</div>';
  $i++;
   if(UserService::isCurrentUserAdmin()){
      echo " | <a href='main.php?p=additem&g=$gid&i=$pid'>Edit</a>";
   }
 }
 if(UserService::isCurrentUserAdmin()){
    echo "<a href='main.php?p=additem&g=$gid'>Add</a>";
 }
 ?>
 <footer>
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
 </footer>
 </body>
 </html>