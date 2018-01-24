<!DOCTYPE html>
<html lang="en">
<head>

<!-- page title -->
<title>Intent - Minimal Portfolio Template</title>

<!-- theme css --> 
<link href="boxed/assets/css/structure.css" rel="stylesheet" type="text/css" />
<link href="boxed/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="boxed/assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!-- author -->
<meta name="author" content="Lucid Themes">
<!-- responsive meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">

<!-- google fonts used -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>


<body class="page-template-home boxed">

<!-- header -->
<header id="site-header" class="fixed-header">
	
	<div class="header-main">
		<div class="container">

			<div class="header-inner clearfix">
		
				<div class="medium-header-container">
				
					<!-- Site logo -->
					<a href="index.php" id="site-logo"></a>
					
					<!-- Mobile burger icon -->
					<div id="mobile-nav-button" class="hidden-desk hidden-tab">
						<div id="mobile-nav-icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					
				</div>
				
				<!-- header nav menu -->
				<nav id="header-nav">
				
					<?php
					
						$referral_link = "";
						$purchase_url = "";
					
						if(isset($_GET['ref'])){
							$referral_link = $_GET['ref'];
							
						}
						
						if($referral_link != ""){
							
							if($referral_link == "cm"){
								$purchase_url = "https://creativemarket.com/LucidThemes/809850-Intent-Minimal-Portfolio-Template?u=LucidThemes";
							} else if($referral_link == "etsy"){
								$purchase_url = "https://www.etsy.com/uk/listing/455940666/intent-minimal-portfolio-html-template";
							}
							
						} else {
							$purchase_url = "http://www.lucid-themes.com/themes/html/intent-minimal-portfolio-template";
						}
						
					?>
				
					<ul id="nav-ul" class="menu font-montserrat-reg clearfix">
					
						<li class="menu-item">
							<a href="boxed/index.html">Boxed</a>
						</li>
						
						<li class="menu-item">
							<a href="full/index.html">Full Width</a>
						</li>
						
						<li class="menu-item">
							<a href="<?php echo $purchase_url; ?>">Purchase</a>
						</li>
						
					</ul>
				
				</nav>
				
			</div>
			
		</div>
	</div>

</header>


<div id="main-content">

	<!-- version section -->
	<section class="version-section">
		<div class="container">
		
			<div class="section-inner no-border">
			
				<ul class="row">
				
					<!-- boxed version -->
					<li class="col-xlarge-6 col-medium-6">
					
						<div class="section-title">
							<h2 class="font-montserrat-reg">Boxed</h2>
							<p class="font-opensans-reg">Boxed width layout</p>
						</div>

						<a href="boxed/index.html"  class="portfolio-item version-item">
							<img src="boxed/assets/img/version_boxed.jpg" class="image" alt="" />
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<h3 class="font-montserrat-reg">View Demo</h3>
								</div>
							</div>
						</a>
						
					</li>
					
					<!-- full width version -->
					<li class="col-xlarge-6 col-medium-6">
						
						<div class="section-title">
							<h2 class="font-montserrat-reg">Full Width</h2>
							<p class="font-opensans-reg">Full width layout</p>
						</div>
					
						<a href="full/index.html"  class="portfolio-item version-item">
							<img src="boxed/assets/img/version_full_width.jpg" class="image" alt="" />
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<h3 class="font-montserrat-reg">View Demo</h3>
								</div>
							</div>
						</a>
						
					</li>
				
				</ul>
			
			</div>
		
		</div>
	</section>
	
</div>


<!-- footer -->
<footer>

	<div id="footer-main">
		<div class="container">
			
			<div id="footer-inner" class="clearfix">
			
				<!-- footer social icons -->
				<ul id="footer-social">
					<li><a href="https://www.facebook.com/LucidThemes/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/Lucid_Themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/lucid_themes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>
				
				<!-- footer right section -->
				<div id="footer-right">
				
					<!-- copyright text -->
					<p id="footer-copyright" class="font-montserrat-reg">Copyright &copy; 2016</p>
				
					<!-- scroll to top -->
					<div id="scroll-top">
						<span class="fa fa-angle-up"></span>
					</div>
				
				</div>
			
			</div>
			
		</div>
	</div>

</footer>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="boxed/assets/js/main.js"></script>

</body>
</html>