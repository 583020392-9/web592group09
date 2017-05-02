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
                        <img src="img/portfolio/FIFA 17.png"  class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/need.png"  class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dead_rising.png"  class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Line.png"  class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/naruto.png"  class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Ball.png"  class="img-responsive" alt="Submarine">
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
                        <p>SC 06 FACULTY OF SCIENCE
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
                            <h2>FIFA 17</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/FIFA 17.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>งานภาพของ FIFA17 จะเป็นการใช้เอ็นจิน Frostbite ซึ่งเป็นเอนจิ้นตัวเดียวกันกับ Star Wars Battlefront และ Battlefield 1 ที่ให้งานภาพที่เหนือกว่าเดิม เพิ่มความงดงามของเกมไปอีกขั้นด้วยการเพิ่มมิติของ Texture ถ้าเปิดกราฟฟิกสุด เราจะเห็นถึงรอยขรุขระ เหี่ยวย่น รอยยับที่เรียกได้ว่า ใกล้เคียงความสมจริงราวกับภาพถ่ายเลยทีเดียว สิ่งใหม่อีกอย่างที่แฟนๆซีรี่ยส์ FIFA17 จะได้สัมผัสคือ “การเล่นโหมดเนื้อเรื่อง” โดยเนื้อเรื่องของเกมนี้จะเล่าถึง “อเล็กซ์ ฮันเตอร์” เด็กหนุ่มวัย 17 ที่รักการเล่นฟุตบอลเป็นชีวิตจิตใจ
 
						</br></b>
                           <h3>==== ตัวอย่างเกมส์ ====</h3> 
						   <br><iframe width="560" height="315" src="https://www.youtube.com/embed/4quWICTjgwg" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Need for speed shift</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/need.png"class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3> 
                            <br><b>Need for Speed ในภาคล่าสุดนี้ก็จะเป็นการหวนคืนกลับสู่การแข่งรถแบบสตรีทดังเช่นภาค Underground แต่สิ่งที่เพิ่มเติมเข้ามาคือจำนวนรถที่มากมาย กราฟิกใหม่ที่ไฉไลกว่าพร้อมกับฟีเจอร์พิเศษสำหรับชาว PC เช่น เกียร์ธรรมดา , ปลดล็อคเฟรมเรต , รองรับความละเอียด 4K แต่ทว่าสิ่งที่ได้รับเมื่อลองเล่นจริง ๆ ยังรู้สึกไม่ปังเท่าไหร่เหมือนว่ามันมีอะไรที่ขาด ๆ เกิน ๆ ไปเยอะพอสมควร

Need for Speed จะให้ผู้เล่นเป็นนักซิ่งคนหนึ่งที่ได้เข้าร่วมแก๊งค์นักซิ่งที่ประกอบไปด้วย Spike , Amy และคนอื่น ๆ อีกเพียบโดยเป้าหมายของเกมนี้คือซิ่งรถกับคู่แข่งเพื่อสร้างค่าชื่อเสียงให้กับตนเองและชาวแก็งค์ให้ได้มากที่สุดพร้อมกับหลบหนีตำรวจที่จะคอยซิวผู้เล่นในระหว่างการแข่งขัน
							<br></b>
							<h3>==== ตัวอย่างเกมส์ ====</h3> 
						  <br><iframe width="560" height="315" src="https://www.youtube.com/embed/xfpNzKjPBP4" frameborder="0" allowfullscreen></iframe>
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
                            <h2> Dead Rising </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/dead_rising.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>วตัวเกมจะเล่าเรื่องราวของ “Nick Ramos” (นิค รามอส) ชายหนุ่มช่างซ่อมรถที่มีรอยสักหมายเลข 12 ที่คอ เรื่องราวจะเล่าในเมือง Los Perdidos (ลอส เปอร์ดิดอส) ยุคที่ซอมบี้ยังคงระบาด และถ้ามีใครอยากได้ยาต้านไวรัส Zombrex ก็ต้องมาลงทะเบียน ติดชิพกับรัฐบาล แต่เมื่อสถาณการณ์เลวร้ายลงหนักขึ้น ทางรัฐบาลประกาศว่า จะระเบิดเมืองนี้ทิ้งภายใน 7 วัน และทางเข้าออกเมือง ลอส เปอร์ดิดอส ถูกปิดตาย นิค แอนนี่ และเพื่อนๆไม่สามารถหาทางออกจากเมืองได้เลย
แต่นิค ก็ได้รู้ความจริงว่า ตัวของเขาคือ “เด็กทดลองของคาลิโต้หมายเลข 12″ เมื่อ 10 ปีก่อน เพื่อตามดูการเติบโตของไวรัสในตัว ซึ่งแต่เดิมมีจำนวน 50 คน แต่ตายไปซะเยอะ แต่ทว่าตัวของนิค มี DNA ที่ต้านเชื้อโรคนี้ได้ ทำให้เขาถูกตามล่าจากบ.Phenotrans เพื่อเอาเขามาสกัดทำยาขายต่อไป
ทั้งหมดออกจากเมืองมาได้โดยปลอดภัย พร้อมๆกับ อิซาเบลล่า ที่อยู่เบื้องหลังการแพร่ระบาดในเมืองนี้ เพื่อเป็นการล่อให้นิค แสดงตัวออกมาในฐานะผู้ที่มี DNA ในการรักษาผู้คนบนโลก และเธอก็ทำลายข้อมูลทั้งหมดก่อนออกจากเมืองไป…								
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ObURLnfQxi4" frameborder="0" allowfullscreen></iframe>
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
                            <h2> Line Of Sight </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/Line.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>LINE OF SIGHT เป็นเกมออนไลน์แนวยิงแหลก ที่เล่นง่าย ตายง่าย และหัวร้อนเอาง่าย ๆ ด้วยเช่นกัน มีการหยิบเอาความสามารถพิเศษเหนือมนุษย์มาผสมผสานเข้ากับเกมแนว FPS ได้อย่างลงตัว แถมยังได้เอนจิ้นเทพอย่าง Unreal 3 มาใช้ในการสร้างเกม ดังนั้นกราฟิกและเอฟเฟคต่าง ๆ ในเกมนี้จึงสวยงามสมจริงเอามาก ๆ

มีจุดเด่นตรงที่ตัวละครนั้นมีพลังพิเศษให้เราได้กดใช้กันด้วย รวมไปถึงสามารถปรับแต่งอาวุธเพิ่มความสามารถได้อย่างอิสระ
							</br><b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/P15vR1-kHe8" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Naruto</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/naruto.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>Naruto Shippuden: Ultimate Ninja Storm 4 Road to Boruto นั้นคือ DLC เสริมที่จะขยายจักรวาลของเกม Naruto Shippuden: Ultimate Ninja Storm 4 ที่มีการเพิ่มคอนเท้นท์และเนื้อเรื่องใหม่ให้ผู้เล่นติดตามการผจภัยของ Boruto และ Sanada โดยเรื่องราวจะเป็นเหตุการณ์ตามเรื่องราว Adventures of Boruto พร้อมด้วยการต่อสู้ระหว่าง Sasuke และ Kinshiki มีการเพิ่มด่านใหม่อย่าง Hidden Leaf Village ให้ได้ออกสำรวจและตัวละครเพิ่มเติมอีกมากมายที่ผู้เล่นจะสามารถเอามาเล่นได้ทั้งในโหมดออนไลน์และออฟไลน์
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/GUV7uve5QK4" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Dragonball</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/Ball.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>Dragon Ball Xenoverse 2 เป็นเกมแนว Fighting RPG ภาคต่อของเกมในภาคก่อนหน้าอย่าง Dragon Ball Xenoverse และในภาคนี้ก็จะมีตัวละครหลักตัวใหม่เป็นผู้ดำเนินเนื้อเรื่อง เกมภาคนี้จะดำเนินเนื้อเรื่องแบบเดียวกับในภาคแรกคือการเสนอเรื่องราวของโลกคู่ขนานที่เหตุการณ์เปลี่ยนแปลงไปจากเนื้อเรื่องหลัก นอกจากนี้ตัวเกม Dragon Ball Xenoverse 2 นั้นจะมาพร้อมกับฟีเจอร์ใหม่ๆ ที่ผู้เล่นจะสามารถรวมทีมแบบออนไลน์ออกไปต่อสู้ในโหมด 6vs1 เป็นการต่อสู้กับ AI Boss พร้อมทั้งฉากการต่อสู้ภายในเกมที่จะทำให้เราหวนคิดถึงฉากต่างๆ ที่เราเคยดูในการ์ตูน
							
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ioLg-Hx9zeQ" frameborder="0" allowfullscreen></iframe>
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
