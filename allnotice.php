<?php
include('connect.php');
$title = 'BMG CLUB | ไลฟ์สไตล์เหนือระดับ สำหรับคนพิเศษ ให้ได้ทุกสิ่ง เป็นจริงทุกเรื่อง';
?>
	<!DOCTYPE html>
	<html dir="ltr" lang="th-TH">
	<head>

	<?php include 'meta.php'; ?>

	<?php include 'favicon.php'; ?>

	<?php include 'stylesheet.php'; ?>

  <!-- External JavaScripts
  ============================================= -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>

	</head>

	<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

		<?php include('topbar.php'); ?>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<?php include('header.php'); ?>


		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Blog</h1>
				<span>Our Latest News</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts">

              <?php
              $strSQL = "SELECT * FROM eventnewsactivity ";
              $objQuery  = mysql_query($strSQL);
              $Num_Rows = mysql_num_rows($objQuery);

              $Per_Page = 10;   // Per Page

              $Page = $_GET["Page"];
              if(!$_GET["Page"])
              {
              	$Page=1;
              }

              $Prev_Page = $Page-1;
              $Next_Page = $Page+1;

              $Page_Start = (($Per_Page*$Page)-$Per_Page);
              if($Num_Rows<=$Per_Page)
              {
              	$Num_Pages =1;
              }
              else if(($Num_Rows % $Per_Page)==0)
              {
              	$Num_Pages =($Num_Rows/$Per_Page) ;
              }
              else
              {
              	$Num_Pages =($Num_Rows/$Per_Page)+1;
              	$Num_Pages = (int)$Num_Pages;
              }

              $strSQL .=" order  by enaID DESC LIMIT $Page_Start , $Per_Page";
              $objQuery  = mysql_query($strSQL);
              {
                while($objResult = mysql_fetch_array($objQuery))
                {
                  ?>
							<div class="entry bf-image clearfix">
								<div class="entry-image">
									<a href="/eventnewsactivitypic/<?php echo $objResult["bigpic"]; ?>" data-lightbox="image"><img class="image_fade" src="/eventnewsactivitypic/<?php echo $objResult["bigpic"]; ?>" alt="<?php echo $objResult["alt23"]; ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="blog-single.html"><?php echo $objResult["Header"]; ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo $objResult["Datehead"]; ?></li>
									<li><a href="#"><i class="icon-user"></i> <?php echo $objResult["Username"]; ?></a></li>
									<li><i class="icon-folder-open"></i> <a href="#"><?php echo $objResult["Tag"]; ?></a>,<a href="#"><?php echo $objResult["Tag2"]; ?></a>,<a href="#"><?php echo $objResult["Tag3"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag4"]; ?></a>,<a href="#"><?php echo $objResult["Tag5"]; ?></a>,<a href="#"><?php echo $objResult["Tag6"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag7"]; ?></a>,<a href="#"><?php echo $objResult["Tag8"]; ?></a>,<a href="#"><?php echo $objResult["Tag9"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag10"]; ?></a>
									<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
									<li><a href="#"><i class="<?php echo $objResult["Icons"]; ?>"></i></a></li>
								</ul>
								<div class="entry-content">
									<p><?php echo $objResult["Codefront"]; ?></p>
									<a href="blog-single.html"class="more-link">Read More</a>
								</div>
							</div>
              <?php
            }
            }
              ?>



						</div><!-- #posts end -->

						<!-- Blog Filter Script
						============================================= -->
						<script type="text/javascript">

							jQuery(window).load(function(){

								var $container = $('#posts');

								$container.isotope({ transitionDuration: '0.65s' });

								$('#blog-filter a').click(function(){
									$('#blog-filter li').removeClass('activeFilter');
									$(this).parent('li').addClass('activeFilter');
									var selector = $(this).attr('data-filter');
									$container.isotope({ filter: selector });
									return false;
								});

								$(window).resize(function() {
									$container.isotope('layout');
								});

							});

						</script><!-- Portfolio Script End -->

            <!-- Pagination
            ============================================= -->
            <ul class="pager nomargin">

            <?php

                          if($Prev_Page)
                          {
                          	echo " <li class='previous'><a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'>&larr; Older</a></li> ";
                          }

                          if($Page!=$Num_Pages)
                          {
                          	echo "<li class='next'><a href='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Newer &rarr;</a></li>";
                          }
                          mysql_close($objConnect);
            ?>

              </ul><!-- .pager end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget_links clearfix">

								<h4>Blog Filter</h4>
								<ul id="blog-filter">
									<li><a href="#" data-filter="*"><div>Show All</div></a></li>
									<li><a href="#" data-filter=".bf-image"><div>Image</div></a></li>
									<li><a href="#" data-filter=".bf-video"><div>Video</div></a></li>
									<li><a href="#" data-filter=".bf-sound"><div>Sound</div></a></li>
									<li><a href="#" data-filter=".bf-gallery"><div>Gallery</div></a></li>
								</ul>

							</div>

							<div class="widget widget-twitter-feed clearfix">

								<h4>Twitter Feed</h4>
								<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
									<li></li>
								</ul>

								<a href="#" class="btn btn-default btn-sm fright">Follow Us on Twitter</a>

							</div>

							<div class="widget clearfix">

								<h4>Flickr Photostream</h4>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

							</div>

							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1">Popular</a></li>
										<li><a href="#tabs-2">Recent</a></li>
										<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 35 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 24 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 19 Comments</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-3">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
													</div>
												</div>

											</div>
										</div>

									</div>

								</div>

							</div>

							<div class="widget clearfix">

								<h4>Portfolio Carousel</h4>
								<div id="oc-portfolio-sidebar" class="owl-carousel portfolio-5">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="#">
													<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
												</a>
												<div class="portfolio-overlay">
													<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
												<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="portfolio-single.html">
													<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
												</a>
												<div class="portfolio-overlay">
													<a href="images/blog/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single.html">Open Imagination</a></h3>
												<span><a href="#">Media</a>, <a href="#">Icons</a></span>
											</div>
										</div>
									</div>

								</div>

								<script type="text/javascript">

									jQuery(document).ready(function($) {

										var ocClients = $("#oc-portfolio-sidebar");

										ocClients.owlCarousel({
											items: 1,
											margin: 10,
											loop: true,
											nav: false,
											autoplay: true,
											dots: true,
											autoplayHoverPause: true
										});

									});

								</script>

							</div>

							<div class="widget clearfix">

								<h4>Tag Cloud</h4>
								<div class="tagcloud">
									<a href="#"><?php echo $objResult["Tag"]; ?></a>
									<a href="#">videos</a>
									<a href="#">music</a>
									<a href="#">media</a>
									<a href="#">photography</a>
									<a href="#">parallax</a>
									<a href="#">ecommerce</a>
									<a href="#">terms</a>
									<a href="#">coupons</a>
									<a href="#">modern</a>
								</div>

							</div>

						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<?php include'footer.php'; ?>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
