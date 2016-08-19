<?php
include 'connect.php';
$strSQL = "SELECT * FROM eventnewsactivity WHERE seofriendly = '".$_GET["seofriendly"]."' AND seofriendlyname = '".$_GET["seofriendlyname"]."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);

$bmgclub = '| BMG CLUB |';
$getgroups = $objResult['Groups'];
$getheader = $objResult['Header'];
$title = "$getgroups $bmgclub $getheader";

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <base href="/<?php echo $objResult["seofriendlyname"] ?>">
  <?php include 'meta.php'; ?>

	<?php include 'favicon.php'; ?>

	<?php include 'stylesheet.php'; ?>
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
				<h1><?php echo $objResult["Header"]; ?></h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#"><?php echo $objResult["Groups"]; ?></a></li>
					<li class="active"><?php echo $objResult["Header"]; ?></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
    <section id="content">

    <div class="content-wrap">

      <div class="container clearfix">

        <div class="single-post nobottommargin">

          <!-- Single Post
          ============================================= -->
          <div class="entry clearfix">

            <!-- Entry Title
            ============================================= -->
            <div class="entry-title">

								<!-- Entry Title
								============================================= -->
								<div class="entry-title">
									<h2><?php echo $objResult["Header"]; ?></h2>
								</div><!-- .entry-title end -->

								<!-- Entry Meta
								============================================= -->
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php echo $objResult["Datehead"]; ?></li>
									<li><a href="#"><i class="icon-user"></i> <?php echo $objResult["Username"]; ?></a></li>
                  <li><i class="icon-folder-open"></i> <a href="#"><?php echo $objResult["Tag"]; ?></a>,<a href="#"><?php echo $objResult["Tag2"]; ?></a>,<a href="#"><?php echo $objResult["Tag3"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag4"]; ?></a>,<a href="#"><?php echo $objResult["Tag5"]; ?></a>,<a href="#"><?php echo $objResult["Tag6"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag7"]; ?></a>,<a href="#"><?php echo $objResult["Tag8"]; ?></a>,<a href="#"><?php echo $objResult["Tag9"]; ?></a>
									,<a href="#"><?php echo $objResult["Tag10"]; ?></a>
									<li><a href="<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club#comments"><i class="icon-comments"></i> <fb:comments-count href="http://bmg-club.com/<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club"></fb:comments-count> ความคิดเห็น </a></li>
									<li><a href="#"><i class="<?php echo $objResult['Icons'] ?>"></i></a></li>
								</ul><!-- .entry-meta end -->

								<!-- Entry Image
								============================================= -->
								<div class="entry-image">
									<a href="/eventnewsactivitypic/<?php echo $objResult['bigpicin'] ?>" data-lightbox="image"><img src="/eventnewsactivitypic/<?php echo $objResult['bigpicin'] ?>" alt="<?php echo $objResult['alt24'] ?>"></a>
								</div><!-- .entry-image end -->

								<!-- Entry Content
								============================================= -->
								<div class="entry-content notopmargin">

                  <?php echo $objResult['Codein'] ?>
                  <!-- Post Single - Content End -->

									<!-- Tag Cloud
									============================================= -->
									<div class="tagcloud clearfix bottommargin">
										<a href="#"><?php echo $objResult['Tag'] ?></a>
										<a href="#"><?php echo $objResult['Tag2'] ?></a>
                    <a href="#"><?php echo $objResult['Tag3'] ?></a>
                    <a href="#"><?php echo $objResult['Tag4'] ?></a>
                    <a href="#"><?php echo $objResult['Tag5'] ?></a>
                    <a href="#"><?php echo $objResult['Tag6'] ?></a>
                    <a href="#"><?php echo $objResult['Tag7'] ?></a>
                    <a href="#"><?php echo $objResult['Tag8'] ?></a>
                    <a href="#"><?php echo $objResult['Tag9'] ?></a>
                    <a href="#"><?php echo $objResult['Tag10'] ?></a>
									</div><!-- .tagcloud end -->

									<div class="clear"></div>

									<!-- Post Single - Share
									============================================= -->

                  <div class="si-share noborder clearfix">
  									<span>แชร์หน้านี้ลง Facebook:</span>
  									<div class="fb-share-button" data-href="http://bmg-club.com/<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbmg-club.com%2FMolecular-Natural-Mineral-Water.php&amp;src=sdkpreparse">Share</a></div>
  									<script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
  									<script type="text/javascript">
  									new media_line_me.LineButton({"pc":false,"lang":"en","type":"a"});
  									</script>
  								</div><!-- Post Single - Share End -->

								</div>
							</div><!-- .entry end -->

							<!-- Post Navigation
							============================================= -->
							<div class="post-navigation clearfix">

								<div class="col_half nobottommargin">
									<a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
								</div>

								<div class="col_half col_last tright nobottommargin">
									<a href="#">This is an Embedded Audio Post &rArr;</a>
								</div>

							</div><!-- .post-navigation end -->

							<div class="line"></div>

							<!-- Post Author Info
							============================================= -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">เขียน โดย <span><a href="#"><?php echo $objResult['Username'] ?></a></span></h3>
								</div>
								<div class="panel-body">
									<div class="author-image">
										<img src="images/author/1.jpg" alt="" class="img-circle">
									</div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
								</div>
							</div><!-- Post Single - Author End -->

							<div class="line"></div>

							<h4>Related Posts:</h4>

							<div class="related-posts clearfix">

								<div class="col_half nobottommargin">

									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="#"><img src="images/blog/small/10.jpg" alt="Blog Single"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">This is an Image Post</a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 10th July 2014</li>
												<li><a href="#"><i class="icon-comments"></i> 12</a></li>
											</ul>
											<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
										</div>
									</div>

									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">This is a Video Post</a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 24th July 2014</li>
												<li><a href="#"><i class="icon-comments"></i> 16</a></li>
											</ul>
											<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
										</div>
									</div>

								</div>

								<div class="col_half nobottommargin col_last">

									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="#"><img src="images/blog/small/21.jpg" alt="Blog Single"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">This is a Gallery Post</a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 8th Aug 2014</li>
												<li><a href="#"><i class="icon-comments"></i> 8</a></li>
											</ul>
											<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
										</div>
									</div>

									<div class="mpost clearfix">
										<div class="entry-image">
											<a href="#"><img src="images/blog/small/22.jpg" alt="Blog Single"></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">This is an Audio Post</a></h4>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
												<li><a href="#"><i class="icon-comments"></i> 21</a></li>
											</ul>
											<div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
										</div>
									</div>

								</div>

							</div>

              <div id="fb-root"></div>
  						<script>(function(d, s, id) {
  						  var js, fjs = d.getElementsByTagName(s)[0];
  						  if (d.getElementById(id)) return;
  						  js = d.createElement(s); js.id = id;
  						  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1023915151017751";
  						  fjs.parentNode.insertBefore(js, fjs);
  						}(document, 'script', 'facebook-jssdk'));</script>

  						<div id="comments" class="clearfix">

  						<h3 id="comments-title"><span><fb:comments-count href="http://bmg-club.com/<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club"></fb:comments-count></span> Comments</h3>

  						<!-- Facebook Comments
  						============================================= -->
  						<div class="fb-comments" data-width="100%" data-href="http://bmg-club.com/<?php echo $objResult['seofriendlyname'] ?>/<?php echo $objResult['seofriendly'] ?>.bmg-club" data-numposts="5" data-colorscheme="light"></div>
  						<!-- Facebook Comments end -->

						</div>

					</div><!-- .postcontent end -->

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

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>


</body>
</html>
