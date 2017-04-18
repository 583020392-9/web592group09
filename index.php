<!doctype html>
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
<!-- =======================================================
    Theme Name: Groovin
    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<script src="assets/js/modernizr.custom.js"></script>
</head>
<body>
<header>

<!-- navbar--> <?php include("navbar.php"); ?>

</header>
<!-- section intro -->
<section id="intro">
			<ul id="slippry-slider">
			  <li>
				<a href="#slide1"><img src="assets/img/slide/1.jpg" alt="Welcome to Groovin!"></a>
			  </li>
			  <li>
				<a href="#slide2"><img src="assets/img/slide/2.jpg"  alt="This is an awesome bootstrap template"></a>
			  </li>
			  <li>
				<a href="#slide3"><img src="assets/img/slide/3.jpg" alt="Check it out, you are going to <span class='red'>♥</span> it :)"></a>
			  </li>
			</ul>
</section>
<!-- end intro -->

<!-- section works -->
<?php include("work.php"); ?>
<!-- section works -->

<!-- Section about -->
<?php include("aboutUs.php"); ?>
<!-- end section about -->

<!-- section contact -->

			<!-- start contact form -->
            <?php include("contact.php"); ?>
            <!-- END contact form -->
        

<!-- end section contact -->
<footer>
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>	
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter">
					<p>
						 &copy; Groovin Theme - All right reserved
					</p>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin
                        -->
                        <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>
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
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
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