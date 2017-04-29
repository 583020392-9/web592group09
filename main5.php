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
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Group 09</title>

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

</head>
<?php
 use google\appengine\api\users\User;
 use google\appengine\api\users\UserService;
 ?>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">eieife</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Project Group 9</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio4">Games</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">about</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <h1 class="name">Gaming Center</h1>
                        <hr class="star-light">
                        <span class="skills">Review - Enjoy - Enticing to follow</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container ">
<div class="col-sm-3">
<?php panel_include("User","work_user.php"); ?>
<?php panel_include("Menu","work_menu.php"); ?>
</div>
<div class="col-sm-9">
<?php panel_include($title,"work_body.php" ,"primary"); ?>
</div>
</div>
    <!-- Portfolio Grid Section -->
    <section id="portfolio4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Collection</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/darks.png"  class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crysis.png"  class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ark.png"  class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/mass.png"  class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/battlefield1.png"  class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dying.png"  class="img-responsive" alt="Submarine">
                    </a>
		
                </div>
            </div>
        </div>
    </section>
	<center><h2><ul> <a href="main.php#portfolio" >1</a>
		<a href="main2.php#portfolio2">2</a>
		<a href="main3.php#portfolio3">3</a>
		<a href="main4.php#portfolio4">4</a>
		<a href="main5.php#portfolio5">5</a>
		<a href="main6.php#portfolio6">6</a> 
		<a href="main7.php#portfolio7">7</a> 
		<a href="main8.php#portfolio8">8</a> </ul></h2></center>
	

    <section id="about" class="section">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			 <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>about us</h2>
                    <hr class="star-primary">
                </div>
            </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="team-box">
			<img src="img/dummies/te.jpg" alt=""  width="100%" height="280" />
			<div class="roles">
				<h5><strong>Jirawat  Khumsiri</strong></h5>
				<p>
					Admin
				</p>
				<ul class="social-profile">
					<li><a href="https://www.facebook.com/jirawat.kumsiri/html/"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="https://twitter.com/search?f=users&vertical=default&q=jirawatzz"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="img/dummies/oat.jpg" alt=""  width="100%" height="280" />
			<div class="roles">
				<h5><strong>Puwit  Chanapan</strong></h5>
				<p>
					Admin
				</p>
				<ul class="social-profile">
					<li><a href="https://www.facebook.com/oat.puwit/html/"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="https://twitter.com/search?f=users&vertical=default&q=%40o_puwit"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="img/dummies/ake.jpg" alt="" width="100%" height="280" />
			<div class="roles">
				<h5><strong>Ratthawit  Johnburee</strong></h5>
				<p>
					Admin
				</p>
				<ul class="social-profile">
					<li><a href="https://www.facebook.com/ake.ratthawit/html/"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="https://twitter.com/search?f=users&vertical=default&q=a_ratthawit"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="img/dummies/arm.jpg" alt=""  width="100%" height="280" />
			<div class="roles">
				<h5><strong>Nutthapon  Phitha</strong></h5>
				<p>
					Admin
				</p>
				<ul class="social-profile">
					<li><a href="https://www.facebook.com/armfreez/html/"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="https://twitter.com/search?f=users&vertical=default&q=4rmster"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
</section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>SC 06 FACULTY OF SCIEN
                            <br>KHON KAEN UNIVERSITY</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>DARK SOUL III</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/darks.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>ภาคต่อของโคตรเกม Action RPG ที่ขึ้นชื่อว่า “โคตรยาก” และมีเนื้อเรื่องที “โคตงง” และสำหรับภาคนี้ถือว่าเป็นที่ฮือฮามากในหมู่สาวกซีรี่ยส์Soul เพราะเกม DARK SOUL III จะได้ผู้ให้กำเนิดตัวจริง 
							ท่านประธาน ฮิเดทากะ มิยาซากิ ผู้สร้างเกม Demon Soul / Dark Soul และ Bloodborne 
							กลับมาทำหน้าที่ดูแลงานทั้งหมด ดังนั้นต้องเป็นเกมที่ยากนรกแตกอย่างที่ Demon Soul / Dark Soul ภาคแรกเป็นอย่างแน่นอน
						</br></b>
                           <h3>==== ตัวอย่างเกมส์ ====</h3> 
						   <br><iframe width="560" height="315" src="https://www.youtube.com/embed/Gh8x1AGIaPY" frameborder="0" allowfullscreen></iframe>
						   <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Crysis 3</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/crysis.png"class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3> 
                            <br><b>เหนึ่งในเกม FPS ระดับโลกที่หลายคนให้การติดตามและเฝ้ารอคอย ด้วยกราฟฟิกระดับที่คนเล่นหลายคนต้องร้อง Cry เพื่อทุ่มงบในการอัพสเปคมันมาแล้วหลายต่อหลายคน
							อีกครั้งเป็นเกมที่ขึ้นชื่อว่าเป็นเกมให้อารมณ์ความรู้สึกเหมือนเข้าไปอยู่ในเกมมาก และด้วยความอลังการของภาค 2 ทำให้หลายคนเฝ้ารอคอยการมาถึงของภาค 3 ที่จะเป็นการปิดฉากบทสรุปเรื่องราวทั้งหมด
							<br></b>
							<h3>==== ตัวอย่างเกมส์ ====</h3> 
						  <br><iframe width="560" height="315" src="https://www.youtube.com/embed/r3kQ4iF62_Q" frameborder="0" allowfullscreen></iframe>
							<ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>ARK: Survival Evolved</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/ark.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>ARK: Survival Evolved เป็นเกม Sandbox + Survival + Multiplayer ซึ่งผู้เล่นจะตื่นขึ้นมาบนเกาะร้างแห่งหนึ่ง พร้อมกางเกงในตัวเดียว ซึ่งไม่รู้ว่าเหตุใดตัวเราถึงมาอยู่บนเกาะนี้ได้ แต่มีหน้าที่เดียวเท่านั้นคือ หาทางมีชีวิตอยู่บนเกาะแห่งนี้ โดยตัวเกมจะมุ่งเน้นให้เราทำการสร้างของต่าง ๆ เช่น ขวาน, ธนู และ บ้าน เพื่อให้อาศัยอยู่บนเกาะแห่งนี้ แต่การจะใช้ชีวิตมันไม่ง่ายเลย
							เพราะตัวเราจะต้องเจอกับเหล่าสัตว์ร้าย,ไดโนเสาร์, ผู้เล่นที่ไม่เป็นมิตร ทีคอยมาขัดขวางหรือแย่งชิงทรัพยากรไปจากเรา พร้อมทั้งเราสามารถที่จะจับเหล่าไดโนเสาร์มาเป็นเพื่อน, คอยใช้งาน และเป็นบอร์ดี้การ์ดเฝ้าฐานให้กับเราได้อีกด้วย!!									
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/idueip-hLEg" frameborder="0" allowfullscreen></iframe>
							<ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2> Mass Effect </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/mass.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เรื่องราวของ Mass Effect ภาคแรก จะกล่าวถึง “นาวาตรี เชฟเพิร์ด” (ตัวละครผู้เล่น) ที่กำลังถูกทดสอบให้เข้ารับตำแหน่ง “Spectre” กลุ่มเจ้าหน้าที่พิเศษที่ทำงานขึ้นตรงกับสภาสูง Citadel ด้วยการเก็บกู้ซากอารยธรรมของชาว Prothean ที่ต้องสืบสาวเรื่องราวของการที่ “เผ่าGeth” บุกโจมตีอาณานิคม Eden Prime และเพื่อนร่วมทีมของเขาชาว Turian ชื่อ Nihlus Kryik ถูกสังหารโดย “Saren” 
							หนึ่งในทีม Spectre ที่หักหลังเขา…ภารกิจล้มเหลว สภาสูงไม่มอบ ตำแหน่ง Spectre ให้เชฟเพิร์ด แถมยังไม่เชื่อในรายงานของเขาด้วยซ้ำ เขาจึงต้องรวบรวมหลักฐานเพื่อเอาผิด Saren
							</br><b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/KyzbV9i3N74" frameborder="0" allowfullscreen></iframe>
							<ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Battlefield 1</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/battlefield1.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>“Battlefield 1″ เป็นเกมแนวยิงแหลกมุมมองบุคคลที่ 1 อันแสนคุ้นเคยคอเกมทั่วโลก โดยทีมงานตัดสินใจหยิบเอา “หนึ่งในหน้าประวัติศาสตร์สงครามโลกที่ไม่เคยมีใครนำมาทำเป็นเกมแอคชั่นเต็มสูบ” 
							ซึ่งจะมีสมรภูมิต่างๆให้ได้เล่นกัน โดยอ้างอิงจากภาพถ่ายในตำราสงครามโลกหลายๆแหล่ง เพื่อสร้างบรรยากาศที่สมจริง
								โดยเนื้อหาของเกม BF1 จะเป็นการรบในสงครามโลกผ่านเรื่องสั้น 6 เรื่อง  ในสมรภูมิที่แตกต่างกัน ไม่จำกัดแค่ตัวละครเดียวเล่ายาวยันจบเหมือนภาคก่อนๆ สามารถแยกออกมา 6
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/E815FHnxmxo" frameborder="0" allowfullscreen></iframe>
							<ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dying Light</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/dying.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เกมเพลย์หลักๆ จะเป็นการเอาตัวรอดจากฝูงซอมบี้ในเมืองที่เต็มไปด้วยผู้ติดเชื้อ แต่ทว่า ตัวเกมจะมีความรวดเร็วและคล่องตัวอย่างมาก กับการวิ่งไปตามตึกแบบ “Free Running”
							ถ้านึกไม่ออกล่ะก็ ให้นึกถึงเกม Mirror Edge ที่ออกไปในแนว “วิ่งสู้ฟัด” เน้นไปที่การวิ่งหนีจากจุด A ไปจุด B 
							ที่ไม่ค่อยมีให้เห็นในเกมซอมบี้ที่ส่วนใหญ่ที่จะเน้นไปที่การฆ่าล้างซอมบี้อย่างเมามันแทนการวิ่งหนีแบบนี้ และนอกจากการหนีซอมบี้แล้ว เรายังต้องคอยระวังอันตรายจากคนด้วยกันเองอีกด้วย	
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/bPHW_fBlkkw" frameborder="0" allowfullscreen></iframe>
							<ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
 <footer class="text-center page-footer">
 <?php
	readfile("gs://$appid/footer.html");
	if (UserService::isCurrentUserAdmin()){
	echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
	echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
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
