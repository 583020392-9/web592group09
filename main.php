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
                        <a href="#portfolio">Games</a>
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
    <section id="portfolio">
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
                        <img src="img/portfolio/cabin.png"  class="img-responsive" alt="Cabin">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png"  class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png"  class="img-responsive" alt="Circus tent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png"  class="img-responsive" alt="Game controller">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png"  class="img-responsive" alt="Safe">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png"  class="img-responsive" alt="Submarine">
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
                            <h2>Pro Evolution Soccer 2017</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>PES 2017 คือ ขั้นกว่าจากเวอร์ชั่นล่าสุด ที่พัฒนาขึ้นทั้งเรื่องความสมจริงในเกมที่จะเห็นฉากที่เสมือนเกมการแข่งขันจริงๆ เช่น การวิ่งหาช่องของเพื่อนร่วมทีม การซ้อนฟลูแบ็คเมื่อโดนเลี้ยงผ่านของเหล่าปราการหลังตัวกลาง ฯลฯ
จุดที่น่าสนใจ คือ การฉลองชัยที่จะสนุกและสะใจกว่าเดิมแน่ๆ โดยเฉพาะเมื่อคุณใช้นักเตะแบบ คริสเตียโน่ โรนัลโด้ หรือ ลิโอเนล เมสซี่ ในการลากกว่า 40 หลาเข้าไปซัดประตูสุดงาม(ทว่า ทีมผู้ผลิตก็พัฒนา AI ของเหล่ากองหลัง ไม่ได้ให้ยิงง่ายๆแน่นอน)  นอกจากนี้ โคนามิ ยังปรับปรุงเรื่องของการเคลื่อนที่ของลูกฟุตบอลในสนามให้มีความเสมือนจริงมากขึ้น เช่นเดียวกับการทรงตัวของนักเตะที่มั่นคงกว่าเดิม ที่สำคัญที่สุดคือ ผู้เล่นจะสามารถควบคุมการวิ่งของนักเตะด้วยจอยเกมได้สมจริงยิ่งขึ้นกว่าทุกภาค
หรือจะเป็นจังหวะการซัดประตูที่หลากหลายกว่าเดิม หรือจะเป็นผู้รักษาประตูที่เราสามารถกดสั่งการการเล่นรูปแบบต่างๆที่ผิดแปลกออกไปจากเวอร์ชั่นเดิมๆได้
</br></b>
                           <h3>==== ตัวอย่างเกมส์ ====</h3> 
						   <br><iframe width="560" height="315" src="https://www.youtube.com/embed/KlRzpxi7WZQ" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Resident Evil 7: Biohazard</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png"class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3> 
                            <br><b>Resident Evil 7 เป็นผลงานเกมจากทาง Capcom ที่สร้างเสียงฮือฮาในงาน E3 2016 ที่ผ่านมา ด้วยภาพลักษณ์ที่สยดสยอง ความกดดันที่ถาโถมใส่คนเล่นจนพาลหัวใจจะวายตายคาเครื่อง มีกำหนดลงให้ PC / PS4 / XboxOne และ PlayStation VR ตัวเกมจะถูกนับเป็นภาคหลักของซีรี่ยส์ Resident Evil อย่างเป็นทางการ ที่เปลี่ยนรูปแบบการเล่นจากแนวยิงแหลกแจกกระสุนตั้งแต่ภาค 4-5-6 มาเป็นแนวสยองขวัญเอาตัวรอดเต็มสูบ ซึ่งพัฒนาภายใต้แนวคิด “opens the door to a trulty terrifying horror experience.” หรือ “เปิดประตูสู่ประสบการณ์สยองขวัญที่แท้จริง” และตัวเกมจะใช้เอนจิ้นตัวใหม่ที่ชื่อ “RE Engine” ในการพัฒนาซึ่งทำมาเพื่อซัพพอร์ทระบบ PlayStation VR  นั่นเอง</br></b>
                          <h3>==== ตัวอย่างเกมส์ ====</h3> 
						  <br><iframe width="560" height="315" src="https://www.youtube.com/embed/dR1iZkGhznU" frameborder="0" allowfullscreen></iframe>
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
                            <h2>NBA 2K17 Legend Edition</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>ความพิเศษของ NBA 2K17 ที่แน่นอนอย่างหนึ่งก็คือ จะมีรุ่น Legend Edition เพื่อเป็นเกียรติสำหรับ Kobe Bryant ที่จะเกษียณอายุจากผู้เล่นอาชีพในเดือนเมษายน 2016 ซึ่งผู้ซื้อจะสามารถสังเกตได้จากหน้าปกที่เป็นรูปของ Bryant พร้อมทั้งโบนัสพิเศษหลายอย่างทั้งของแจกเพิ่มเติมและ Digital Bonus อีกด้วย นอกจากนี้ Kobe Bryant ยังจะได้เป็นแบบปกของ NBA 2K10 รุ่น Standard Edition พร้อมกับ Paul George จาก Indiana Pacers ซึ่งสาเหตุที่ George ได้รับเลือกก็มีการคาดการณ์กันว่าเป็นเพราะเขาเป็นแฟนเกม NBA 2K และผู้พัฒนาอย่าง Visual Concepts ก็ยังต้องการผู้เล่นที่มีรูปแบบการเติบโตเหมือนกับ Kobe Bryant

ในขณะที่ Kevin Durant ที่ประกาศว่าเขากำลังจะย้ายไปร่วมทีม Golden State Warriors ซึ่งในขณะนี้ทีมกำลังทำผลงานได้ดีด้วยการเอาชนะได้ถึง 73 เกมในฤดูกาล 2015-16 โดยมีขุมกำลังสำคัญคือ LeBron James ซึ่งนั่น็ทำให้การจัดการ Competitive Balance ของ Durant กับ  Warriors อาจมีปัญหา เพราะในทีม Warriors มีผู้เล่นที่ได้เรตคะแนนเกิน 90 อยู่แล้ว 3 คน หากเพิ่ม Durant ที่มีเรตคะแนนอยู่ที่ 94 จะทำให้ Warriors มีผู้เล่นที่มีเรตคะแนนเกิน 90 อยู่ถึง 4 คนซึ่งไม่เคยปรากฎมาก่อนในเกม ซึ่งก็ต้องดูกันว่าทางผู้พัฒนาจะจัดการอย่างไรกับปัญหานี้

รายละเอียดอื่นๆของ NBA 2k17 ยังไม่ได้มีการเปิดเผยออกมามากนัก ที่เห็นได้ชัดในขณะนี้ก็คือเกมน่าจะมีระบบสแกนใบหน้าที่ดีขึ้นกว่าเดิม</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/ZiuZ8DlkNrU" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Grand Theft Auto V</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>ชื่อเสียงของเกมนี้อยู่ที่ภาพสวย ๆ กินสเป็กเครื่องหนัก ๆ ซึ่งเรื่องของภาพนั้นสวยขึ้นจริงครับ มีการเพิ่มรายละเอียดมากมายจากเวอร์ชัน console รุ่นเก่า ไม่ว่าจะเป็นระบบแสง-เงาที่ดูสมจริงมากขึ้น พื้นผิววัตถุต่าง ๆ มีรายละเอียดมากขึ้น การเบลอภาพพื้นหลัง (depth of field) ที่ดูสวยและสมจริงขึ้น และอีกหลาย ๆ อย่างที่ปรับปรุงขึ้นมาสำหรับ PC และ console รุ่นใหม่ ๆ ตามที่ได้เห็นการเปรียบเทียบกันไปแล้วระหว่าง PS3 และ PS4 แต่สิ่งที่น่าประทับใจและเหนือความคาดหมายที่สุดคือ ตัวเกมกินสเป็กไม่สูงจริง ๆ ครับ ตามที่เคยประกาศไว้ตั้งแต่ต้นปี เครื่องที่ผมใช้เล่นคือโน๊ตบุ๊ก Dell Inspiron 7447 (รุ่นเดียวกันกับจ่าพิชิต) ที่ใช้ชิปกราฟิก Nvidia Geforce GTX850M ซึ่งก็ไม่ใช่รุ่นที่จะแรงอะไรมากมายถ้าเทียบกับรุ่นใหญ่ ๆ</br><b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/nBS3MUWrfGg" frameborder="0" allowfullscreen></iframe>
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
                            <h2>Call of Duty: Infinite Warfare</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>เกม Call of Duty: Infinite Warfare น่าจะเป็นเกมที่มีการพัฒนาที่น้อยที่สุด ตรงนี้อย่าเข้าใจผิดนะครับ...ตัวเกมยังคงมาตรฐานของซีรี่ส์เอาไว้เพียบพร้อม เพียงแต่ทีมงานคิดว่าซีรีส์นี้กำลังเผชิญหน้ากับปัญหา Franchise Fatigue คือออกมาถี่เกินไปและเหมือนเดิมมากเกินไป สำหรับแฟนพันธุ์แท้อาจจะยังมีความสุขกับมันได้ ทว่าปีนี้ยังมี FPS อื่นๆ ที่น่าสนใจกว่าเป็นตัวเลือกอีกเพียบ</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/wtm52acC75I" frameborder="0" allowfullscreen></iframe>
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
                            <h2>The Sims 4</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-centered" alt=""  height="500">
							<h3>==== รายละเอียดเกมส์ ====</h3>
                            <br><b>The Sims 4 คือเกมจำลองชีวิตที่มีคนตั้งตารอมหาศาลซึ่งให้คุณเล่นสนุกกับชีวิตได้อย่างที่ไม่เคยมีมาก่อน 
                            สร้างและควบคุมซิมที่มีความฉลาดมากขึ้นได้ทั้งรูปร่างหน้าตา ลักษณะนิสัย พฤติกรรม และอารมณ์ความรู้สึกของพวกเขา สนุกกับการสร้างสรรค์ใหม่ๆ 
                            เมื่อคุณสร้างซิมด้วยเครื่องมือ Create A Sim อันทรงพลังและออกแบบบ้านดีไซน์สวยด้วยโหมดสร้างแบบแบ่งตามห้องที่ใช้ง่ายสุดๆ
							ใช้คุณสมบัติ The Gallery เพื่อดู แบ่งปัน และดาวน์โหลดคอนเทนต์ใหม่ๆ ได้โดยไม่ต้องออกจากเกมอีกต่อไป
							ควบคุมความคิด ร่างกาย และจิตใจซิมของคุณแล้วสำรวจการเล่นที่เป็นไปได้แบบใหม่ๆ ในละแวกบ้านที่สดใสมีชีวิตชีวาซึ่งจะทำให้คุณได้พบกับเรื่องราวสุดสนุกของชีวิต</br></b>
                            <h3>==== ตัวอย่างเกมส์ ====</h3> 
							<br><iframe width="560" height="315" src="https://www.youtube.com/embed/UEuw_jQLJYo" frameborder="0" allowfullscreen></iframe>
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
