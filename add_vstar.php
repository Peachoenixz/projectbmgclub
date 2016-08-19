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

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('images/about/parallax.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>ลงรายชื่อผู้สมัครเข้าร่วม BMG CLUB</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">หน้าแรก</a></li>
					<li class="active">ลงรายชื่อผู้สมัคร</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">



					<div class="nobottommargin">

						<div id="job-apply" class="heading-block">
							<h2>ลงรายชื่อผู้สมัคร</h2>

						</div>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form action="save_vstar.php" id="template-jobform" name="template-jobform" method="post" role="form" enctype="multipart/form-data">

								<div class="form-process"></div>

								<div class="col_half">
									<label for="template-jobform-fname">ชื่อ <small>*</small></label>
									<input type="text" id="template-jobform-fname" name="template-jobform-fname" value="" class="sm-form-control required" />
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-lname">นามสกุล <small>*</small></label>
									<input type="text" id="template-jobform-lname" name="template-jobform-lname" value="" class="sm-form-control required" />
								</div>

								<div class="clear"></div>

								<div class="col_half">
									<label for="template-jobform-age">รหัสสมาชิก <small>*</small></label>
									<input type="text" name="template-jobform-vstar" id="template-jobform-vstar" value="" class="sm-form-control required" />
								</div>
								<?php
								$datecurrent = date("d/m/Y")
								 ?>
								<div class="col_half col_last">
									<label for="template-jobform-city">วันที่สมัคร <small>*</small></label>
									<input type="text" name="template-jobform-date" id="template-jobform-date" value="<?php echo $datecurrent ?>" class="sm-form-control required" />
								</div>

								<div class="clear"></div>

								<div class="col_half">
									<label for="template-jobform-service">VIP - Mini ที่ <small>*</small></label>
									<select name="template-jobform-vp" id="template-jobform-vp"  tabindex="9" class="sm-form-control required">
										<option value="">เลือกเซตที่ผู้สมัครเลือก</option>
										<option value="V-1">V-1</option>
                    <option value="V-2">V-2</option>
                    <option value="V-3">V-3</option>
                    <option value="V-4">V-4</option>
                    <option value="V-5">V-5</option>
                    <option value="V-6">V-6</option>
                    <option value="M-1">M-1</option>
                    <option value="M-2">M-2</option>
                    <option value="M-3">M-3</option>
                    <option value="M-4">M-4</option>
              		</select>
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-salary">สาขาผู้ลงสมัคร</label>
									<select name="template-jobform-branch" id="template-jobform-branch"  tabindex="9" class="sm-form-control required" onchange="ChangeCodeList()">
										<option value="">เลือกเซตที่ผู้สมัครเลือก</option>
										<option value="กรุงเทพมหานครและปริมณฑล">กรุงเทพมหานครและปริมณฑล</option>
                    <option value="จันทบุรี">จันทบุรี</option>
                    <option value="ปทุมธานี">ปทุมธานี</option>
                    <option value="ลพบุรี">ลพบุรี</option>
                    <option value="สระบุรี">สระบุรี</option>

              		</select>
								</div>

								<div class="col_half">
									<label for="template-jobform-service">อัพไลน์ <small>*</small></label>
									<select name="template-jobform-up" id="template-jobform-up"  tabindex="9" class="sm-form-control required">
										<option value="">เลือกฝั่งอัพไลน์</option>
										<option value="ซ้าย">ซ้าย</option>
                    <option value="ขวา">ขวา</option>
              		</select>
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-time">ผู้แนะนำ</label>
									<input type="text" name="template-jobform-sp" id="template-jobform-sp" value="" size="22" tabindex="7" class="sm-form-control" />
								</div>

								<div class="clear"></div>

								<div class="col_half">
									<label for="template-jobform-website">เบอร์โทร</label>
									<input type="text" name="template-jobform-phone" id="template-jobform-phone" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

                <div class="col_half col_last">
									<label for="template-jobform-website">ชื่อบัญชีผู้สมัคร</label>
									<input type="text" name="template-jobform-bk" id="template-jobform-bk" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

								<div class="col_half">
									<label for="template-jobform-website">ธนาคารบัญชีผู้สมัคร</label>
									<select name="template-jobform-bkn" id="template-jobform-bkn"  tabindex="9" class="sm-form-control required">
										<option value="">เลือกธนาคารของคุณ</option>
										<option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
										<option value="ธ.กสิกร">ธ.กสิกรไทย</option>
                    <option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
										<option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
										<option value="ธ.ทหารไทย">ธ.ทหารไทย</option>
										<option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
										<option value=">ธ.ก.ส.">ธ.ก.ส.</option>
										<option value="ธ.ธนชาต">ธ.ธนชาต</option>
										<option value="ธ.ออมสิน">ธ.ออมสิน</option>
              		</select>
								</div>

								<div class="col_half col_last">
									<label for="template-jobform-website">สาขาบัญชีผู้สมัคร</label>
									<input type="text" name="template-jobform-bkb" id="template-jobform-bkb" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

								<div class="col_half">
									<label for="template-jobform-website">เลขบัญชีผู้สมัคร</label>
									<input type="text" name="template-jobform-bku" id="template-jobform-bku" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

                <div class="col_half col_last">
									<label for="template-jobform-website">เลขบัตรประชาชน</label>
									<input type="text" name="template-jobform-c" id="template-jobform-c" value="" size="22" tabindex="8" class="sm-form-control" />
								</div>

                <div class="clear"></div>

								<div class="col_half">
									<label>อัพโหลดรูปภาพ:</label><br>
									<input id="input-8" name="fileToUpload" type="file" accept="image/*" class="file-loading"data-allowed-file-extensions='[]'>
								</div>

								<?php $dateweb = date('Y-m'); ?>
								<div class="col_half col_last">
									<label for="template-jobform-website">เลือกใบสมัคร เก่า/ใหม่</label>
									<select name="template-jobform-dateweb" id="template-jobform-dateweb"  tabindex="9" class="sm-form-control required">
										<option value="">เลือกใบสมัครที่ท่านใช้</option>
										<option value="<? echo $dateweb ?>">ใบสมัครใหม่</option>
										<option value="2016-07">ใบสมัครเก่า</option>

									</select>
								</div>


								<div class="hidden">
									<input type="text" id="template-jobform-botcheck" name="template-jobform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_half">
								<label for="template-jobform-cvfile">For Code Show color<small>*</small></label>
									<select name="template-jobform-code" id="template-jobform-code"  tabindex="9" class="sm-form-control required" onchange="ChangeCodeList()">
										<option value="">เลือกเซตที่ผู้สมัครเลือก</option>
										<option value="danger">กรุงเทพมหานครและปริมณฑล</option>
                    <option value="warning">จันทบุรี</option>
                    <option value="inactive">ปทุมธานี</option>
                    <option value="info">ลพบุรี</option>
                    <option value="success">สระบุรี</option>

              		</select>
								</div>

								<div class="col_full">
									<button class="button button-3d button-large btn-block nomargin" name="template-jobform-apply" type="submit" value="apply">ยืนยันการลงทะเบียนผู้สมัคร</button>
								</div>

							</form>

						</div>

					</div>

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

	<!-- Bootstrap File Upload Plugin -->
	<script type="text/javascript" src="js/components/bs-filestyle.js"></script>


	<!-- Footer Scripts
		============================================= -->
		<script type="text/javascript" src="js/functions.js"></script>

		<script  type="text/javascript">
			$(document).on('ready', function() {
				$("#input-5").fileinput({showCaption: false});

				$("#input-6").fileinput({
					showUpload: false,
					maxFileCount: 10,
					mainClass: "input-group-lg",
					showCaption: true
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
					previewFileType: "text",
					allowedFileExtensions: ["txt", "md", "ini", "text"],
					previewClass: "bg-warning",
					browseClass: "btn btn-primary",
					removeClass: "btn btn-default",
					uploadClass: "btn btn-default",
				});

				$("#input-10").fileinput({
					showUpload: false,
					layoutTemplates: {
						main1: "{preview}\n" +
						"<div class=\'input-group {class}\'>\n" +
						"   <div class=\'input-group-btn\'>\n" +
						"       {browse}\n" +
						"       {upload}\n" +
						"       {remove}\n" +
						"   </div>\n" +
						"   {caption}\n" +
						"</div>"
					}
				});

				$("#input-11").fileinput({
					maxFileCount: 10,
					allowedFileTypes: ["image", "video"]
				});

				$("#input-12").fileinput({
					showPreview: false,
					allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
					elErrorContainer: "#errorBlock"
				});
			});

		</script>

</body>
</html>
