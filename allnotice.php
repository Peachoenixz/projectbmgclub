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
							<div class="entry <?php echo $objResult["datafilter"]; ?> clearfix">
								<div class="entry-image">
									<a href="/eventnewsactivitypic/<?php echo $objResult["bigpicfront"]; ?>" data-lightbox="image"><img class="image_fade" src="/eventnewsactivitypic/<?php echo $objResult["bigpicfront"]; ?>" alt="<?php echo $objResult["alt23"]; ?>"></a>
								</div>
								<div class="entry-title">
									<h2><a href="blog-single.html"><?php echo $objResult["Header"]; ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo $objResult["Datehead"]; ?></li>
									<li><a href="#"><i class="icon-user"></i> <?php echo $objResult["Username"]; ?></a></li>
									<li><i class="icon-folder-open"></i> <a href="#"><?php echo $objResult["Tag"]; ?></a>,<a href="#"><?php echo $objResult["Tag2"]; ?></a>,<a href="#"><?php echo $objResult["Tag3"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag4"]; ?></a>,<a href="#"><?php echo $objResult["Tag5"]; ?></a>
									<li><a href="<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club#comments"><i class="icon-comments"></i> <fb:comments-count href="http://bmg-club.com/<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club"></fb:comments-count> ความคิดเห็น </a></li>
									<li><a href="#"><i class="<?php echo $objResult["Icons"]; ?>"></i></a></li>
								</ul>
								<div class="entry-content">
									<p><?php echo $objResult["Codefront"]; ?></p>
									<a href="<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club"class="more-link">อ่านต่อ</a>
								</div>
							</div>
              <?php
            }
            }
              ?>



						</div><!-- #posts end -->

						<div id="fb-root"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1023915151017751";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>

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

								<h4>เลือกหมวดหมู่ที่ต้องการอ่าน</h4>
								<ul id="blog-filter">
									<li><a href="#" data-filter="*"><div>ทั้งหมด</div></a></li>
									<li><a href="#" data-filter=".bf-news"><div>ข่าวสารทั่วไป</div></a></li>
									<li><a href="#" data-filter=".bf-activity"><div>กิจกรรม</div></a></li>
									<li><a href="#" data-filter=".bf-event"><div>อีเวนท์</div></a></li>
									<li><a href="#" data-filter=".bf-video"><div>วีดีโอ</div></a></li>
									<li><a href="#" data-filter=".bf-music"><div>เพลง</div></a></li>
								</ul>

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
