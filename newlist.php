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

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<?php include 'meta.php'; ?>

	<?php include 'favicon.php'; ?>

	<?php include 'stylesheet.php'; ?>

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="css/components/bs-datatable.css" type="text/css" />



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

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Panel Admin By PP.</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<!-- Post Content

					<div class="postcontent nobottommargin clearfix">
						<form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
							<div class="col_full">
								<label for="form-condition-1">ค้นหา วัน/เดือน/ปี ที่สมัคร , ชื่อผู้สมัคร , รหัสสมาชิก</label>
								<input type="text" class="sm-form-control required" name="q" id="txtKeyword" value="<?php echo $_GET["q"];?>">
							</div>
						</form>
						============================================= -->

						<h4>รายชื่อสมาชิก BMG CLUB</h4>

						<div class="table-responsive">
						<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>VSTAR-ID</th>
									<th>รายชื่อ</th>
									<th hidden>สาขา</th>
									<th hidden>วันที่สมัคร</th>
									<th>VIP / Mini / รวม</th>
									<th>รายได้จาก VIP-Mini</th>
									<th>ตำแหน่ง</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$strSQL = "SELECT * FROM vip ";
								$objQuery  = mysql_query($strSQL);
								{
									while($objResult = mysql_fetch_array($objQuery))
									{
										?>

										<tr class="<?php echo $objResult["Code"]; ?>">

											<?php

											$Pos = $objResult["Position"];
									    $Vstar = $objResult["Vstar"];
									    $sponsor = $objResult["Name"];
									    $sponsorsur = $objResult["Surname"];
									    $querysponsor = mysql_query("SELECT * FROM vip WHERE Sponsor LIKE '%$sponsor $sponsorsur' ");
									    $recordsponsor = mysql_num_rows($querysponsor);

											$m = 'M';
											$querysponsorm = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Setvip LIKE '%$m%' ");
											$recordm = mysql_num_rows($querysponsorm);

											$vp = 'V';
											$querysponsorvp = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Setvip LIKE '%$vp%' ");
											$recordvp = mysql_num_rows($querysponsorvp);

											$star = "STAR";
											$querysponsorsstar = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Position LIKE '%$star%' ");
											$recordstar = mysql_num_rows($querysponsorsstar);

											$sstar = "SUPER STAR";
											$querysponsorsustar = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Position LIKE '%$sstar%' ");
											$recordsstar = mysql_num_rows($querysponsorsustar);

											$dstar = "DIAMOND STAR";
											$querysponsorsudstar = mysql_query("SELECT * FROM vip WHERE vip.Sponsor LIKE '%$sponsor $sponsorsur' and vip.Position LIKE '%$dstar%' ");
											$recordsudstar = mysql_num_rows($querysponsorsudstar);

											$sdstar = "SUPER DIAMOND STAR";


											$recordmoneym = $recordm * 1500.00 ;
											$recordmoneyvp = $recordvp * 7000.00 ;
											$recordmoney = $recordmoneym + $recordmoneyvp;

											?>
											<td><icon class="icon-line-server"></i> <?php echo $objResult["Vstar"]; ?></td>
											<td><a href="Vstar=<?php echo $objResult["Vstar"]; ?>"><i class="icon-user"></i> <?php echo $objResult["Name"];?> <?php echo $objResult["Surname"];?></a></td>
											<td hidden><?php echo $objResult["Branch"]; ?></td>
											<td hidden><?php echo $objResult["Dates"]; ?></td>
											<td><?php echo "$recordvp / $recordm / $recordsponsor"; ?> คน <i class="icon-users"></i></td>
											<td><?php echo $recordmoney ?> <i class="fa fa-bitcoin"></i></td>
											<td><i class="icon-thumbs-up"></i> <?php if(empty($Pos)){
									      echo "VIP";
									    }else{
									      echo $Pos;
									    } ?></td>

											<td>
												<a href="listedit.php?Vstar=<?php echo $objResult['Vstar'] ?>"  class="btn btn-primary btn-sm"><span class="icon-edit" aria-hidden="true"></span></a>
											</td>
										</a>
									</tr>

									<?php }

									if($recordsudstar == 2){
							      $strSQL = "UPDATE vip SET ";
							      $strSQL .="Position = '".$sdstar."' ";
							      $strSQL .="WHERE Vstar = '".$Vstar."' ";
							      $query = mysql_query($strSQL);
							    }
							    elseif($recordsstar == 2){
							      $strSQL = "UPDATE vip SET ";
							      $strSQL .="Position = '".$dstar."' ";
							      $strSQL .="WHERE Vstar = '".$Vstar."' ";
							      $query = mysql_query($strSQL);
							    }
							    elseif($recordstar == 2){
							      $strSQL = "UPDATE vip SET ";
							      $strSQL .="Position = '".$sstar."' ";
							      $strSQL .="WHERE Vstar = '".$Vstar."' ";
							      $query = mysql_query($strSQL);
							    }
							    elseif($recordvp == 2 ){
							      $strSQL = "UPDATE vip SET ";
							      $strSQL .="Position = '".$star."' ";
							      $strSQL .="WHERE Vstar = '".$Vstar."' ";
							      $query = mysql_query($strSQL);
							    }
								}?>
							</tbody>
						</table>
					</div>


						<?php
						$allmember = mysql_query("SELECT * FROM vip");
						$recordsallmember = mysql_num_rows($allmember);

						$datemonth = date('Y-m');
						$monthmember = mysql_query("SELECT * FROM vip WHERE Timevip LIKE '%$datemonth' ");
						$recordsmonthmember = mysql_num_rows($monthmember);
						?>

						<div class="line"></div>


						<div class="col_one_fourth nobottommargin center">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-users"></i>
							<div class="counter counter-large" style="color: #1abc9c;"><span data-from="0" data-to="<?php echo $recordsallmember ?>" data-refresh-interval="50" data-speed="2000"></span></div>
							<h5>สมาชิกทั้งหมด</h5>
						</div>

						<div class="col_one_fourth nobottommargin center">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-user"></i>
							<div class="counter counter-large" style="color: #1abc9c;"><span data-from="0" data-to="<?php echo $recordsmonthmember ?>" data-refresh-interval="50" data-speed="2000"></span></div>
							<h5>สมาชิกในเดือนนี้</h5>
						</div>

						<div class="col_two_fifth topmargin col_last" id="pieChart" style="opacity: 0;">
							<canvas id="pieChartCanvas" width="430" height="300"></canvas>
							<h3 class="center">สมาชิกใหม่ในสาขา/เดือน</h3>
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

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="css/components/bs-datatable.css" type="text/css" />
	<script type="text/javascript" src="js/components/bs-datatable.js"></script>

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script>

		$(document).ready(function() {
			$('#datatable1').DataTable();
		});

	</script>

	<?php
	$Sara = "สระบุรี";
	$date = date('Y-m');
	$querysponsor = mysql_query("SELECT * FROM vip WHERE vip.Branch LIKE '%$Sara%' AND vip.Timevip LIKE '%$date'");
	$recordsara = mysql_num_rows($querysponsor);

	$pat = "ปทุมธานี";
	$querypat = mysql_query("SELECT * FROM vip WHERE vip.Branch LIKE '%$pat%' AND vip.Timevip LIKE '%$date'");
	$recordpat = mysql_num_rows($querypat);

	$lob = "ลพบุรี";
	$querylob = mysql_query("SELECT * FROM vip WHERE vip.Branch LIKE '%$lob%' AND vip.Timevip LIKE '%$date'");
	$recordlob = mysql_num_rows($querylob);

	$bangkok = "กรุงเทพมหานครและปริมณฑล";
	$querybangkok = mysql_query("SELECT * FROM vip WHERE vip.Branch LIKE '%$bangkok%' AND vip.Timevip LIKE '%$date'");
	$recordbangkok = mysql_num_rows($querybangkok);

	$jan = "จันทบุรี";
	$queryjan = mysql_query("SELECT * FROM vip WHERE vip.Branch LIKE '%$jan%' AND vip.Timevip LIKE '%$date'");
	$recordjan = mysql_num_rows($queryjan);
	?>


	<script type="text/javascript">
	var sara = "<?php echo $recordsara ?>";
	var pat = "<?php echo $recordpat ?>";
	var lob = "<?php echo $recordlob ?>";
	var bangkok = "<?php echo $recordbangkok ?>";
	var jan = "<?php echo $recordjan ?>";

	jQuery(window).load( function(){

		var pieChartData = [
			{
				value: sara,
				color:"#aeed7c"
			},
			{
				value : pat,
				color : "#eda47c"
			},
			{
				value : lob,
				color : "#7ce9ed"
			},
			{
				value : bangkok,
				color : "#ec7ced"
			},
			{
				value : jan,
				color : "#ffea00"
			}
		];

	var globalGraphSettings = {animation : Modernizr.canvas};

		function showPieChart(){
				var ctx = document.getElementById("pieChartCanvas").getContext("2d");
				new Chart(ctx).Pie(pieChartData,globalGraphSettings);
			}


		$('#pieChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showPieChart,300); },{accX: 0, accY: -155},'easeInCubic');

	});


	</script>


</body>
</html>
