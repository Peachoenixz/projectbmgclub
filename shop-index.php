<?php
include('connect.php');
$title = 'BMG CLUB | รายละเอียด ผลิตภัณฑ์ BMG CLUB By Minery Gold';
?>
	<!DOCTYPE html>
	<html dir="ltr" lang="th-TH">
	<head>

	<?php include 'meta.php'; ?>

	<?php include 'favicon.php'; ?>

	<?php include 'stylesheet.php'; ?>

</head>


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header semi-transparent full-header">

			<?php include('header.php'); ?>

		</header><!-- #header end -->


		<section id="slider" class="force-full-screen full-screen">

			<div class="force-full-screen full-screen dark" style="background-image: url('images/shop/shop-bmgclub-index.jpg');background-position: 50% 0;">

				<div class="container clearfix">
					<div class="slider-caption slider-caption-center">
						<h2 data-animate="fadeInDown" style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์ BMG CLUB <br>By Minery Gold</h2>
						<p data-animate="fadeInUp" data-delay="400" style="font-family: 'Kanit', sans-serif;">ผลิตภัณฑ์ที่มีคุณภาพมากกว่า 100 รายการให้คุณได้เลือกซื้อ.</p>
						<a data-animate="fadeInUp" data-delay="600" href="#shop" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px; font-family: 'Kanit', sans-serif;">เลือกผลิตภัณฑ์</a>
					</div>
				</div>

			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="portfolio-filter clearfix">

						<li class="activeFilter"><a href="#" data-filter="*" style="font-family: 'Kanit', sans-serif;">ดูทั้งหมด</a></li>
						<li><a href="#" data-filter=".pf-spa" style="font-family: 'Kanit', sans-serif;">สปา</a></li>
						<li><a href="#" data-filter=".pf-dietary" style="font-family: 'Kanit', sans-serif;">อาหารเสริม</a></li>
						<li><a href="#" data-filter=".pf-everyday" style="font-family: 'Kanit', sans-serif;">ใช้ในชีวิตประจำวัน</a></li>
						<li><a href="#" data-filter=".pf-beauty" style="font-family: 'Kanit', sans-serif;">เครื่องสำอาง</a></li>
						<li><a href="#" data-filter=".pf-drink" style="font-family: 'Kanit', sans-serif;">เครื่องดื่ม</a></li>
						<li><a href="#" data-filter=".pf-agriculture" style="font-family: 'Kanit', sans-serif;">การเกษตร</a></li>

					</ul><!-- #portfolio-filter end -->

					<div style="float:right; width:280px;">
						<input class="range_23" />
					</div>

					<div class="clear"></div>

					<!-- Shop
					============================================= -->
					<div id="shop" class="shop grid-container clearfix">
<?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
						<div class="product clearfix <?php echo $objResult["PF"];?>">
							<div class="product-image">
								<a href="<?php echo $objResult["Link-index"];?>"><img src="images/shop/<?php echo $objResult["Picture"];?>" alt="<?php echo $objResult["Alt"];?>" title="<?php echo $objResult["Title"];?>"></a>
								<div class="#sale-flash"></div>
								<div class="product-overlay">
									<a href="order.php?ProductID=<?php echo $objResult["ProductID"];?>" class="add-to-cart"><i class="icon-shopping-cart"></i><span style="font-family: 'Kanit', sans-serif;"> เพิ่มลงตระกร้าสินค้า</span></a>
									<a href="include/ajax/<?php echo $objResult["Link-ajax"];?>" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span style="font-family: 'Kanit', sans-serif;"> รายละเอียดเพิ่มเติม</span></a>
								</div>
							</div>
							<div class="product-desc">
								<div class="product-title"><h3 style="font-family: 'Kanit', sans-serif;"><a href="<?php echo $objResult["Link-index"];?>"><?php echo $objResult["ProductName"];?></a></h3></div>
								<div class="product-price" style="font-family: 'Kanit', sans-serif;">฿<?php echo $objResult["Price"];?></div>
								<div class="product-rating">
									<p style="font-family: 'Kanit', sans-serif;">ได้รับ : <?php echo $objResult["BV"];?> BV</p>
								</div>
							</div>
						</div>
 <?php
  }
  ?>

					</div><!-- #shop end -->
				<div class="line"></div>
				</div>

				<div class="container clearfix">


					<div class="clear"></div><div class="line"></div>


				</div>

			</div>

		</section><!-- #content end -->

<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

		<?php include 'footer.php'; ?>

		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
		<!-- Range Slider Plugin -->
	<script type="text/javascript" src="js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">

		var priceRangefrom = 0,
			priceRangeto = 0,
			$container = null;

		jQuery(window).load(function(){

			$container = $('#shop');

			$container.isotope({ transitionDuration: '0.65s' });

			$('#portfolio-filter a').click(function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var selector = $(this).attr('data-filter');
				$container.isotope({ filter: selector });
				return false;
			});

			$(window).resize(function() {
				$container.isotope('layout');
			});

		});

		jQuery(document).ready( function($){

			$(".range_23").ionRangeSlider({
				type: "double",
				min: 100.00,
				max: 4000.00,
				from: 100.00,
				to: 4000.00,
				prefix: '฿',
				hide_min_max: true,
				hide_from_to: false,
				grid: false,
				onStart: function (data) {
					priceRangefrom = data.from;
					priceRangeto = data.to;
				},
				onFinish: function (data) {
					priceRangefrom = data.from;
					priceRangeto = data.to;

					$container.isotope({
						filter: function() {

							if( $(this).find('.product-price').find('ins').length > 0 ) {
								var price = $(this).find('.product-price ins').text();
							} else {
								var price = $(this).find('.product-price').text();
							}

							priceNum = price.split("฿");

							return ( priceRangefrom <= priceNum[1] && priceRangeto >= priceNum[1] );
						}
					});

				}
			});

		});

	</script>
</body>
</html>
