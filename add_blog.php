<?php
include('connect.php');

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

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic|Play+Fair:700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="css/components/bs-filestyle.css" type="text/css" />


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->


	<!-- Document Title
	============================================= -->
	<title>BMG CLUB รายชื่อ</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

      <!-- Header
      ============================================= -->
      <header id="header">

				<?php include('header-vstar.php'); ?>

			</header>
			<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/about/parallax.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>สร้าง BLOG BMG CLUB</h1>
				<ol class="breadcrumb">
					<li><a href="newlist.php">หน้าแรก</a></li>
					<li class="active">สร้าง BLOG</li>
				</ol>
			</div>

		</section><!-- #page-title end -->


    <?php
    mysql_select_db("mydatabase");
    $queryusername = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
    $usernamequery = mysql_query($queryusername);
    $usernameresult = mysql_fetch_array($usernamequery);
    ?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">



					<div class="nobottommargin">

						<div id="job-apply" class="heading-block">
							<h2>สร้างหน้า BLOG</h2>

						</div>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form action="save_blog" id="template-jobform" name="template-jobform" method="post" role="form" enctype="multipart/form-data">

								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-jobform-fname">ชื่อหัวข้อเรื่อง <small>*</small></label>
									<input type="text" id="template-jobform-fname" name="header" value="" class="sm-form-control required" />
								</div>

                <div class="col_half col_last">
									<label for="template-jobform-service">เลือกหมวดหมู่<small>*</small></label>
									<select name="groups" id="template-jobform-vp"  tabindex="9" class="sm-form-control required">
										<option value="">เลือกหมวดหมู่</option>
										<option value="ข่าวสารทั่วไป">ข่าวสาร</option>
                    <option value="อีเวนท์">อีเวนท์</option>
                    <option value="กิจกรรม">กิจกรรม</option>
              		</select>
								</div>

								<div class="clear"></div>

                <?php
  								$datecurrent = date("d-M-Y")
  								 ?>

                   <div class="col_half">
   									<label for="template-jobform-city">ผู้ลงเขียน Blog <small>*</small></label>
   									<input type="text" name="writer" id="template-jobform-date" value="<?php echo $usernameresult["Name"];?>" class="sm-form-control required" readonly/>
   								</div>

  								<div class="col_half col_last ">
  									<label for="template-jobform-city">วันที่เขียน Blog <small>*</small></label>
  									<input type="text" name="datehead" id="template-jobform-date" value="<?php echo $datecurrent ?>" class="sm-form-control required" readonly/>
  								</div>

  								<div class="clear"></div>


  								<div class="col_full">
  									<label for="template-jobform-service">เนื้อหาแสดง สุ่ม และ ด้านหน้า <small>*</small></label>
  									<textarea name="codefront" id="template-jobform-up"  tabindex="9" class="sm-form-control required" rows="5"></textarea>

  								</div>

                  <div class="col_half">
  									<label for="template-jobform-service">เลือก icon Beta V.<small>*</small></label>
  									<select name="icon" id="template-jobform-vp"  tabindex="9" class="sm-form-control required">
  										<option value="">กรุณาเลือก Icon</option>
  										<option value="icon-newspaper">ข่าวสาร</option>
                      <option value="icon-calendar2">อีเวนท์</option>
                      <option value="icon-like">กิจกรรม</option>
                		</select>
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">datafilter Beta</label>
                    <select name="datafilter" id="template-jobform-vp"  tabindex="9" class="sm-form-control required">
  										<option value="">กรุณาเลือก Filter</option>
  										<option value="bf-news">ข่าวสาร</option>
                      <option value="bf-event">อีเวนท์</option>
                      <option value="bf-activity">กิจกรรม</option>
                		</select>
  								</div>

									<div class="col_half">
  									<label for="template-jobform-time">เลือกหมวดหมู่ seofriendly</label>
                    <select name="seofriendlyname" id="template-jobform-vp"  tabindex="9" class="sm-form-control required">
  										<option value=""></option>
  										<option value="news">ข่าวสาร</option>
                      <option value="event">อีเวนท์</option>
                      <option value="activity">กิจกรรม</option>
                		</select>
  								</div>

									<div class="col_half col_last">
  									<label for="template-jobform-time">ชื่อ seofriendly</label>
										<input type="text" name="seofriendly" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

  								<div class="col_half">
  									<label for="template-jobform-time">Tag-1</label>
  									<input type="text" name="tag" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">Tag-2</label>
  									<input type="text" name="tag2" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half ">
  									<label for="template-jobform-time">Tag-3</label>
  									<input type="text" name="tag3" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">Tag-4</label>
  									<input type="text" name="tag4" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half ">
  									<label for="template-jobform-time">Tag-5</label>
  									<input type="text" name="tag5" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">Tag-6</label>
  									<input type="text" name="tag6" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half ">
  									<label for="template-jobform-time">Tag-7</label>
  									<input type="text" name="tag7" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">Tag-8</label>
  									<input type="text" name="tag8" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half ">
  									<label for="template-jobform-time">Tag-9</label>
  									<input type="text" name="tag9" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="col_half col_last">
  									<label for="template-jobform-time">Tag-10</label>
  									<input type="text" name="tag10" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
  								</div>

                  <div class="clear"></div>

  								<div class="col_half">
  									<label>อัพโหลดรูปภาพ 1:</label><br>
  									<input type="file" id="input-1" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic1" value="" />

  								</div>

                  <div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 2:</label><br>
  									<input type="file" id="input-2" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic2" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 1:</label><br>
  									<input type="text" id="pic" name="alt1" value=""  class="sm-form-control" />

  								</div>

									<div class="col_half col_last">
										<label>atl 2:</label><br>
										<input type="text" id="pic" name="alt2" value="" class="sm-form-control"  />

									</div>

                  <div class="col_half">
  									<label>อัพโหลดรูปภาพ 3:</label><br>
  									<input type="file" id="input-3" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic3" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 4:</label><br>
  									<input type="file" id="input-4" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic4" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 3:</label><br>
  									<input type="text" id="pic" name="alt3" value=""  class="sm-form-control" />

  								</div>

									<div class="col_half col_last">
										<label>atl 4:</label><br>
										<input type="text" id="pic" name="alt4" value=""  class="sm-form-control" />

									</div>

                  <div class="col_half">
  									<label>อัพโหลดรูปภาพ 5:</label><br>
  									<input type="file" id="input-5" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic5" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 6:</label><br>
  									<input type="file" id="input-6" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic6" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 5:</label><br>
  									<input type="text" id="pic" name="alt5" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 6:</label><br>
										<input type="text" id="pic" name="alt6" value=""  class="sm-form-control" />

									</div>

                  <div class="col_half">
  									<label>อัพโหลดรูปภาพ 7:</label><br>
  									<input type="file" id="input-7" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic7" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 8:</label><br>
  									<input type="file" id="input-8" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic8" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 7:</label><br>
  									<input type="text" id="pic" name="alt7" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 8:</label><br>
										<input type="text" id="pic" name="alt8" value="" class="sm-form-control"  />

									</div>

                  <div class="col_half">
  									<label>อัพโหลดรูปภาพ 9:</label><br>
  								  <input type="file" id="input-9" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic9" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 10:</label><br>
  									<input type="file" id="input-10" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic10" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 9:</label><br>
  									<input type="text" id="pic" name="alt9" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 10:</label><br>
										<input type="text" id="pic" name="alt10" value="" class="sm-form-control"  />

									</div>

									<div class="col_half ">
  									<label>อัพโหลดรูปภาพ 11:</label><br>
  									<input type="file" id="input-11" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic11" value=""  />

  								</div>

									<div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 12:</label><br>
  									<input type="file" id="input-12" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic12" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 11:</label><br>
  									<input type="text" id="pic" name="alt11" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 12:</label><br>
										<input type="text" id="pic" name="alt12" value="" class="sm-form-control"  />

									</div>

									<div class="col_half">
  									<label>อัพโหลดรูปภาพ 13:</label><br>
  									<input type="file" id="input-13" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic13" value=""  />

  								</div>

									<div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 14:</label><br>
  									<input type="file" id="input-14" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic14" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 13:</label><br>
  									<input type="text" id="pic" name="alt13" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 14:</label><br>
										<input type="text" id="pic" name="alt14" value="" class="sm-form-control"  />

									</div>

									<div class="col_half">
  									<label>อัพโหลดรูปภาพ 15:</label><br>
  									<input type="file" id="input-15" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic15" value=""  />

  								</div>

									<div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 16:</label><br>
  									<input type="file" id="input-16" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic16" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 15:</label><br>
  									<input type="text" id="pic" name="alt15" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 16:</label><br>
										<input type="text" id="pic" name="alt16" value="" class="sm-form-control"  />

									</div>

									<div class="col_half">
  									<label>อัพโหลดรูปภาพ 17:</label><br>
  									<input type="file" id="input-17" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic17" value=""  />

  								</div>

									<div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 18:</label><br>
  									<input type="file" id="input-18" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic18" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 17:</label><br>
  									<input type="text" id="pic" name="alt17" value="" class="sm-form-control"  />

  								</div>

									<div class="col_half col_last">
										<label>atl 18:</label><br>
										<input type="text" id="pic" name="alt18" value="" class="sm-form-control"  />

									</div>

									<div class="col_half">
  									<label>อัพโหลดรูปภาพ 19:</label><br>
  									<input type="file" id="input-19" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic19" value=""  />

  								</div>

									<div class="col_half col_last">
  									<label>อัพโหลดรูปภาพ 20:</label><br>
  									<input type="file" id="input-20" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="pic20" value=""  />

  								</div>

									<div class="col_half">
  									<label>alt 19:</label><br>
  									<input type="text" id="pic" name="alt19" value="" class="sm-form-control"   />

  								</div>

									<div class="col_half col_last">
										<label>atl 20:</label><br>
										<input type="text" id="pic" name="alt20" value="" class="sm-form-control"  />

									</div>

                  <div class="col_half">
  									<label>รูปเล็กหน้า index :</label><br>
  								  <input type="file" id="input-21" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="picsmall" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>รูปขนาดกลาง Random:</label><br>
  									<input type="file" id="input-22" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="picmedieum" value=""  />

  								</div>


									<div class="col_half">
  									<label>alt small:</label><br>
  									<input type="text" id="pic" name="alt21" value=""  class="sm-form-control"/>

  								</div>

									<div class="col_half col_last">
										<label>atl random:</label><br>
										<input type="text" id="pic" name="alt22" value="" class="sm-form-control" />

									</div>

									<div class="col_half">
  									<label>รูปใหญ่หน้าเว็บ :</label><br>
  								  <input type="file" id="input-23" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="bigpic" value=""  />

  								</div>

                  <div class="col_half col_last">
  									<label>รูปใหญ่ในหน้าข่าว:</label><br>
  									<input type="file" id="input-24" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="bigpicin" value=""  />

  								</div>


									<div class="col_half">
  									<label>alt ใหญ่หน้าเว็บ:</label><br>
  									<input type="text" id="pic" name="alt23" value=""  class="sm-form-control"/>

  								</div>

									<div class="col_half col_last">
										<label>atl รูปใหญ่ในหน้าข่าว:</label><br>
										<input type="text" id="pic" name="alt24" value="" class="sm-form-control" />

									</div>

									<div class="col_half col_last">
  									<label>รูปใหญ่หน้าข่าว:</label><br>
  									<input type="file" id="input-25" accept="image/*" class="file-loading"data-allowed-file-extensions='[]' name="bigpicfront" value=""  />

  								</div>

									<div class="col_half col_last">
										<label>atl รูปใหญ่หน้าข่าว:</label><br>
										<input type="text" id="pic" name="alt25" value="" class="sm-form-control" />

									</div>

  								<div class="hidden">
  									<input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
  								</div>

                  <div class="col_full">
  									<label for="template-jobform-service">Code In <small>*</small></label>
  									<textarea name="codein" id="template-jobform-up"  tabindex="9" class="sm-form-control required" rows="50"></textarea>

  								</div>

								<div class="col_half">
									<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">ตกลงการสร้าง Blog</button>
								</div>

							</form>

						</div>

					</div>


          <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
            <?php
            $dataexample =  $_GET["q"];
             ?>
            <div class="col_full">
              <label for="template-jobform-service">Code เพื่อแสดงหน้าเนื้อหา Beta<small>*</small></label>
              <textarea type="text" class="sm-form-control required" name="q" id="txtKeyword" value="<?php echo $dataexample ?>"> <?php echo $dataexample?> </textarea>
            </div>

          <div class="col_half col_last">
            <button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">ดูตัวอย่าง</button>
          </div>

        </form>

				</div>
        <div class="container clearfix">

        <?php

          echo $dataexample

        ?>
      </div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<?php  include'footer.php'; ?>

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

		<!-- Bootstrap File Upload Plugin -->
		<script type="text/javascript" src="js/components/bs-filestyle.js"></script>

			<script  type="text/javascript">
				$(document).on('ready', function() {

					$("#input-1").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-2").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-3").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-4").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-5").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-6").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-7").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-8").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-9").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-10").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-11").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-12").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-13").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-14").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-15").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-16").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-17").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-18").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-19").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-20").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-21").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-22").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-23").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-24").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

					$("#input-25").fileinput({
						mainClass: "input-group-md",
						showUpload: true,
						previewFileType: "image",
						browseClass: "btn btn-success",
						browseLabel: "Pick Image",
						browseIcon: "<i class=\"icon-picture\"></i> ",
						removeClass: "btn btn-danger",
						removeLabel: "Delete",
						removeIcon: "<i class=\"icon-trash\"></i> ",
						uploadClass: "btn btn-info",
						uploadLabel: "Upload",
						uploadIcon: "<i class=\"icon-upload\"></i> "
					});

				});

			</script>

</body>
</html>
