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
                        <a href="#portfolio3">Games</a>
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
    <section id="portfolio3">
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
                        <img src="img/portfolio/walkd.png"  class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/pes2016.png"  class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/stard.png"  class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/out.png"  class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/south.png"  class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/mad.png"  class="img-responsive" alt="Submarine">
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
                            <h2>THE WALKING DEAD</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/walkd.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เดอะวอล์กกิงเดด เป็นวิดีโอเกมกราฟิกแนวผจญภัยดรามาแบบปฏิสัมพันธ์แบ่งเป็นตอน สร้างจากหนังสือการ์ตูนชุด เดอะวอล์กกิงเดด ของโรเบิร์ต เคิร์กแมน เกมพัฒนาโดยเทลล์เทลเกมส์ ตัวเกมคาดว่าจะออกจำหน่ายปลายปี ค.ศ. 2011 แต่ถูกเลื่อนไปเป็นต้นปี ค.ศ. 2012 เพื่อต่อเวลาพัฒนาเกม ตัวเกมประกอบด้วย 5 ตอนย่อย ออกจำหน่ายระหว่างเดือนเมษายน ถึงพฤศจิกายน ค.ศ. 2012 เทลล์เทลยังได้ออกเวอร์ชันครบห้าตอนด้วย ขณะนี้เกมลงบนเครื่องเล่นเอกซ์บอกซ์ 360 เพลย์สเตชัน 3 ไมโครซอฟท์ วินโดวส์ ไอโอเอส โอเอสเท็น เพลย์สเตชันวิต้า คินเดิลไฟร์ เอชดีเอ็กซ์ และแอนดรอยด์ สำหรับเวอร์ชันอูเยอ (Ouya) มีแผนว่าจะออกจำหน่ายต้นปี ค.ศ. 2014 และเวอร์ชันเพลย์สเตชัน 4 และเอกซ์บอกซ์วัน จะออกมาทีหลัง
						</br></b>
                           <h3>==== ตัวอย่างเกมส์ ====</h3> 
						   <br><iframe width="560" height="315" src="https://www.youtube.com/embed/FY2vSHMMmyw" frameborder="0" allowfullscreen></iframe>
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
                            <h2>PES 2016</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/pes2016.png"class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3> 
                            <br><b>โปรอีโวลูชันซ็อกเกอร์ 2016 ในประเทศญี่ปุ่น เป็นเกมจำลองฟุตบอลที่ได้รับการพัฒนาโดยพีอีเอส โปรดักชัน และจัดจำหน่ายโดยโคนามิสำหรับระบบไมโครซอฟท์ วินโดวส์, เพลย์สเตชัน 3, เพลย์สเตชัน 4, เอกซ์บอกซ์ 360
							และเอกซ์บอกซ์ วัน เกมนี้เป็นภาคที่สิบห้าของซีรีส์โปรอีโวลูชันซ็อกเกอร์ โดยมีภาพบุคคลบนปกเกมคือเนย์มาร์แห่งสโมสรฟุตบอลบาร์เซโลนา
							ปรอีโวลูชันซ็อกเกอร์ 2016 ยังเป็นการฉลองครบรอบ 20 ปีของพีอีเอส โปรดักชัน สำหรับการทำเกมฟุตบอล โดยชื่อของเกมได้เปลี่ยนจาก "เวิลด์ซ็อกเกอร์: วินนิงอีเลฟเวน" มาเป็น "โปรอีโวลูชันซ็อกเกอร์" ในทวีปเอเชีย (ยกเว้นประเทศญี่ปุ่น) และ "วินนิงอีเลฟเวน" ในประเทศญี่ปุ่นและรวมถึงภาคต่อกันมา
							<br></b>
							<h3>==== ตัวอย่างเกมส์ ====</h3> 
						  <br><iframe width="560" height="315" src="https://www.youtube.com/embed/MHiqNE5CNBk" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Stardew Valley</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/stard.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>Stardew Valley เป็นเกมแนวปลูกผัก RPG ที่ต้องใช้ชิวิตในชนบท โดยที่คุณจะได้รับมรดกเป็นฟาร์มเก่าจากปู่ของคุณที่อยู่ในหมูบ้าน Stardew Valley 
							เมื่อคุณเริ่มเล่นคุณจะได้รับเครื่องมือและเงินเล็กน้อยเพื่อเริ่มต้นชิวิตใหม่ในฟาร์ม เริ่มด้วยการจัดการเคลียร์พื้นที่ของคุณและเริ่มทำฟาร์มปลูกผักกันได้เลย และยังมีระบบตกปลา 
							ลงเหมืองขุดแร่ และยังจีบสาวได้อีกด้วย ในเมื่อง Stardew Valley ยังมีเทศกาลต่างๆให้ได้เล่นอีกมากมาย
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/zBAYsdr0FNM?list=PLbJD0APnaN3LNlHGUf9c6HHhYGj8refYy" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Outlast</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/out.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เอาต์ลาสต์ เป็นวิดีโอเกมแนวสยองขวัญเอาชีวิตรอดมุมมองบุคคลที่หนึ่ง พัฒนาและจำหน่ายโดยเรดบาร์เรลส์ เกมเกี่ยวข้องกับนักข่าวสืบสวนอิสระชื่อ ไมลส์ อัปเชอร์ ซึ่งตัดสินใจเข้าไปสืบสวนในโรงพยาบาลจิตเวชแห่งหนึ่งในแดนไกลชื่อ โรงพยาบาลเมานต์แมสซิฟ ตั้งอยู่ในแนวภูเขาของเลกเคาน์ตี รัฐโคโลราโด สำหรับเนื้อหาดาวน์โหลดวิสเซิลโบลเวอร์มีเนื้อเรื่องเกี่ยวกับเวย์ลอน พาร์ก คนที่พาไมลส์ไปที่นั่นครั้งแรก
							เอาต์ลาสต์ออกจำหน่ายลงไมโครซอฟท์ วินโดวส์ ในวันที่ 4 กันยายน ค.ศ. 2013 เพลย์สเตชัน 4 ในวันที่ 4 กุมภาพันธ์ ค.ศ. 2014 และเอกซ์บอกซ์ วัน ในวันที่ 19 มิถุนายน ค.ศ. 2014 
							เอาต์ลาสต์ได้รับคำวิจารณ์ด้านบวก และได้รับการยกย่องในเรื่ององค์ประกอบและระบบเกมที่สยองขวัญ เกมเวอร์ชันลินุกซ์และโอเอสเท็นออกจำหน่ายภายหลังในวันที่ 31 มีนาคม ค.ศ. 2015นับถึงเดือนตุลาคม ค.ศ. 2016 เกมขายได้รวม 4 ล้านหน่วย
							</br><b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/WNaHXRGG8hM?list=PLbJD0APnaN3LR7cH55nOhS_MVkjDpdhsS" frameborder="0" allowfullscreen></iframe>
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
                            <h2>South Park</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/south.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เซาท์พาร์ก เป็นภาพยนตร์การ์ตูนอเมริกันสร้างโดยแมตต์ สโตน และเทรย์ พาร์เกอร์ ออกฉายทาง คอเมดีเซนทรัล ตั้งแต่ปี พ.ศ. 2540 โดยเป็นเรื่องราวของนักเรียนประถม 4 คน (เริ่มเรื่องอยู่ ป.3 ปัจจุบันอยู่ ป. 4) ผจญภัยในที่ต่างๆ ภายในเมืองเล็กๆชื่อ เซาท์พาร์ก ในรัฐโคโลราโด ลักษณะตัวละครเริ่มออกแบบจากการตัดกล่องกระดาษมาประกอบเป็นรูปร่าง เนื้อเรื่องของเซาท์พาร์กจะเกี่ยวกับเหตุการณ์ปัจจุบัน โดยจะเน้นในลักษณะล้อเลียน ประชด เสียดสีสังคม
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/bZfnVFVUMjM" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Mad Max</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/mad.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>ตัวเกม madmax นี้นั้นไม่ได้เอามาจากตัวหนังล่าสุดอย่าง madmax : fury road เลยนะครับ ไม่มีตัวเอกอย่างในหนัง สาวๆสวยๆอย่างในหนังเลยนะครับ เพียงอาศัยแต่ จักรวาลและโลก ของหนัง madmax เท่านั้น เป็นเรื่องของการ ผจญภัยของ Max ตัวเอกของเกมและหนัง (ใครนึกไม่ออก จะคล้ายๆ shadow of mordor ที่หยิบเอาส่วนหนึ่งของ lord of the ring มาทำ โดยจะมีตัวละครในหนังมาป้านเปี้ยน แนวๆนั้น) โดยตัวหนังจะเหมือนเป็นหนึ่งตอนในโลกของ madmax นั่นเอง
							ตัวเกมจะให้เรารับบท max ชื่อเดียวกับในหนัง จะมีเส้นเรื่องหลัก โหมด story ให้เราได้เล่น แล้วใส่ระบบการบริหารจัดการทรัพยากรอย่างน้ำ ที่เอาไว้เติมพลัง และน้ำมันที่เอาไว้เติมรถคู่ใจเรา (น้ำมันเอาไปจุดระเบิดไปปาได้ด้วยนะ) ซึ่งในระหว่างที่เราเล่นไปตามเนื้อเรื่อง เราก็ต้องแวะนั่นนี่หาน้ำและน้ำมันไปตามทาง หา scrap (ชิ้นส่วนเครื่องกล) เอามาอัพเกรดรถและสกิลตัวเรา ระหว่างทางก็อาจเจอพวกตัวป่วนทั้งหลายกำลังขับรถผ่านมา หันมาโจมตีเราอย่างบ้าคลั่ง เราก็ต้องดิ้นรน ต่อสู้ หรือหนีเอาตัวรอดก็ทำได้ทั้งนั้นครับ
							</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/mYluHSeBTw8?list=PLbJD0APnaN3IRx2juhVL1NZeKuAu3xd4G" frameborder="0" allowfullscreen></iframe>
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
