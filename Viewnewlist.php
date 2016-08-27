<?php
include('connect.php');
$title = 'BMG CLUB | เช็ครายชื่อคนใหม่ทั้งหมด';

if($_SESSION['UserID'] == "")
{
	header("location:bmgclubadmin.php");
	exit();
}

if($_SESSION['Status'] != "ADMIN")
{
	echo "This page for Admin only!";
	exit();
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<base href="/">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

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

			<?php include('header-vstar.php'); ?>


		</header><!-- #header end -->


		<?php
		//*** Select Question ***//
		$vstar = mysql_real_escape_string($_GET['Vstar']);
		$strSQL = sprintf("SELECT * FROM vip WHERE vstar='%s'", mysql_real_escape_string($vstar));
		$objQuery = mysql_query($strSQL) or header("location:index.php");
		$objResult = mysql_fetch_array($objQuery);

		$sponsor = $objResult["Name"];
		$sponsorsur = $objResult["Surname"];
		$querysponsor = mysql_query("SELECT * FROM vip WHERE Sponsor LIKE '%$sponsor $sponsorsur' ");
		$recordsponsor = mysql_num_rows($querysponsor);

		$vp = 'V';
		$querysponsorvp = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Setvip LIKE '%$vp%' ");
		$recordvp = mysql_num_rows($querysponsorvp);

		$m = 'M';
		$querysponsorm = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Setvip LIKE '%$m%' ");
		$recordm = mysql_num_rows($querysponsorm);

		$times = date("/m/Y");
		$querysponsorvpm = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Dates LIKE '%$times' and vip.Setvip LIKE '%$vp%'");
		$recordvpm = mysql_num_rows($querysponsorvpm);

		$recordmoney = $recordvp * 7000;
		$recordbv	= $recordvp * 3000;

		# ป้องกัน sql injection จาก $_GET
		foreach ($_GET as $key => $value) {
			$_GET[$key]=addslashes(strip_tags(trim($value)));
		}
		if ($_GET['Vstar'] !='') { $_GET['Vstar']=(int) $_GET['Vstar']; }

		extract($_GET);
		?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">



				<div class="container clearfix">


					<div class="col_two_fifth nobottommargin">
						<?php
						$file = "http://bmg-club.com/images/bmgclubvstar/".$objResult["url_cover"]."";
						$image_path = "http://bmg-club.com/images/bmgclubvstar/og-bmgclub.jpg";
						if (@getimagesize($file)) {
							echo "<img src='".$file."'>";
						} else {
							echo "<img src='".$image_path."'>";
						}
						?>
						<br>
						<?php
						if (@getimagesize($file)) {
							echo "<a href='".$file."'>ภาพเต็ม</a>";
						} else {

						}
						?>
						<a href="picedit.php?Vstar=<?php echo $objResult["Vstar"];?>"> แก้ไขภาพ</a>
					</div>

					<div class="col_three_fifth nobottommargin col_last">

						<div class="heading-block">
							<h2><?php echo $objResult["Name"];?> <?php echo $objResult["Surname"];?> รหัสสมาชิก <?php echo $objResult["Vstar"];?> <a href="listedit.php?Vstar=<?php echo $objResult["Vstar"];?>">[แก้ไขข้อมูล]</a></h2>
						</div>

						<p>วันที่สมัคร <?php echo $objResult["Dates"];?> วันที่ลงทะเบียนบนเว็บ : <?php echo $objResult["Timevip"];?></p>

						<div class="col_half nobottommargin">
							<ul class="iconlist iconlist-color nobottommargin">
								<li><i class="icon-caret-right"></i> Set VIP - Mini ที่ : <?php echo $objResult["Setvip"];?></li>
								<li><i class="icon-caret-right"></i> สมัครที่สาขา : <?php echo $objResult["Branch"];?></li>
								<li><i class="icon-caret-right"></i> ผู้สปอนเซอร์ : "<?php echo $objResult["Sponsor"];?>" อัพไลน์ <?php echo $objResult["Upline"];?></li>
								<li><i class="icon-caret-right"></i> เบอร์โทร : <?php echo $objResult["Phone"];?></li>
							</ul>
						</div>

						<div class="col_half nobottommargin col_last">
							<ul class="iconlist iconlist-color nobottommargin">
								<li><i class="icon-caret-right"></i> ธนาคาร : <?php echo $objResult["Bookbankn"];?> สาขา <?php echo $objResult["Bookbankb"];?> ชื่อบัญชี <?php echo $objResult["Bookbank"];?> <br> เลขบัญชี <?php echo $objResult["Bookbankc"];?> </li>
								<li><i class="icon-caret-right"></i> เลขบัตรประชาชน : <?php echo $objResult["Card"];?></li>
								<li><i class="icon-caret-right"></i> วันที่ลงทะเบียนบนเว็บ : <?php echo $objResult["Timevip"];?></li>
								<li><i class="icon-caret-right"></i> แนะนำ Mini : <?php echo $recordm ?> ครั้ง</li>
							</ul>
						</div>

					</div>

					<div class="clear"></div>

				</div>

				<div class="section bottommargin-lg footer-stick">

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-diamond"></i>
						<div class="counter counter-large" style="color: #1abc9c;"><span data-from="0" data-to="<?php echo $recordmoney ?>" data-refresh-interval="50" data-speed="2000"></span></div>
						<h5>รายได้ปิด VIP</h5>
					</div>

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-globe"></i>
						<div class="counter counter-large" style="color: #e74c3c;"><span data-from="0" data-to="<?php echo $recordbv ?>" data-refresh-interval="50" data-speed="2500"></span></div>
						<h5>คะแนนรวม/BV</h5>
					</div>

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-gift"></i>
						<div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="<?php echo $recordvp ?>" data-refresh-interval="50" data-speed="3500"></span></div>
						<h5>จำนวนที่ปิด VIP</h5>
					</div>

					<div class="col_one_fourth nobottommargin center col_last">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-fire"></i>
						<div class="counter counter-large" style="color: #9b59b6;"><span data-from="0" data-to="<?php echo $recordsponsor ?>" data-refresh-interval="30" data-speed="2700"></span></div>
						<h5>จำนวนครั้งที่ปิด VIP-Mini</h5>
					</div>

				</div>

				<div class="section bottommargin-lg footer-stick">

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-diamond"></i>
						<div class="counter counter-large" style="color: #1abc9c;"><span data-from="0" data-to="<?php echo $recordmoney ?>" data-refresh-interval="50" data-speed="2000"></span></div>
						<h5>รายได้ VIP/เดือน</h5>
					</div>

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-globe"></i>
						<div class="counter counter-large" style="color: #e74c3c;"><span data-from="0" data-to="<?php echo $recordbv ?>" data-refresh-interval="50" data-speed="2500"></span></div>
						<h5>BV/เดือน</h5>
					</div>

					<div class="col_one_fourth nobottommargin center">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-gift"></i>
						<div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="<?php echo $recordvpm ?>" data-refresh-interval="50" data-speed="3500"></span></div>
						<h5>จำนวนปิดVIP/เดือน</h5>
					</div>

					<div class="col_one_fourth nobottommargin center col_last">
						<i class="i-plain i-xlarge divcenter nobottommargin icon-fire"></i>
						<div class="counter counter-large" style="color: #9b59b6;"><span data-from="0" data-to="<?php echo $recordsponsor ?>" data-refresh-interval="30" data-speed="2700"></span></div>
						<h5>จำนวนครั้งปิดMini-VIP/เดือน</h5>
					</div>

				</div>
			</div>

		</section><!-- #content end -->

		<footer id="footer" class="dark">

			<?php include 'footer.php'; ?>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="/js/functions.js"></script>

</body>
</html>
