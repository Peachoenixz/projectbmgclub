<?php
session_start();
mysql_connect("localhost","admin_order","petuyio001");
mysql_select_db("admin_order");
$strSQL = "SELECT * FROM product";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>
	<!DOCTYPE html>
	<html dir="ltr" lang="en-US">
	<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />	
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />
	<!--  Pricing Tables Style  -->
	<link rel="stylesheet" href="css/components/pricing-table.css" type="text/css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<!-- Document Title
	============================================= -->
	<title>BMG CLUB | ไลฟ์สไตล์เหนือระดับ สำหรับคนพิเศษ ให้ได้ทุกสิ่ง เป็นจริงทุกเรื่อง</title>
	</head>

	<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.php" style="font-family: 'Kanit', sans-serif;">หน้าแรก</a></li>
							<li><a href="faqs.php">FAQs</a></li>
							<li><a href="contact-index.php" style="font-family: 'Kanit', sans-serif;">ติดต่อเรา</a></li>
							<li><a href="login-register.php" style="font-family: 'Kanit', sans-serif;">เข้าสู่ผังองค์กร</a>
								<div class="top-link-section">
									<form action="http://minerygold.com/member/index.php" method="post" name="Form1" id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="text" name="usercode" class="form-control" style="font-family: 'Kanit', sans-serif;" placeholder="รหัสสมาชิก" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" name="password" class="form-control" style="font-family: 'Kanit', sans-serif;" placeholder="รหัสผ่าน" required="">
										</div>
										<button class="btn btn-danger btn-block" type="submit" style="font-family: 'Kanit', sans-serif;" value="Login" name="B1" >เข้าสู่ระบบ</button>
									</form>
								</div>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="https://fb.com/BMGCLUB.SHOP" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/bmg_club.shop/" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="https://soundcloud.com/bmgclub" class="si-soundcloud"><span class="ts-icon"><i class="icon-soundcloud"></i></span><span class="ts-text">SoundCloud</span></a></li>
							<li><a href="https://line.me/ti/p/%40hom7339v" class="si-android"><span class="ts-icon"><i class="icon-pinboard"></i></span><span class="ts-text">Line Official</span></a></li>
							<li><a href="https://plus.google.com/+BMGCLUBStudio/" class="si-gplus"><span class="ts-icon"><i class="icon-gplus"></i></span><span class="ts-text" style="font-family: 'Kanit', sans-serif;">Google+</span></a></li>
							<li><a href="tel:062-514-9229" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text" style="font-family: 'Kanit', sans-serif;">โทร 062-514-9229</span></a></li>
							<li><a href="mailto:contact@bmg-club.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">contact@bmg-club.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="BMG CLUB Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="BMG CLUB Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li class="current"><a href="index.php"><div style="font-family: 'Kanit', sans-serif;">หน้าแรก</div><span>Lets Start</span></a></li>
							<!-- Mega Menu
							============================================= -->
							<li><a href="business-index.php"><div style="font-family: 'Kanit', sans-serif;">นักธุรกิจ BMG CLUB</div><span>Out of the Box</span></a>
							<ul>
								<li><a href="investment.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-suitcase"></i> ร่วมลงทุนธุรกิจ BMG CLUB</div></a></li>
								<li><a href="privilege.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-dollar"></i> สิทธิประโยชน์</div></a></li>
								<li><a href="opportunitie.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-bar-chart"></i> โอกาสทางธุรกิจ</div></a></li>
								<li><a href="mission-ethics.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-book"></i> พันธกิจและจรรยาบรรณ</div></a></li>
							</ul>	
							</li><!-- .mega-menu end -->
							<li class="mega-menu"><a href="vstar-index.php"><div style="font-family: 'Kanit', sans-serif;">V-STAR</div></a>
								<div class="mega-menu-content style-2 clearfix" style="background-image: url('images/vstar/vstar-menu.jpg'); background-repeat: no-repeat; background-position: right bottom;">
									<ul class="mega-menu-column col-lg-2 col-md-3">
										<li>
											<div class="widget clearfix">

												<div class="product iproduct clearfix">
													<div class="product-image">
														<a href="diamond-star-Pranatchai.php"><img src="images/vstar/diamond/vstar-pranatchai-diamond.png" alt="ประณัฐชัย"></a>
														<div style="font-family: 'Kanit', sans-serif;">Diamond-S ประณัฐชัย</div>
													</div>
												</div>
												<div class="product iproduct clearfix">
													<div class="product-image">
														<a href="diamond-star-Karnarong.php"><img src="images/vstar/diamond/vstar-Karnarong-diamond.png" alt="การณ์รงค์"></a>
														<div style="font-family: 'Kanit', sans-serif;">Diamond-S การณ์รงค์</div>
													</div>
													
												</div>

											</div>
											
										</li>
									</ul>
										<ul class="mega-menu-column col-lg-2 col-md-3">
										<li>
											<div class="widget clearfix">

												<div class="product iproduct clearfix">
													<div class="product-image">
														<a href="diamond-star-Tasani.php"><img src="images/vstar/diamond/vstar-Tasani-diamond.png" alt="ทัศนีย์"></a>
														<div style="font-family: 'Kanit', sans-serif;">Diamond-S ทัศนีย์</div>
													</div>
		
												</div>
												<div class="product iproduct clearfix">
													<div class="product-image">
														<a href="diamond-star-Sakorn.php"><img src="images/vstar/diamond/vstar-Sakorn-diamond.png" alt="สาคร"></a>
														<div style="font-family: 'Kanit', sans-serif;">Diamond-S สาคร</div>
													</div>
												
												</div>

											</div>
											
										</li>
									</ul>
									
									<ul class="mega-menu-column col-md-2">
										<li class="mega-menu-title" style="font-family: 'Kanit', sans-serif;"><a href="vstar-index.php"><div>V-STAR</div></a>
											<ul>
												<li><a href="about-vstar.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-comments"></i>เกี่ยวกับ V-STAR System</div></a></li>
												<li><a href="about-status-vstar.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-star"></i>ตำแหน่งต่าง ๆ ของ V-STAR System</div></a></li>
												<li><a href="why-vstar.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-question"></i>ทำไมต้อง V-STAR System</div></a></li>
												<li><a href="about-income-vstar.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-dollar"></i>รายได้ในตำแหน่งต่าง ๆ ของ V-STAR System</div></a></li>
												<li><a href="about-up-status-vstar.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-user"></i>วิธีการขึ้นตำแหน่งต่าง ๆ ของ V-STAR System</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-2 noleftborder">
										<li class="mega-menu-title" style="font-family: 'Kanit', sans-serif;"><a href="honor-index.php"><div style="font-family: 'Kanit', sans-serif;">เกียติยศ</div></a>
											<ul>
												<li><a href="honor-sds.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-diamond"></i>Super Diamond Star</div></a></li>
												<li><a href="honor-ds.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-diamond"></i>Diamond Star</div></a></li>
												<li><a href="honor-ss.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-star"></i>Super Star</div></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</li>
							
							<li><a href="office-index.php"><div style="font-family: 'Kanit', sans-serif;">สาขา BMG CLUB</div><span>Awesome Works</span></a></li>
							
							<li><a href="shop-index.php"><div style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์</div></a>
							<ul>
								<li><a href="shop-index.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-shopping-cart"></i> ผลิตภัณฑ์</div></a></li>
								<li><a href="check-product-index.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-check"></i> ตรวจสอบสถานะการจัดส่ง</div></a></li>
								<li><a href="why-product-index.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-question"></i> ทำไมต้องผลิตภัณฑ์ BMG CLUB?</div></a></li>
								<li><a href="reviews-product-index.php"><div style="font-family: 'Kanit', sans-serif;"><i class="icon-comments"></i> Reviews ผลิตภัณฑ์ BMG CLUB</div></a></li>
							</ul>	
							</li>
							<li class="mega-menu" style="font-family: 'Kanit', sans-serif;"><a href="contact-index.php"><div style="font-family: 'Kanit', sans-serif;">ติดต่อเรา</div></a>
								<div class="mega-menu-content style-2 clearfix" style="background-image: url('images/contact/contact-menu.jpg'); background-repeat: no-repeat; background-position: right bottom;">
									<ul class="mega-menu-column col-md-3">
										<li>
											<div class="widget visible-lg visible-md clearfix">

												<h4 style="font-family: 'Kanit', sans-serif;">ที่ตั้งสำนักงานใหญ่</h4>

												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15499.0930612662!2d100.6487266!3d13.7925374!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38d352203771a83e!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LmD4Lir4LiN4LmIIEJNRyBDTFVC!5e0!3m2!1sth!2sth!4v1465934599563" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

											</div>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-2">
										<li class="mega-menu-title"><a href="Service.php"><div style="font-family: 'Kanit', sans-serif;">บริการ</div></a>
											<ul>
												<li><a href="contact.php"><div style="font-family: 'Kanit', sans-serif;">ติดต่อเรา BMG Hotline</div></a></li>
												<li><a href="about-team.php"><div style="font-family: 'Kanit', sans-serif;">เกี่ยวกับทีมงาน BMG CLUB</div></a></li>
												<li><a href="about-jobs.php"><div style="font-family: 'Kanit', sans-serif;">เกี่ยวกับงาน BMG CLUB</div></a></li>
												<li><a href="office.php"><div style="font-family: 'Kanit', sans-serif;">เกี่ยวกับ สาขา BMG CLUB</div></a></li>
												<li><a href="report.php"><div style="font-family: 'Kanit', sans-serif;">แจ้งปัญหาต่าง ๆ</div></a></li>
												<li><a href="sitemap.php"><div style="font-family: 'Kanit', sans-serif;">Sitemap</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-6">
										<li>
											<div class="widget clearfix">

												<h4 style="font-family: 'Kanit', sans-serif;">ข้อมูลสถานที่ และ ติดต่อ</h4>

												<address>
													<strong style="font-family: 'Kanit', sans-serif;">ที่อยู่ :</strong><br>
													นวมินทร์ ซอย 71<br>
													กรุงเทพมหานคร  , 10230<br>
													ประเทศไทย<br>
												</address>
												<abbr title="เบอร์โทรศัพท์"><strong style="font-family: 'Kanit', sans-serif;">เบอร์โทรศัพท์ :</strong></abbr> 062-514-9229<br>
												<abbr title="อีเมล"><strong style="font-family: 'Kanit', sans-serif;">อีเมล:</strong></abbr> contact@bmg-club.com

												<div class="bottommargin-sm"></div>

												<a href="https://www.facebook.com/BMGCLUB.SHOP/" class="social-icon si-small si-colored si-facebook" title="Facebook">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="https://www.instagram.com/bmg_club.shop/" class="social-icon si-small si-colored si-instagram" title="Instagram">
													<i class="icon-instagram"></i>
													<i class="icon-instagram"></i>
												</a>
												<a href="https://plus.google.com/+BMGCLUBStudio/" class="social-icon si-small si-colored si-gplus" title="Instagram">
													<i class="icon-gplus"></i>
													<i class="icon-gplus"></i>
												</a>
												<a href="soundcloud.com/bmgclub" class="social-icon si-small si-colored si-soundcloud" title="Instagram">
													<i class="icon-soundcloud"></i>
													<i class="icon-soundcloud"></i>
												</a>
												

											</div>
										</li>
									</ul>
								</div>
							</li>
						</ul>

						<!-- Top Cart
						============================================= -->
<?php
session_start();
mysql_connect("localhost","admin_bmgclub","petuyio001");
mysql_select_db("orders");
$strSQL = "SELECT * FROM product";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>
<?php
for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
$sum = $sum + $_SESSION["strQty"][$i];
?>
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span><?php echo number_format($sum);?></span></a>
							
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4 style="font-family: 'Kanit', sans-serif;">ตะกร้าสินค้า</h4>
								</div>

<?php
$strSort = $_POST["mySort"];
  {
  $Total = 0;
  $SumTotal = 0;
  $sum = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysql_query($strSQL)  or die(mysql_error());
		$objResult = mysql_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$BVall = $_SESSION["strQty"][$i] * $objResult["BV"];
		$sum = $sum + $_SESSION["strQty"][$i];
		$SumTotal = $SumTotal + $Total;
		$SumBV = $SumBV + $BVall
	  ?>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="<?php echo $objResult["Linkcart"];?>"><img src="images/shop/small/<?php echo $objResult["Smallpicture"];?>" alt="<?php echo $objResult["Smallalt"];?>" /></a>
										</div>
										<div class="top-cart-item-desc" style="font-family: 'Kanit', sans-serif;">
											<a href="<?php echo $objResult["Linkcart"];?>"><?php echo $objResult["ProductName"];?></a>
											<span class="top-cart-item-price"><?php echo $objResult["Price"];?>฿ / <?php echo $objResult["BV"];?> BV</span>
											<span class="top-cart-item-quantity">x<?php echo $_SESSION["strQty"][$i];?></span>
										</div>
									</div>
								</div>
								
								<?php
	  }
  }
  ?>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price"> <?php echo number_format($SumTotal,2);?> ฿ </br><?php echo number_format($SumBV);?> BV</span>
									<button class="button button-3d button-small nomargin fright" href="show-product.php" style="font-family: 'Kanit', sans-serif;">ดูทั้งหมด</button>
								</div>
																  
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
	

				<!-- ประธาน-->
				<div class="section dark nomargin noborder" style="background-image: url('images/about/index-bmgclub.jpg');">
				<div class="container clearfix">
					

						<div class="col_half nobottommargin">&nbsp;</div>

						<div class="col_half nobottommargin col_last">

							<div class="heading-block center">
								<h4 style="font-family: 'Kanit', sans-serif;">สุขภาพดี เที่ยวฟรี มีเงินใช้</h4>
								<span style="font-family: 'Kanit', sans-serif;">ให้ BMG CLUB ดูแล</span>
							</div>

							<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
										<div class="testi-image-president">
										<a href="president-minery.php"><img src="images/testimonials/minery-p.jpg" alt=" ปิยสุนีย์ ชัยปาณี"></a>
										</div>
											<div class="testi-content">
												<p style="font-family: 'Kanit', sans-serif;">ยินดีต้อนรับสู่ BMG CLUB ดิฉันเองรู้สึกยินดีเป็นอย่างยิ่ง ดิฉันอยากจะบอกทุก ๆ ท่านว่าจะเป็นโอกาสอันดียิ่งของทุก ๆ ท่าน ที่จะได้เข้าร่วมโครงการที่ยิ่งใหญ่ ดิฉันมั่นใจว่าใน BMG CLUB นี้ จะตอบโจทย์ในทุกสิ่งของชีวิต เรื่องเงิน และ ผลิตภัณฑ์ที่ดี และที่เน้นที่สุดความสำเร็จและความมั่นคง . </p>
												<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
													<span style="font-family: 'Kanit', sans-serif; font-size: 15px; color: white;">คุณ ทัชชะ - ปิยสุนีย์ ชัยปาณี.</span>
													<span style="font-family: 'Kanit', sans-serif;">ประธานบริษัท Minery Gold ทายาทตระกูล ปราสาททองโอสถ.</span>
												</div>
											</div>
										</div>
										<div class="slide">
										<div class="testi-image-president">
										<a href="president-bmgclub.php"><img src="images/testimonials/bmgclub-p.jpg" alt="เอกวัฒน์ อำไพ"></a>
										</div>
											<div class="testi-content">
												<p style="font-family: 'Kanit', sans-serif;">ผมเชื่อมั่นในระบบ V-STAR SYSTEM โดยจะดำเนินงานในรูปแบบธุรกิจเครือข่ายสีขาวตามจรรยาบรรณที่กำหนดไว้ และ มีพันธกิจร่วมกันว่าเราจะพาทุกคนสำเร็จไปด้วยกัน ด้วยแรงบันดาลใจและพลังในการทำงานของเรา ชาว BMG CLUB จะได้รับ 800,000 ภายใน 11 เดือน แน่นอน.</p>
												<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
													<span style="font-family: 'Kanit', sans-serif; font-size: 15px; color: white;">คุณ เอกวัฒน์ อำไพ.</span>
													<span style="font-family: 'Kanit', sans-serif;">ประธาน BMG CLUB.</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image-president">
											<a href="president-doctor-bmgclub.php"><img src="images/testimonials/bmgclub-pr.jpg" alt="ภัทรวลัญช์ อำไพ"></a>
											</div>
											<div class="testi-content">
												<p style="font-family: 'Kanit', sans-serif;"> ดิฉันเชื่อว่าธุรกิจสีขาว BMG CLUB จะทำให้ท่านประสบความสำเร็จได้อย่างแน่นอน และ จะช่วยให้ท่าน สุขภาพดี เที่ยวฟรี มีเงินใช้ พร้อมทีมงานคุณภาพที่จะช่วยให้ท่านสำเร็จตามเป้าหมายได้อย่างรวดเร็ว .</p>
												<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
													<span style="font-family: 'Kanit', sans-serif; font-size: 15px; color: white;">คุณ ภัทรวลัญช์ อำไพ.</span>
													<span style="font-family: 'Kanit', sans-serif;">รองประธาน BMG CLUB.</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

					</div>

							</div>
				</div>
				<!-- จบประธาน-->			
				
		<!-- Site Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">ผู้บริหารงานมืออาชีพ</h2>
						<span style="font-family: 'Kanit', sans-serif;">ความมั่นคงของธุรกิจ จะต้องพึ่งพาผู้นำที่มีคุณภาพ.</span>
					</div>

					<div class="container clearfix">

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/vstar/diamond/vstar-pranatchai-diamond.png" alt="ประณัฐชัย คำภิรานนท์ สมาชิก BMG CLUB">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4 style="font-family: 'Kanit', sans-serif;">ประณัฐชัย คัมภิรานนท์</h4><span style="font-family: 'Kanit', sans-serif;">Super Diamond Star</span></div>
									<div class="team-content" style="font-family: 'Kanit', sans-serif;">พลังสานใจให้เป็นหนึ่งเดียวสู่ระบบ V-STARS ที่แข็งแกร่งและมั่นคงแห่งเดียวในโลกที่ BMG.CLUB ธุรกิจสีขาวเท่านั้น.</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/vstar/diamond/vstar-Karnarong-diamond.png" alt="การณรงค์ เพ็ชรมณี สมาชิก BMG CLUB">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4 style="font-family: 'Kanit', sans-serif;">ร้อยตรี การณรงค์ เพ็ชรมณี</h4><span style="font-family: 'Kanit', sans-serif;">Diamond Star</span></div>
									<div class="team-content" style="font-family: 'Kanit', sans-serif;">BMG CLUB ธุรกิจของบริษัท มินเนอรี่โกลด์ ตระกูลปราสาททองโอสถ ผลิตภัณฑ์คุณภาพเยี่ยมเห็นผลจริง ได้ใช้กับตัวเองและเครือญาติ ผลิตภัณฑ์ที่ดูแลสุขภาพภายใน ทำให้ระบบร่างกายทำงานเป็นปกติ.</div>
								</div>
							</div>

						</div>

						<div class="clear"></div>

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/vstar/diamond/vstar-Tasani-diamond.png" alt="ทัศนีย์ ใจมั่น สมาชิก BMG CLUB">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4 style="font-family: 'Kanit', sans-serif;">ทัศนีย์ ใจมั่น</h4><span style="font-family: 'Kanit', sans-serif;">Diamond Star</span></div>
									<div class="team-content" style="font-family: 'Kanit', sans-serif;">สุดยอดอาหารเสริมจาก BMG CLUB by Minery Gold และ สุดยอดแผนธุรกิจ เป็นธุรกิจสีขาวที่ดีที่สุดในประเทศไทยตอนนี้.</div>
								</div>
							</div>

						</div>

						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<img src="images/vstar/diamond/vstar-Sakorn-diamond.png" alt="สาคร ชำนาญโพธิ์ สมาชิก BMG CLUB">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4 style="font-family: 'Kanit', sans-serif;">สาคร ชำนาญโพธิ์</h4><span style="font-family: 'Kanit', sans-serif;">Diamond Star</span></div>
									<div class="team-content" style="font-family: 'Kanit', sans-serif;">ธุรกิจ BMG CLUB ไม่เสียความดี ไม่เสียวาจา ไม่เสียเพื่อน BMG CLUB เป็นโอกาสที่ดีที่สุดสร้างความสง่างามและงดงาม ให้ชีวิต.</div>
								</div>
							</div>

						</div>
						
						<div class="clear"></div>

						<div class="fancy-title title-border title-center topmargin-sm">
							<h4 style="font-family: 'Kanit', sans-serif;">พวกเราสำเร็จ และ คุณต้องสำเร็จไปกับเรา</h4>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#D01C1C" data-size="150" data-percent="100" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5 style="font-family: 'Kanit', sans-serif;">สุขภาพดี</h5>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#1770A4" data-size="150" data-percent="100" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5 style="font-family: 'Kanit', sans-serif;">เที่ยวฟรี</h5>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<div class="rounded-skill" data-color="#6A89AA" data-size="150" data-percent="100" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5 style="font-family: 'Kanit', sans-serif;">มีเงินใช้</h5>
						</div>

						<div class="col_one_fourth nobottommargin center col_last">
							<div class="rounded-skill" data-color="#248673" data-size="150" data-percent="100" data-width="2" data-animate="3000">
								<div class="counter counter-inherit"><span data-from="1" data-to="100" data-refresh-interval="50" data-speed="3000"></span>%</div>
							</div>
							<h5 style="font-family: 'Kanit', sans-serif;">ประสบความสำเร็จ</h5>
						</div>

					</div>

			</div>
			
			<div class="section nobottommargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"ผู้บริหารสายงานที่มีคุณภาพ จะ พาคุณไปสู่ความสำเร็จได้อย่างรวดเร็ว"</h2>
					</div>
			</div>
			
			<div class="bottommargin-lg dark" style="padding: 60px 0; background-image: url('images/parallax/calendar.jpg'); height: auto;" data-stellar-background-ratio="0.5">

					<div class="container clearfix">

						<div class="events-calendar">
							<div class="events-calendar-header clearfix">
								<h2>ตารางกิจกรรม BMG CLUB</h2>
								<h3 class="calendar-month-year">
									<span id="calendar-month" class="calendar-month"></span>
									<span id="calendar-year" class="calendar-year"></span>
									<nav>
										<span id="calendar-prev" class="calendar-prev"><i class="icon-chevron-left"></i></span>
										<span id="calendar-next" class="calendar-next"><i class="icon-chevron-right"></i></span>
										<span id="calendar-current" class="calendar-current" title="Got to current date"><i class="icon-reload"></i></span>
									</nav>
								</h3>
							</div>
							<div id="calendar" class="fc-calendar-container"></div>
						</div>


					</div>

				</div>
				

				
			
			<div class="container clearfix">
			<div class="postcontent nobottommargin">
				<div class="tabs bottommargin-lg clearfix" id="tab-news">

							<ul class="tab-nav clearfix">
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-1"><i class="icon-rss"></i><span class="hidden-xs"> ข่าวสารทั่วไป</span></a></li>
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-2"><i class="icon-calendar"></i><span class="hidden-xs"> กิจกรรม</span></a></li>
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-3"><i class="icon-star"></i><span class="hidden-xs"> อีเว้นท์</span></a></li>
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-4"><i class="icon-user"></i><span class="hidden-xs"> CSR</span></a></li>
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-5"><i class="icon-facetime-video"></i><span class="hidden-xs"> วีดีโอ</span></a></li>
								<li style="font-family: 'Kanit', sans-serif;"><a href="#tabs-news-6"><i class="icon-music"></i><span class="hidden-xs"> เพลง</span></a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="tabs-news-1">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<a href="sticker-line-movement-news.php"><img class="image_fade" src="images/magazine/news-line-bmgclub.jpg" alt="Image"></a>
											</div>
											<div class="entry-title">
												<h3><a href="sticker-line-movement-news.php" style="font-family: 'Kanit', sans-serif;">สติ๊กเกอร์ไลน์ BMG-CLUB วางจำหน่ายแล้ววันนี้</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="sticker-line-movement-news.php#comments"><i class="icon-comments"></i> 0</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 100%</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">BMG CLUB สร้างสรรค์สติ๊กเกอร์ออกมาเพื่อบอกถึงอารมณ์ต่าง ๆ ในขณะใช้ โปรแกรมสนทนา Line เพื่อให้การส่งมีสีสรรค์มากขึ้น</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="time-movement-news.php"><img class="image_fade" src="images/magazine/small/time-movement-news.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4 style="font-family: 'Kanit', sans-serif;"><a href="time-movement-news.php">ปรับเปลี่ยนเวลาการประชุม BMG CLUB</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
												</ul>
											</div>
										</div>
										<div class="spost clearfix">
											<div class="entry-image">
												<a href="news-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="time-movement-news.php">More+</a></h4>
												</div>
											</div>
										</div>
								</div>
							</div>
								
								<div class="tab-content clearfix" id="tabs-news-2">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<a href="korea-bmgclub-activity.php"><img class="image_fade" src="images/magazine/korea-bmgclub.jpg" alt="Image"></a>
											</div>
											<div class="entry-title">
												<h3><a href="korea-bmgclub-activity.php" style="font-family: 'Kanit', sans-serif;">สุขภาพดี เที่ยวฟรี มีเงินใช้ ที่ เกาหลี</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="korea-bmgclub-activity.php#comments"><i class="icon-comments"></i> 0</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 95%</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">กิจกรรมใหม่จาก BMG CLUB มาแล้วจ้า ได้ เที่ยวฟรี สุขภาพดี มีเงินใช้ กันอีกแล้ว คราวนี้เราจัดเที่ยวฟรีถึงเกาหลีกันเลยทีเดียว อย่าพลาดโอกาสกันละ สมาชิก BMG CLUB รีบปิด VIP เพื่อไปท่องเที่ยวฟรีกับ BMG CLUB จ้า !</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="vietnam-bmgclub-activity.php"><img class="image_fade" src="images/magazine/small/vietnam-bmgclub-activity.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="vietnam-bmgclub-activity.php" style="font-family: 'Kanit', sans-serif;">สุขภาพดี เที่ยวฟรี มีเงินใช้ ที่ เวียดนาม</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
												</ul>
											</div>
										</div>
										<div class="spost clearfix">
											<div class="entry-image">
												<a href="activity-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="movement-activity-all.php">More+</a></h4>
												</div>
											</div>
										</div>

									</div>

								</div>
								
								<div class="tab-content clearfix" id="tabs-news-3">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe src="https://www.youtube.com/embed/azFlj0Ffn7I" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="singapore-movement-events.php" style="font-family: 'Kanit', sans-serif;">บรรยากาศ เที่ยวฟรี สุขภาพดี มีเงินใช้ ที่ สิงคโปร์-มาเลเซีย</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="singapore-movement-events.php#comments"><i class="icon-comments"></i> 13</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 95%</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">บรรยากาศ ท่องเที่ยวฟรี สุขภาพดี มีเงินใช้ ให้ BMG CLUB ดูแล ณ สิงคโปร์ เป็นทริปที่พิเศษ และ น่าสนใจเป็นอย่างมาก</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="hongkong-movement-events.php"><img class="image_fade" src="images/magazine/small/movie/hongkong-movement-events.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="hongkong-movement-events.php" style="font-family: 'Kanit', sans-serif;">บรรยากาศ เที่ยวฟรี สุขภาพดี มีเงินใช้ ที่ ฮ่องกง-เซิ้นเจิ้น</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
												</ul>
											</div>
										</div>
										
										<div class="spost clearfix">
											<div class="entry-image">
												<a href="events-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="events-activity-all.php">More+</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-content clearfix" id="tabs-news-4">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe src="https://www.youtube.com/embed/azFlj0Ffn7I" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="singapore-movement-events.php" style="font-family: 'Kanit', sans-serif;">บรรยากาศ เที่ยวฟรี สุขภาพดี มีเงินใช้ ที่ สิงคโปร์-มาเลเซีย</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="singapore-movement-events.php#comments"><i class="icon-comments"></i> 13</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 95%</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">บรรยากาศ ท่องเที่ยวฟรี สุขภาพดี มีเงินใช้ ให้ BMG CLUB ดูแล ณ สิงคโปร์ เป็นทริปที่พิเศษ และ น่าสนใจเป็นอย่างมาก</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="hongkong-movement-events.php"><img class="image_fade" src="images/magazine/small/movie/hongkong-movement-events.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="hongkong-movement-events.php" style="font-family: 'Kanit', sans-serif;">บรรยากาศ เที่ยวฟรี สุขภาพดี มีเงินใช้ ที่ ฮ่องกง-เซิ้นเจิ้น</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
													<li><i class="icon-heart3 text-danger"></i> 92%</li>
												</ul>
											</div>
										</div>
										
										<div class="spost clearfix">
											<div class="entry-image">
												<a href="events-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="events-activity-all.php">More+</a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
						
								<div class="tab-content clearfix" id="tabs-news-5">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe src="https://www.youtube.com/embed/dgE4LHHdMtc" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="variety-4-movement-video.php" style="font-family: 'Kanit', sans-serif;">Variety BMG CLUB ครั้งที่ 4</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="variety-4-movement-video.php#comments"><i class="icon-comments"></i> 13</a></li>
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-eye-open"></i> 6422 ผู้ชม</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">วีดีโอนี้จะเล่าเกี่ยวกับผลิตภัณฑ์ของ BMG CLUB ที่รักษาผู้ป่วยจากโรคร้าย ๆ ต่าง ๆ จนหายขาด หรือ บรรเทาลง.</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="variety-3-movement-video.php"><img class="image_fade" src="images/magazine/small/variety-3-movement-video.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="variety-3-movement-video.php" style="font-family: 'Kanit', sans-serif;">Variety BMG CLUB ครั้งที่ 3</a></h4>
												</div>
												<ul class="entry-meta clearfix">
													<li style="font-family: 'Kanit', sans-serif;"><i class="icon-user"></i> ผู้ชม</li>
												</ul>
											</div>
										</div>
										
										<div class="spost clearfix">
											<div class="entry-image">
												<a href="video-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="events-activity-all.php">More+</a></h4>
												</div>
											</div>
										</div>
								</div>
							</div>
								
								<div class="tab-content clearfix" id="tabs-news-6">

									<div class="col_three_fifth nobottommargin">
										<div class="ipost clearfix">
											<div class="entry-image">
												<iframe width="100%" height="250" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/267187793&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
											</div>
											<div class="entry-title">
												<h3><a href="bmg-vstar-movement-music.php" style="font-family: 'Kanit', sans-serif;">สานใจ BMG V-STAR <i class="icon-star3"></i> BMG CLUB</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li style="font-family: 'Kanit', sans-serif;"><i class="icon-calendar3"></i> 6 มิถุนายน 2559</li>
												<li><a href="bmg-vstar-movement-music.php#comments"><i class="icon-comments"></i> 13</a></li>
												<li class="color"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i></li>
												<li><i class="icon-heart3 text-danger"></i> 85%</li>
											</ul>
											<div class="entry-content">
												<p style="font-family: 'Kanit', sans-serif;">เพลงสานใจ BMG.V-STAR "คือพลังสานใจให้เป็นหนึ่งเดียวสู่ระบบ V-STARS ที่แข็งแกร่งและมั่นคงแห่งเดียวในโลกที่BMG.CLUB ธุรกิจสีขาวเท่านั้น"<br/>เนื้อหา คำร้อง.. เอกวัฒน์ อำไพ</br>เรียบเรียงและทำนอง.. ประณัฐชัย คัมภิรานนท์</br>ขับร้องโดยทีมงาน.. BMG.CLUB</p>
											</div>
										</div>
									</div>

									<div class="col_two_fifth col_last nobottommargin">

										<div class="spost clearfix">
											<div class="entry-image">
												<a href="music-movement-all.php"><img class="image_fade" src="images/magazine/small/more.jpg" alt="Image"></a>
											</div>
											<div class="entry-c">
												<div class="entry-title">
													<h4><a href="events-activity-all.php">More+</a></h4>
												</div>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>
					


				<div class="sidebar nobottommargin col_last">

						<div class="sidebar-widgets-wrap">
						<div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&appId=151167424983746&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
							<div class="widget clearfix">
							<div class="fb-page" 
  data-href="https://www.facebook.com/BMGCLUB.SHOP"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="true"
  data-show-posts="false"></div>
							</div>

							<div class="widget clearfix">

								<img class="aligncenter" src="images/magazine/ad-bmgclub-1.jpg" alt="">

						</div>
					</div>
				</div>
			
			</div>

			<div class="section nomargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"เข้าร่วมธุรกิจ BMG CLUB คลับ ของ มหาเศรษฐีพันล้าน."</h2>
					</div>
			</div>
				
			<div class="container clearfix">
			<div class="row clearfix">
					<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>
						<div class="col-lg-5">
							<div class="heading-block topmargin">
								<h1 style="font-family: 'Kanit', sans-serif;">เกี่ยวกับเรา BMG CLUB.</h1>
							</div>
							<p class="lead" style="font-family: 'Kanit', sans-serif;">BMG CLUB เป็นธุรกิจเครือข่ายสีขาว ที่สามารถตอบโจทย์ชีวิตของ ประชาชนในปัจจุบัน เราสามารถให้ท่านสำเร็จได้ง่าย ๆ ด้วยระบบ V-Star System ถ้าทำตามระบบของ BMG CLUB เรายอมรับว่าภายใน 11 เดือน ท่านจะได้รับเงิน 800,000 บาท.</p>
						</div>

						<div class="col-lg-7">

							<div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
								<img src="images/services/main-fbrowser.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
								<img src="images/services/main-fmobile.png" style="position: absolute; top: 0; left: 0;"   alt="iPad">
							</div>

						</div>
					</div>
					<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>
			</div>
			
			
			
			<div class="col-md-12 nopadding common-height">

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600; font-family: 'Kanit', sans-serif;">ทำไมต้องเลือก BMG CLUB ?</h3>
							<p style="line-height: 1.8; font-family: 'Kanit', sans-serif;">เพราะธุรกิจ BMG CLUB ตอบโจทย์ทุกอย่างในสังคมไทยในปัจจุบัน ไม่ว่าจะเป็น เรื่อง เงิน ท่องเที่ยวฟรี สุขภาพดี มีโรงงานผลิต ผลิตภัณฑ์ และ สำนักงานใหญ่ วันนี้ BMG CLUB จึงให้โอกาสทุก ๆ ท่านได้เข้าร่วม และ สำเร็จไปกับเรา BMG CLUB.</p>
							<a href="why-bmgclub.php" class="button button-border button-light button-rounded uppercase nomargin" style="font-family: 'Kanit', sans-serif;">อ่านต่อ</a>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600; font-family: 'Kanit', sans-serif;">พันธกิจ (Mission)</h3>
							<p style="line-height: 1.8; font-family: 'Kanit', sans-serif;">การที่เราจะสำเร็จได้นั้น จะต้องทำตาม พันธกิจของ BMG CLUB อย่างเข้มงวด และ ไม่บกพร่องอย่างเด็ดขาด ถ้าไม่ผิดพลาดในพันธกิจ จะสำเร็จในชีวิตและครอบครัว อย่างแน่นอน.</p>
							<a href="mission.php" class="button button-border button-light button-rounded uppercase nomargin" style="font-family: 'Kanit', sans-serif;">อ่านต่อ</a>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600; font-family: 'Kanit', sans-serif;">จรรยาบรรณ (Ethics)</h3>
							<p style="line-height: 1.8; font-family: 'Kanit', sans-serif;">อีกหนึ่งความสำคัญถ้าหากต้องการสำเร็จ กับ BMG CLUB ทุกคนต้องทำตามจรรยาบรรณที่กำหนดไว้ ไม่เปลี่ยนสายงาน ไม่แย่งสายงาน ไม่ทำผิดจรรยาบรรณ ของ BMG CLUB ไม่ว่าจะกรณีใด ๆ ทั้งสิ้น.</p>
							<a href="Ethics.php" class="button button-border button-light button-rounded uppercase nomargin" style="font-family: 'Kanit', sans-serif;">อ่านต่อ</a>
							<i class="icon-thumbs-up bgicon"></i>
							</div>
						</div>
					</div>
				<div class="clear"></div>
				
				<div class="section notopmargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"ธุรกิจสีขาวอย่างแท้จริง จะสำเร็จได้ต้องทำตาม จรรยาบรรณ และ พันธกิจ."</h2>
					</div>
				</div>
				
				
				<div class="container clearfix">
					<div class="heading-block center bottommargin-lg">
						<h2 style="font-family: 'Kanit', sans-serif;">ความมั่นคงของบริษัท</h2>
						<span style="font-family: 'Kanit', sans-serif;">พวกเรารู้ดีว่าการที่จะร่วมลงทุนอะไรสักอย่าง คงต้องเห็นความมั่นคงของบริษัท เราจะเล่าโปรไฟล์บริษัทของเราให้เห็นว่าบริษัทของเรามั่งคงมากที่สุดในประเทศไทยตอนนี้.</span>
					</div>
						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-comments"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">สำนักงานใหญ่</h3>
								<p style="font-family: 'Kanit', sans-serif;">เรามีสำนักงานเป็นของตัวเอง ไม่ได้เช่าแต่อย่างใด พร้อมที่จะเปิดรับ ผู้ร่วมลงทุนใหม่ และ สมาชิก BMG CLUB ทุกคน.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-world"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">บ่อน้ำแร่ธรรมชาติ</h3>
								<p style="font-family: 'Kanit', sans-serif;">บ่อน้ำแร่ธรรมชาติที่ราคาสูงที่สุดในโลก สูงถึง หนึ่งพันล้านบาท และ อุดมสมบูรณ์ บ่อน้ำแร่ที่กล่าวมา ใช้ผลิต ผลิตภัณฑ์ เวชสำอาง ของบริษัท.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-download"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">สถานที่ผลิต ผลิตภัณฑ์</h3>
								<p style="font-family: 'Kanit', sans-serif;">บริษัทของเรามีโรงงานที่สามารถใช้วิจัยตัว ยา อาหารเสริม และ ผลิตออกมาเป็นผลิตภัณฑ์ที่ได้มาตราฐานระดับโลก.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-dollar"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ถือหุ้นอันดับหนึ่ง</h3>
								<p style="font-family: 'Kanit', sans-serif;">เป็นบริษัทที่ถือหุ้นเป็นอันดับหนึ่งของประเทศไทย ต่อเนื่องกันเป็นเวลา 2 ปี และนี้คืออีกหนึ่งความมั่นคง.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-params"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์ที่ได้มาตราฐาน</h3>
								<p style="font-family: 'Kanit', sans-serif;">เรามีผลิตภัณฑ์ที่ผลิตจากน้ำแร่ธรรมชาติที่ดีที่สุดของโลก และ อาหารเสริมที่ช่วยป้องกันการเกิดโรคร้ายได้เต็มประสิทธิภาพ ปราศจากสารเคมี 100% และ ได้รับมาตราฐานระดับโลกอีกด้วย.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-plane"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เจ้าของสายการบินบางกอกแอร์เวย์</h3>
								<p style="font-family: 'Kanit', sans-serif;">บริษัทเราเป็นเข้าของสายการบินบางกอกแอร์เวย์ และ นี้คือสิ่งที่จะบอกว่าเรามีความมั่นคงที่จะสามารถจ่ายเงินตามแผนงานกับผู้ที่เข้าร่วมลงทุนได้อย่างแน่นอน.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-heart2"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เจ้าของโรงพยาบาลกรุงเทพ</h3>
								<p style="font-family: 'Kanit', sans-serif;">บริษัทของเราเป็นเจ้าของเดียวกับโรงพยาบาลกรุงเทพซึ่งผลิตทั้งยาและเซรุ่มที่ใช้ฉีดเข้าร่างกาย แน่นอนว่าผลิตภัณฑ์ที่ผลิตออกมาก็ต้องได้มาตราฐานสูงสุด.</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-users"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ปราสาททองโอสถ</h3>
								<p style="font-family: 'Kanit', sans-serif;">เมื่อพูดถึง ตระกูลปราสาททองโอสถ เราจะรู้จักกันอยู่แล้ว เป็นตระกูลที่รวยเป็นอันดับ 3 ของประเทศไทย และ ถือหุ้นเป็นอันดับ 1 ของประเทศไทย และ คุณ ปิยสุนีย์ ชัยปาณี ก็เป็นเจ้าของบริษัทและเป็นผู้ให้ โปรเจคสำคัญอย่าง BMG CLUB.</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-like"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ธุรกิจสีขาวที่มั่นคง</h3>
								<p style="font-family: 'Kanit', sans-serif;">ท่านประธานบริษัทกล่าวว่า BMG CLUB จะเป็นธุรกิจสีขาวที่มั่นคงและทำให้ทุกคนสำเร็จได้อย่างแน่นอน</p>
							</div>
						</div>
						<div class="clear"></div>
						<div class="divider divider-short divider-center topmargin-lg"><i class="icon-star3"></i></div>
			
					<div class="col_one_third bottommargin-lg">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/company/bmgclub-company.jpg" alt="Image">
							</div>
							<div class="fbox-desc">
								<h3 style="font-family: 'Kanit', sans-serif;">สำนักงานใหญ่ BMG CLUB<span class="subtitle" style="font-family: 'Kanit', sans-serif;">สถานที่รวมตัวของสมาชิก BMG CLUB รวมถึงซื้อผลิตภัณฑ์</span></h3>
								<p style="font-family: 'Kanit', sans-serif;"><a href="office-bangkok.php" class="btn btn-default">รายละเอียดเพิ่มเติม !</a></p>
							</div>
						</div>
					</div>

					<div class="col_one_third bottommargin-lg">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/company/bmgclub-mineral.jpg" alt="Image">
							</div>
							<div class="fbox-desc">
								<h3 style="font-family: 'Kanit', sans-serif;">บ่อน้ำแร่ธรรมชาติ<span class="subtitle" style="font-family: 'Kanit', sans-serif;">จุดกำเนิดของบริษัท เป็นส่วนหนึ่งของการผลิต ผลิตภัณฑ์เวชสำอาง</span></h3>
								<p style="font-family: 'Kanit', sans-serif;"><a href="mineral-natural.php" class="btn btn-default">รายละเอียดเพิ่มเติม !</a></p>
							</div>
						</div>
					</div>

					<div class="col_one_third bottommargin-lg col_last">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/company/bmgclub-company-product.jpg" alt="Image">
							</div>
							<div class="fbox-desc">
								<h3 style="font-family: 'Kanit', sans-serif;">โรงงานผลิต ผลิตภัณฑ์<span class="subtitle" style="font-family: 'Kanit', sans-serif;">โรงงานผลิต ผลิตภัณฑ์ที่ได้มาตราฐานระดับโลก</span></h3>
								<p style="font-family: 'Kanit', sans-serif;"><a href="product-export.php" class="btn btn-default">รายละเอียดเพิ่มเติม !</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="section nobottommargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
					<h2 style="font-family: 'Kanit', sans-serif;">"ความมั่นคงของบริษัทเป็นส่วนสำคัญส่วนหนึ่งที่ทุกคนตัดสินใจเลือก BMG CLUB."</h2>
					</div>
				</div>
				
				<div class="section full-screen dark nomargin noborder" style="background-image: url('images/parallax/home/bmg-club-book.jpg');">
					<div class="vertical-middle">
						<div class="container clearfix">
						<div class="slider-caption slider-caption-center">
						<h2 style="font-size: 38px; font-family: 'Kanit', sans-serif;">คุณต้องการ สุขภาพดี เที่ยวฟรี มีเงินใช้ ใช่ไหม ?</h2>
						</div>
							<div class="row">

								<div class="col-md-3 bottommargin-sm center" >
									<i class="i-plain i-xlarge divcenter nobottommargin icon-heart"></i>
									<div class="counter counter-large counter-lined" style="font-family: 'Kanit', sans-serif;">สุขภาพดี</div>
									<h5 style="font-family: 'Kanit', sans-serif;">อาหารเสริมของ BMG CLUB จะทำให้คุณสุขภาพดีตลอดไป น่าสนใจใช่ไหม ?</h5>
								</div>

								<div class="col-md-3 bottommargin-sm center" >
									<i class="i-plain i-xlarge divcenter nobottommargin icon-plane"></i>
									<div class="counter counter-large counter-lined" style="font-family: 'Kanit', sans-serif;">เที่ยวฟรี</div>
									<h5 style="font-family: 'Kanit', sans-serif;">วันนี้เพียงคุณเริ่มต้นธุรกิจกับ BMG CLUB ก็มีสิทธิ์ไปเที่ยวต่างประเทศฟรีทันที 1 ที่นั่ง สนใจใช่ไหม ?</h5>
								</div>

								<div class="col-md-3 bottommargin-sm center"  >
									<i class="i-plain i-xlarge divcenter nobottommargin icon-dollar"></i>
									<div class="counter counter-large counter-lined" style="font-family: 'Kanit', sans-serif;">มีเงินใช้</div>
									<h5 style="font-family: 'Kanit', sans-serif;">หากคุณต้องการสำเร็จในชีวิตของคุณ เพื่อที่จะเป็นมหาเศรษฐี BMG CLUB บอกเลยว่า ระบบ V-Star System จะทำให้คุณสำเร็จภายใน 11 เดือน และ ได้รับ 800,000 บาท สนใจใช่ไหม ?</h5>
								</div>
								
								<div class="col-md-3 bottommargin-sm center"  >
									<i class="i-plain i-xlarge divcenter nobottommargin icon-like"></i>
									<div class="counter counter-large counter-lined" style="font-family: 'Kanit', sans-serif;">BMGCLUB</div>
									<h5 style="font-family: 'Kanit', sans-serif;">หากคุณต้องการ 3 อย่างที่กล่าวมา วันนี้คุณต้องตัดสินใจเลือก BMG CLUB ธุรกิจสีขาว ที่แรกและที่เดียวในประเทศไทยที่ให้คุณได้</h5>
								</div>
			

							</div>
		
						</div>
					</div>
				</div>
				
				<div class="section notopmargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"จากการสำรวจของ BMG CLUB คนในประเทศไทยตอนนี้แบ่งออกเป็น 3 ประเภท."</h2>
					</div>
				</div>
				
				<div class="container clearfix">

					<div class="col_three_fifth">
						<div class="accordion accordion-lg clearfix">

							<div class="acctitle" style="font-family: 'Kanit', sans-serif;"><i class="acc-closed icon-bar-chart color"></i><i class="acc-open icon-bar-chart color"></i>คนประเภทที่ 1</div>
							<div class="acc_content clearfix" style="font-family: 'Kanit', sans-serif;">จากการสำรวจคนประเภทที่ 1 สุขภาพไม่ดี - มีเงินใช้ จะเกิดขึ้นกับคนที่เป็นเจ้าของธุรกิจยักษ์ใหญ่จำนวนมาก .</div>

							<div class="acctitle" style="font-family: 'Kanit', sans-serif;"><i class="acc-closed icon-bar-chart color"></i><i class="acc-open icon-bar-chart color"></i>คนประเภทที่ 2</div>
							<div class="acc_content clearfix" style="font-family: 'Kanit', sans-serif;">จากการสำรวจคนประเภทที่ 2. สุขภาพดี - ไม่มีเงินใช้ จะเกิดขึ้นกับคนที่ทำงานเป็นกรรมกร เช่น ยกหิน แบกปูน แบกอิฐ แต่เมื่อได้เงินมาก็ได้ใช้แค่ในวันต่อวัน</div>

							<div class="acctitle" style="font-family: 'Kanit', sans-serif;"><i class="acc-closed icon-bar-chart color"></i><i class="acc-open icon-bar-chart color"></i>คนประเภทที่ 3</div>
							<div class="acc_content clearfix" style="font-family: 'Kanit', sans-serif;">จากการสำรวจคนประเภทที่ 3. สุขภาพไม่ดี  - ไม่มีเงินใช้ คนประเภทนี้มีเยอะสุดในประเทศไทยและมีโอกาสที่จะเพิ่มมากขึ้นทุกวัน คนประเภทที่ 3 จะเกิดมาจากคนประเภทที่ 2 ที่ทำงานจนหนัก จนตัวเองนั้นสุขภาพไม่ดี และ ไม่มีเงินเก็บ</div>

							<div class="acctitle" style="font-family: 'Kanit', sans-serif;"><i class="acc-closed icon-bar-chart color"></i><i class="acc-open icon-bar-chart color"></i>แต่วันนี้ BMG CLUB จะให้คุณได้เป็นคนประเภทที่ 4 </div>
							<div class="acc_content clearfix" style="font-family: 'Kanit', sans-serif;">BMG CLUB ให้คุณเป็นคนประเภทที่ 4 คุณแตกต่างจากคนประเภทที่ 1 - 3 ดังนี้ ให้คุณ สุขภาพดี เที่ยวฟรี มีเงินใช้ ตลอดไป คุณสนใจไหม ? </div>
						</div>
					
					</div>
	
			
				<div class="col_two_fifth col_last">
						<h4 style="font-family: 'Kanit', sans-serif;">คนประเภทต่าง ๆ ใน <span>สังคมปัจจุบัน.</span></h4>
						<ul class="testimonials-grid grid-1 clearfix">
							<li class="noleftpadding notoppadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/research/1.jpg" alt="สำรวจคนประเภทที่ 1 BMG CLUB"></a>
									</div>
									<div class="testi-content">
										<img src="images/research/bmg-1.png" alt="คนประเภทที่ 1 BMG CLUB" >
									</div>
								</div>
							</li>
							<li class="noleftpadding notoppadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/research/2.jpg" alt="สำรวจคนประเภทที่ 2 BMG CLUB"></a>
									</div>
									<div class="testi-content">
										<img src="images/research/bmg-2.png" alt="คนประเภทที่ 2 BMG CLUB" >
									</div>
								</div>
							</li>
							<li class="noleftpadding notoppadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/research/3.jpg" alt="สำรวจคนประเภทที่ 3 BMG CLUB"></a>
									</div>
									<div class="testi-content">
										<img src="images/research/bmg-3.png" alt="คนประเภทที่ 3 BMG CLUB" >
									</div>
								</div>
							</li>
							<li class="noleftpadding notoppadding">
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/research/4.jpg" alt="สำรวจคนประเภทที่ 4 BMG CLUB"></a>
									</div>
									<div class="testi-content">
										<img src="images/research/bmg-4.png" alt="คนประเภทที่ 4 BMG CLUB" >
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
				<div class="row clearfix bottopmargin-lg common-height">

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-users"></i>
							<div class="counter counter-lined"><span data-from="0" data-to="5" data-refresh-interval="50" data-speed="2000"></span>%</div>
							<h5 style="font-family: 'Kanit', sans-serif;">คนประเภทที่ 1</br> สุขภาพไม่ดีแต่มีเงิน</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-users"></i>
							<div class="counter counter-lined"><span data-from="0" data-to="25" data-refresh-interval="100" data-speed="2500"></span>%</div>
							<h5 style="font-family: 'Kanit', sans-serif;">คนประเภทที่ 2</br> สุขภาพดีแต่ไม่มีเงิน</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-users"></i>
							<div class="counter counter-lined"><span data-from="0" data-to="70" data-refresh-interval="25" data-speed="2500"></span>%</div>
							<h5 style="font-family: 'Kanit', sans-serif;">คนประเภทที่ 3 </br> สุขภาพไม่ดีและไม่มีเงิน</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-user"></i>
							<div class="counter counter-lined"><span data-from="0" data-to="100" data-refresh-interval="30" data-speed="2700"></span>%</div>
							<h5 style="font-family: 'Kanit', sans-serif;">คนประเภทที่ 4 </br>BMG CLUB จะทำให้คนประเภทที่ 1-3 ลดลง และ เพิ่มคนจำนวนประเภทที่ 4 เต็ม 100% </h5>
						</div>
					</div>

				</div>
				
				<div class="section full-screen nomargin noborder" style="background-image: url('images/parallax/bmg-club-healthy.jpg');" data-stellar-background-ratio="0.4">
					<div class="vertical-middle">
						<div class="container clearfix">

							<div class="col_three_fifth nobottommargin">

								<iframe src="https://www.youtube.com/embed/dgE4LHHdMtc" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

							</div>

							<div class="col_two_fifth col_last nobottommargin">

								<div class="emphasis-title">
									<h2 style="font-family: 'Kanit', sans-serif;">สุขภาพดี</h2>
									<p class="lead topmargin-sm" style="font-family: 'Kanit', sans-serif;">รายการ Variety BMG CLUB จะอธิบายให้คุณเห็นเกี่ยวกับ อาหารเสริมของ BMG CLUB ว่าช่วยรักษาและป้องกันโรคร้ายต่าง ๆ ได้อย่างเต็มประสิทธิภาพจากคนที่ใช้อาหารเสริมของเราจริง ๆ ทำให้โรคร้ายเกี่ยวกับตานั้นอาการเบาลงและหายไปในที่สุด.</p>
								</div>

								<a href="#" class="button button-border button-rounded button-dark button-large" style="font-family: 'Kanit', sans-serif;">ดูวีดีโอ Variety เพิ่มเติม</a>

							</div>

						</div>
					</div>
				</div>
				<div class="section full-screen nomargin noborder dark" style="background-image: url('images/parallax/bmg-club-tour.jpg'); padding 150 0;">
					<div class="vertical-middle">
						<div class="container clearfix">

							<div class="col_three_fifth nobottommargin">

								<iframe src="https://www.youtube.com/embed/azFlj0Ffn7I" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

							</div>

							<div class="col_two_fifth col_last nobottommargin">

								<div class="emphasis-title">
									<h2 style="font-family: 'Kanit', sans-serif;">เที่ยวฟรี</h2>
									<p class="lead topmargin-sm" style="font-family: 'Kanit', sans-serif;">เที่ยวฟรีสุขภาพดีมีเงินใช้กับ BMG CLUB ในวีดีโอของเราจะได้เห็นภาพการท่องเที่ยวฟรี ณ ประเทศสิงคโปร์ เราต้องบอกว่าเที่ยวฟรีจริง ๆ ฟรีอาหาร เครื่องดื่ม และ ที่พัก และบริการทัวร์ที่มีคุณภาพ.</p>
								</div>

								<a href="#" class="button button-border button-rounded button-light button-large" style="font-family: 'Kanit', sans-serif;">ดูวีดีโอ ท่องเที่ยวฟรี เพิ่มเติม</a>

							</div>

						</div>
					</div>
				</div>
				
				<div class="section dark nomargin" style="background-image: url('images/parallax/bmg-club-wealthy.jpg'); padding: 100px 0;" data-stellar-background-ratio="0.4">

					<div class="container clearfix">
					<div class="heading-block center">
						<h3 style="font-family: 'Kanit', sans-serif;">สุขภาพดี เที่ยวฟรี มีเงินใช้ จากคำยืนยันของสมาชิก</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;"></p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											namesurname
											<span style="font-family: 'Kanit', sans-serif;">BMG CLUB Member.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">.</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											namesurname
											<span style="font-family: 'Kanit', sans-serif;">BMG CLUB Member.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">!</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											namesurname
											<span style="font-family: 'Kanit', sans-serif;">BMG CLUB Member.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>

				</div>
				
				<div class="section nomargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"สุขภาพดี เที่ยวฟรี มีเงินใช้ ให้ BMG CLUB ดูแล คุณสนใจไหม ?."</h2>
					</div>
				</div>
				
				<section class="section pricing-section nomargin dark" style="background: linear-gradient(45deg, #ce8b49, #f3ca89);">
						<div class="container clearfix">
							<h2 class="pricing-section--title center" style="font-family: 'Kanit', sans-serif;">ถ้าหากคุณสนใจ BMG CLUB การร่วมลงทุนของเรามี 2 ทางเลือก</h2>
							<div class="pricing pricing--norbu">
								<div class="pricing--item">
									<h3 class="pricing--title" style="font-family: 'Kanit', sans-serif;">ร่วมทุน Mini</h3>
									<div class="pricing--price" style="font-family: 'Kanit', sans-serif;"><span class="pricing--currency" style="font-family: 'Kanit', sans-serif;">฿</span>4,500<span class="pricing--period" style="font-family: 'Kanit', sans-serif;"></span></div>
									<ul class="pricing--feature-list">
										<li class="pricing--feature" style="font-family: 'Kanit', sans-serif;">รับผลิตภัณฑ์ 4,500 บาท</li>
									</ul>
									<button class="pricing--action" style="font-family: 'Kanit', sans-serif;">เลือกดูเซต Mini เพิ่มเติม</button>
								</div>
								<div class="pricing--item pricing--item--featured">
									<h3 class="pricing--title" style="font-family: 'Kanit', sans-serif;">ร่วมทุน VIP</h3>
									<div class="pricing--price" style="font-family: 'Kanit', sans-serif;"><span class="pricing--currency" style="font-family: 'Kanit', sans-serif;">฿</span>25,900<span class="pricing--period" style="font-family: 'Kanit', sans-serif;"></span></div>
									<ul class="pricing--feature-list">
										<li class="pricing--feature" style="font-family: 'Kanit', sans-serif;">รับผลิตภัณฑ์ 25,900 บาท</li>
										<li class="pricing--feature" style="font-family: 'Kanit', sans-serif;">ประกัน อุบัติเหตุ เสียชีวิต 120,000</li>
										<li class="pricing--feature" style="font-family: 'Kanit', sans-serif;">ประกัน อุบัติเหตุ รักษา 10,000 บาท</li>
									</ul>
									<button class="pricing--action" style="font-family: 'Kanit', sans-serif;">เลือกดูเซต VIP เพิ่มเติม</button>
								</div>
							
							</div>
						</div>
				</section>
			<div class="clear"></div>
				
				
				<div class="divider divider-short divider-center"><i class="icon-like"></i></div>
				<div class="container clearfix">
					<div id="section-gallery" class="heading-block center topmargin page-section">
						<h2 style="font-family: 'Kanit', sans-serif;">เซตตัวอย่างผลิตภัณฑ์ VIP.</h2>
						<span style="font-family: 'Kanit', sans-serif;">ภาพตัวอย่างเลือกเซตผลิตภัณฑ์ VIP 25,900 บาท</span>
					</div>
					<div class="divider"><i class="icon-circle"></i></div>
						<div class="fslider">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><img src="images/product/1-1.jpg" alt="Slider 1"></div>
									<div class="slide"><img src="images/product/1-2.jpg" alt="Slider 2"></div>
									<div class="slide"><img src="images/product/1-3.jpg" alt="Slider 3"></div>
									<div class="slide"><img src="images/product/1.jpg" alt="Slider "></div>
									<div class="slide"><img src="images/product/5.jpg" alt="Slider "></div>
									<div class="slide"><img src="images/product/6.jpg" alt="Slider "></div>
								</div>
							</div>
						</div>
						
					<div id="section-gallery" class="heading-block center topmargin page-section">
						<h2 style="font-family: 'Kanit', sans-serif;">เซตตัวอย่างผลิตภัณฑ์ Mini.</h2>
						<span style="font-family: 'Kanit', sans-serif;">ภาพตัวอย่างเลือกเซตผลิตภัณฑ์ Mini 4,500 บาท</span>
					</div>
					<div class="divider"><i class="icon-circle"></i></div>
						<div class="fslider">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><img src="images/product/mini-1.jpg" alt="Slider 1"></div>
									<div class="slide"><img src="images/product/mini-2.jpg" alt="Slider 2"></div>
									<div class="slide"><img src="images/product/mini-3.jpg" alt="Slider 3"></div>
									<div class="slide"><img src="images/product/mini-4.jpg" alt="Slider "></div>
								</div>
							</div>
						</div>
					
					<div class="fancy-title title-border title-center topmargin-sm">
						<h4 style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์ของเราผ่านการตรวจสอบอะไรบ้าง ?</h4>
					</div>

					<ul class="clients-grid grid-6 nobottommargin">
						<li><a href="#"><img src="images/clients/logo/QA.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/licaps.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/foodandmedicine.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/floraglo.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/gmp.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/halal.png" alt="Clients"></a></li>
					</ul>
					<div class="divider divider-short divider-center"><i class="icon-heart3"></i></div>
				</div>
				
				<div class="section notopmargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"เมื่อร่วมทุนกับ BMG CLUB แล้วคุณจะได้รับสิทธิประโยชน์อีกมากมาย"</h2>
					</div>
				</div>
				
				<div class="container clearfix">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center">
							<h2 style="font-family: 'Kanit', sans-serif;">ตัดสินใจเดี๋ยวนี้ถ้าคุณสนใจที่จะได้รับสิทธิประโยชน์จาก BMG CLUB ดังนี้</h2>
							<span class="divcenter" style="font-family: 'Kanit', sans-serif;">เมื่อคุณร่วมลงทุน กับ BMG CLUB คุณจะได้รับสิทธิประโยชน์ และ สิทธิพิเศษต่าง ๆ อีกมากมาย.</span>
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box fbox-right topmargin" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-user"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เจ้าของลิขสิทธิ์</h3>
								<p style="font-family: 'Kanit', sans-serif;">เป็นเจ้าของลิขสิทธิ์ชั้นนำของ BMG CLUB และ ได้รับลิขสิทธิ์รายได้ตามแผนการตลาด.</p>
							</div>

							<div class="feature-box fbox-right topmargin" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-plane"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เลือกที่จะเที่ยวฟรี</h3>
								<p style="font-family: 'Kanit', sans-serif;">เมื่อคุณสามารถทำการปิด 1 VIP ได้ คุณจะเลือก เงินค่าลิขสิทธิ์แนะนำ หรือ ท่องเที่ยวฟรี 1 ที่นั่ง.</p>
							</div>

							<div class="feature-box fbox-right topmargin"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-heart2"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เลือกที่จะสุขภาพดี</h3>
								<p style="font-family: 'Kanit', sans-serif;">คุณจะสุขภาพดีตลอดไป เมื่อใช้ผลิตภัณฑ์ อาหารเสริม BMG CLUB.</p>
							</div>

						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="images/services/bmg-club-logo.png" alt="iphone 2">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin">

							<div class="feature-box topmargin" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-dollar"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">เลือกที่จะมีเงินใช้</h3>
								<p style="font-family: 'Kanit', sans-serif;">เพียงแค่คุณทำตามระบบคุณจะได้รับเงินใช้ 800,000 บาท ต่อเดือน.</p>
							</div>

							<div class="feature-box topmargin" >
								<div class="fbox-icon">
									<a href="#"><i class="icon-users"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ครอบครัว BMG CLUB</h3>
								<p style="font-family: 'Kanit', sans-serif;">คุณจะได้รับความสุข และ คำแนะนำจากสมาชิกมากมายในครอบครัว BMG CLUB.</p>
							</div>

							<div class="feature-box topmargin"  >
								<div class="fbox-icon">
									<a href="#"><i class="icon-like"></i></a>
								</div>
								<h3 style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์ ในราคาสมาชิก</h3>
								<p style="font-family: 'Kanit', sans-serif;">คุณจะได้ใช้ ผลิตภัณฑ์ทั้งหมดที่มีของ BMG CLUB ในราคาสมาชิก.</p>
							</div>

						</div>
						<div class="divider divider-short divider-center topmargin-lg"><i class="icon-dollar"></i></div>
					</div>
					
						<div class="heading-block center">
							<h2 style="font-family: 'Kanit', sans-serif;">แผนงานตามลิขสิทธิ์รายได้ 3 ข้อ</h2>
							<span class="divcenter" style="font-family: 'Kanit', sans-serif;">เมื่อคุณเข้าระบบงาน BMG CLUB คุณจะสามารถรับ 800,000 บาท ใน 11 เดือน.</span>
						</div>
					</div>
				
			<div class="container clearfix">
					
					<div class="container divcenter clearfix">

					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">1. ลิขสิทธิ์ค่าแนะนำ</h2>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="images/marketing/bmg-marketing-2.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
					</div>
				</div>
				<div class="line"></div>
				
				<div class="container divcenter clearfix">
				
					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">2. Balance 30% สูงสุด 800,000 บาท/เดือน</h2>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="images/marketing/bmg-marketing-1.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
					</div>
				</div>
				
				<div class="container divcenter clearfix">
					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">ตารางรายได้ 800,000 บาท</h2>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="images/marketing/bmg-marketing-4.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
					</div>
				</div>
				<div class="line"></div>
				
				<div class="container divcenter clearfix">
					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">ตารางรายได้ 800,000 บาท</h2>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="images/marketing/bmg-marketing-3.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
					</div>
				</div>
	
		</div>

					
			<div class="divider divider-short divider-center"><i class="icon-like"></i></div>
				<div class="section notopmargin noborder" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center nobottomborder nobottommargin">
						<h2 style="font-family: 'Kanit', sans-serif;">"BMG CLUB จะจ่ายเงินตามแผนการตลาดอย่างแน่นอน"</h2>
					</div>
				</div>
				
				<div class="container divcenter clearfix">

					<div class="heading-block center">
						<h2 style="font-family: 'Kanit', sans-serif;">ตัดสินใจเข้าร่วม BMG CLUB</h2>
						<span style="font-family: 'Kanit', sans-serif;">โอกาสที่ดีที่สุดของท่านมาถึงแล้ว</br>ตัดสินใจเดี๋ยวนี้ เพื่อเข้าร่วมเป็นครอบครัว</br>BMG CLUB เอกสิทธิ์สำหรับมหาเศรษฐีรุ่นใหม่.</span>
					</div>

					<div style="position: relative;" data-height-lg="624" data-height-md="518" data-height-sm="397" data-height-xs="242" data-height-xxs="154">
						<img src="images/services/fbrowser.png" style="position: absolute; top: 0; left: 0;" alt="Chrome">
						<img src="images/services/fbrowser2.png" style="position: absolute; top: 0; left: 0;"   alt="iPad">
					</div>
				</div>

				<div class="section bottommargin-sm nobottommargin">

					<div class="container clearfix">

						<div class="heading-block center">
							<h3 style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB</h3>
							<span style="font-family: 'Kanit', sans-serif;">พวกเราผู้นำ BMG CLUB ขอพูดว่า BMG CLUB เปลี่ยนแปลง และ ให้โอกาส ความสำเร็จกับพวกเรา</span>
						</div>

						<ul class="testimonials-grid grid-3 nobottommargin">
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;"></p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											ประณัฐชัย คัมภิรานนท์
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">.</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											การณรงค์ เพ็ชรมณี
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial" style="font-family: 'Kanit', sans-serif;">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">.</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											ทัศนีย์ ใจมั่น
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-4.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;"></p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											สาคร ชำนาญโพธิ์
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-5.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">.</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											ศรีกมล จันระมาด
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB.</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="images/testimonials/leader-6.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p style="font-family: 'Kanit', sans-serif;">.</p>
										<div class="testi-meta" style="font-family: 'Kanit', sans-serif;">
											กรรณิกา คงคา
											<span style="font-family: 'Kanit', sans-serif;">ผู้นำ BMG CLUB</span>
										</div>
									</div>
								</div>
							</li>
						</ul>

					</div>

				</div>
				
				<div class="section noborder dark nomargin footer-stick" style="background-image: url('images/parallax/2.jpg');">
					<div class="container clearfix">
						<div class="col_three_fifth nobottommargin">

							<div class="heading-block nobottomborder">
								<h3>Reviews</h3>
							</div>

							<div class="fslider restaurant-reviews" data-arrows="false" data-animation="slide">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<div class="testi-image">
											<a href="#"><img src="images/testimonials/reviews-1.jpg" alt="Customer Testimonails"></a>
											</div>
											<p class="lead" style="font-family: 'Kanit', sans-serif;">"ผมเป็นโรคจอประสาทตาร้าว หลังผ่าตัดผมมองเห็นไม่ชัดเจน อ่านหนังสือพิมพ์ไม่ชัดเจน ภาพมืด หลังได้รับประทาน Lutein Plus เป็นเวลา 1 เดือน อาการกลับมาเป็นปกติ อ่านหนังสือพิมพ์ได้ชัดเจน มองภาพชัดขึ้น จุดดำที่ลอยในดวงตาหายไป และ ที่สำคัญผลิตภัณฑ์ ราคาเป็นธรรม และ มีคุณภาพสูง."</p>
											<span style="font-family: 'Kanit', sans-serif;">คุณลุง กำนันเชาว์ ณ หนองเสือ <strong style="font-family: 'Kanit', sans-serif;"></strong>,จังหวัดปทุมธานี </span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></i>
										</div>
										<div class="slide">
										<div class="testi-image">
											<a href="#"><img src="images/testimonials/reviews-2.jpg" alt="Customer Testimonails"></a>
										</div>
											<p class="lead" style="font-family: 'Kanit', sans-serif;">"."</p>
											<span style="font-family: 'Kanit', sans-serif;">คุณ กฤติกา แสนวงษ์ดี สมาชิก BMG CLUB & ราชการที่โรงพยาบาลสระบุรี<strong style="font-family: 'Kanit', sans-serif;"></strong>,จังหวัดสระบุรี </span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i><i class="icon-star3"></i></i>
										</div>
										<div class="slide">
										<div class="testi-image">
											<a href="#"><img src="images/testimonials/reviews-3.jpg" alt="Customer Testimonails"></a>
										</div>
											<p class="lead" style="font-family: 'Kanit', sans-serif;">"."</p>
											<span style="font-family: 'Kanit', sans-serif;"><strong style="font-family: 'Kanit', sans-serif;"></strong>, </span><br>
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i><i class="icon-star3"></i></i>
										</div>
									</div>
								</div>
							</div>

							<style>
								.restaurant-reviews .flex-control-nav {
									top: auto;
									bottom: 25px;
								}
							</style>
				
				
				</div>
			</div>
		</section>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2016 All Rights Reserved BMG CLUB Developers by <a href="#">PP.</a><br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-instagram2"></i>
								<i class="icon-instagram2"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> contact@bmg-club.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> 062-514-9229 <span class="middot">&middot;</span> <i class="icon-skype2"></i> BMGCLUBSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->
	
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>
	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>
	<script type="text/javascript" src="js/events-data.js"></script>
	<script type="text/javascript">

		var cal = $( '#calendar' ).calendario( {
				onDayClick : function( $el, $contentEl, dateProperties ) {

					for( var key in dateProperties ) {
						console.log( key + ' = ' + dateProperties[ key ] );
					}

				},
				caldata : canvasEvents
			} ),
			$month = $( '#calendar-month' ).html( cal.getMonthName() ),
			$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		};

	</script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>



</body>
<!-- Start of LiveChat !-->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 7575971;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<!-- End of LiveChat code -->
</html>