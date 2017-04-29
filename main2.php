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
                        <a href="#portfolio2">Games</a>
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
    <section id="portfolio2">
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
                        <img src="img/portfolio/dota2.png"  class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/alive.png"  class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/battle4.png"  class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/left4.png"  class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/fra3.png"  class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Counter.png"  class="img-responsive" alt="Submarine">
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
                            <h2>DOTA 2</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/dota2.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>รูปแบบการเล่นเกม DOTA 2 เป็นเกมการต่อสู้ระหว่างกองกำลังสองฝ่าย คือฝ่าย Radiant และ ฝ่าย Dire 
							โดยผู้เล่น 1 คนรับบทฮีโร่ 1 ตัว สามารถเลือกได้จากจำนวนฮีโร่ที่มีอยู่กว่าร้อยตัว แบ่งเป็นสายหลักๆ 3 แบบตามสไตล์ของแต่ละคน คือ Strength, Agility และ Intelligence 
							จากนั้นจะเริ่มเปิดศึก 5 vs 5 โดยมีจุดประสงค์ในการเล่นคือเก็บเลเวลเพื่อบุกฝ่าดงของฮีโร่ ครีป และป้อมปราการ ลุยเข้าไปทำลายฐานของอีกฝั่งให้ได้ 
							พร้อมกับต้องป้องกันฐานของตนเองจากการรุกล้ำของศัตรูไปในเวลาเดียวกัน และนี่คือเสน่ห์ของเกมที่ต้องใช้ทักษะหลายด้าน ตัดสินกันด้วยไหวพริบ ความชำนาญ 
							การเสียสละเพื่อทีม หรือแม้กระทั่งโชคช่วยอีกด้วย ทำให้เป็นเกมที่ไม่ซ้ำรูปแบบ มีการคิดค้นเทคนิคการเล่นใหม่ๆ ออกมาอยู่เสมอ และตอบสนองความมันส์ถึงขีดสุดได้ภายในเวลาเพียงไม่เกิน 1 ชั่วโมง ที่						ี่สำคัญช่วงเวลาแห่งการปะทะนั้นหากพลาดพลั้งเพียงเสี้ยววินาทีก็มีโอกาสพลิกเกมได้จากหน้ามือเป็นหลังมือเลยทีเดียว จึงไม่แปลกที่ได้รับการกล่าวขานถึงมากที่สุด จนพัฒนาเป็นการกีฬา e-Sports 
							อย่างเต็มตัว มีรายการแข่งขันใหญ่ๆมากมายทั้งในและต่างประเทศ สร้างชื่ออย่างยิ่งใหญ่จนเรียกว่าไม่มีใครไม่รู้จักเกมนี้ “เกม DOTA”
						</br></b>
                           <h3>==== ตัวอย่างเกมส์ ====</h3> 
						   <br><iframe width="560" height="315" src="https://www.youtube.com/embed/NXw6jQWPQAw" frameborder="0" allowfullscreen></iframe>
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
                            <h2>I am Alive</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png"class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3> 
                            <br><b>I am Alive เป็นเกมชื่อดังจากฝั่งคอนโซลซึ่งได้พอร์ทเอามาให้ทางฝั่ง PC ได้เอามาเล่นกันบ้าง จริงๆ แล้วตัวเกมมีอุปสรรคหลายอย่างมาก 
							ตั้งแต่โดนตัดงบไปจนถึงการเปลี่ยนคอนเชปเกมไปจากเดิมที่โปรโมทครั้งแรก ทำให้ตัวเกมดาวเกรดคุณภาพลงไปจนน่าเสียดาย แต่ตัวเกมก็ยังมอบความบันเทิงและความคุ้มค่าในการเล่นสูงครับ
							<br></b>
							<h3>==== ตัวอย่างเกมส์ ====</h3> 
						  <br><iframe width="560" height="315" src="https://www.youtube.com/embed/alg7Ouyfdyw" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Battlefield 4</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/battle4.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>โดยจากเรื่องราวที่ได้ปล่อยออกมานั้นตัวร้ายตัวเอ้ในภาคนี้น่าจะเป็นทางฝั่งจีนนั่นเองที่เป็นชนวนในการจุดสงครามให้เริ่มขึ้น โดยผู้เล่นจะได้รับบทเป็นจ่า Daniel Recker 
							หนึ่งในสมชิกระดับพระกาฬของหน่วย Tombstone ที่จะต้อง “ผ่านความสับสนอลหม่านที่เกิดขึ้นรอบๆตัวเพื่อช่วยความหวังสุดท้ายของสันติภาพ”</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/3DdDaeSt1AA" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Left 4 Dead 2</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/left4.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เนื้อเรื่องจากภาคแรกเกิดขึ้นในช่วงสองสัปดาห์หลังการติดเชื้อ CEDA ไม่สามารถควบคุมการแพร่ระบาดได้อีกต่อไปจึงต้องขอความร่วมมือจากกองทัพมาช่วยลี้ภัยผู้คนและกำจัดผู้ติดเชื้อที่เกินความควบคุม, ผู้รอดชีวิต 4 คนใน Pennsylvania ต่อสู้เอาตัวรอดเพื่อไปยังจุด Evac จุดสุดท้าย และเดินทางขึ้นเหนือไปยัง Candy Mountain, ในภาคสอง หนึ่งสัปดาห์หลังจากภาคแรก สามสัปดาห์หลังจากการติดเชื้อ ผู้รอดชีวิตใน Georgia 4 คนต้องต่อสู้เพื่อเดินทางไปยังขบวน Evac ทางใต้

ใน Left 4 Dead 2 นี้มีส่วนที่มีความเป็นเนื้อเรื่องมากขึ้น การเชื่อมต่อเนื้อเรื่องในแต่ละ Campaign นั้นมีมากขึ้น ในขณะที่่ส่วนของการใบ้เนื้อเรื่องต่างๆตามสภาพแวดล้อมและ grafitti นั้นมีน้อยลง นับว่าเป็นข้อเสียเล็กๆน้อยๆอย่างนึง ถ้าไม่ได้ใส่ใจเนื้อเรื่องก็ข้ามไปได้เลย น่าเสียดายที่บางครั้งความคิดในการเล่าเรื่องสไตล์แบบเกม Portal หรือ Left 4 Dead ภาคแรกนั้นเป็นสิ่งที่น่าสนใจ แต่ข้อเสียของมันคือการที่ผู้เล่นบางกลุ่มไม่สามารถเข้าถึงเนื้อเรื่องได้ หรือยากที่จะเข้าถึง เพราะต้องคอยเก็บรายละเอียดหยิบย่อยของเนื้อเรื่องที่กระจัดกระจายเป็นจิ๊กซอว์อยู่ทั่วตัวเกมจนบางครั้งสำหรับคนที่ตั้งใจจะติดตามเสพเนื้อเรื่องอย่างจริงๆจังๆก็ทำให้เหนื่อยเอาอยู่เมื่อต้องมานั่งคุ้ยหาที่มาที่ไปของเนื้อเรื่อง ฟังทุกๆอย่่างในเกม อ่าน graffiti ทุกแห่งที่ผ่าน และค้นตัว file game เพื่อหาบทสนทนาที่เกี่ยวข้องกับเนื้อเรื่องอีก</br><b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/WqaPTbvU6lA" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Far Cry 3</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/fra3.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เกมฟาร์ครายภาคสามนี้ ถูกพัฒนาโดย Ubisoft Montreal ทีมงานชุดเดิมจากสองภาคแรก แถมยังเป็นทีมสร้างผู้พัฒนาเกมตระกูลทอมแคลนซี่ และซีรีส์แอสซาซินครีด รวมไปถึงเกมจากหนังอวตาร์อีกด้วย ไม่แปลกใจเลยว่าทำไมเกมภาคนี้ถึงได้รับอิทธิพลมาจากเกมอื่นหรือมีกลิ่นอายภาพยนตร์บางเรื่องผสมอยู่ โดยตัวเกมภาคใหม่ยังคงใช้เอนจิ้นตัวเดียวกับภาคก่อนแต่เป็นเวอร์ชันอัพเกรด Dunia Engine 2 ส่งผลให้ภาพกราฟฟิกถูกยกระดับขึ้นไปอีกขั้น ซึ่งต้องแลกมาด้วยสเปคคอมระดับสูง และที่สำคัญคือการ์ดจอต้องแรงจริงถึงจะเอาเกมนี้อยู่
       
       	เนื้อเรื่องในเกมนั้น จะกล่าวถึงวัยรุ่นชาวอเมริกันกลุ่มหนึ่ง นำโดยสามพี่น้องตระกูล Brody ที่ตัดสินใจจัดทริปพิเศษในช่วงวันหยุดยาว พาแฟนและเพื่อนเดินทางมาท่องเที่ยวยังเกาะเขตร้อนในแถบทวีปเอเชียตะวันออกเฉียงใต้ แต่ดันเกิดไอเดียแผลงชักชวนกันไปเล่นดิ่งพสุธาจนสุดท้ายพลัดหลงไปตกลงกลางเกาะลึกลับแห่งหนึ่งที่มีพวกโจรสลัดเสื้อแดงปกครองอยู่ และทำให้พวกเขาทั้ง 7 คนถูกจับตัวไปเป็นเชลย แต่โชคยังดีที่หนึ่งในนั้นหนีรอดออกมาได้ และได้รับการช่วยเหลือจากกองกำลังต่อต้านชาวพื้นเมือง จึงเกิดเป็นการผจญภัยปลุกสัญชาตญาณดิบเพื่อชิงผองเพื่อนกลับคืนมา ไปพร้อมๆกับการปลดแอกดินแดนแห่งนี้</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/R1p9zhCfPTs" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Counter-Strike: Global Offensive</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/Counter.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เคาน์เตอร์-สไตรก์: โกลบัลออฟเฟนซิฟ (อังกฤษ: Counter-Strike: Global Offensive, บ้างย่อเป็น CS:GO) เป็นวิดีโอเกมออนไลน์ประเภทยิงทางยุทธวิธีมุมมองบุคคลที่หนึ่ง พัฒนาโดย วาล์ว คอร์เปอเรชั่น และฮิตเดน แพทซ์ เอ็นเตอร์เทนเมนท์ ซึ่งเป็นเกมชุดที่ 4 จากแฟรนไชส์เคาน์เตอร์-สไตรก์
							แนวยิงมุมมองบุคคลที่1 ซึ่งจะมี 2ฝั่ง คือ ผู้ต่อต้านผู้ก่อการร้าย กับ ผู้ก่อการร้าย จะมีรูปแบบการเล่นมีโหมดแตกต่างกันออกไป 1.แคสชวล 2.เดทแมตซ์ 3.ทำลายล้าง 4.คลาสสิค 5.แข่งขัน ทุกโหมดนั้น จะมีระบบสุ่มของให้กับผู้เล่นอีกด้วย</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/YdJsh0Iip8g" frameborder="0" allowfullscreen></iframe>
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
