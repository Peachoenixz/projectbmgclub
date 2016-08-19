<?php
session_start();
mysql_connect("localhost", "ImPeet!", "Petuyio001!") or die(mysql_error());
mysql_select_db("admin_order") or die(mysql_error());
mysql_query("SET NAMES UTF8");
$strSQL = "SELECT * FROM product WHERE ProductID = 2;";
$objResult = mysql_fetch_array($objQuery);
$objQuery = mysql_query($strSQL)  or die(mysql_error());
?>
                <div class="single-product shop-quick-view-ajax clearfix">
                  <?php
                  while($objResult = mysql_fetch_array($objQuery))
                  {
                   ?>
                    <div class="ajax-modal-title">
                        <a href="<?php echo $objResult["Link-index"];?>"><h2 style="font-family: 'Kanit', sans-serif;"><?php echo $objResult["ProductName"]; ?></h2></a>
                    </div>

                    <div class="product modal-padding clearfix">

                        <div class="col_half nobottommargin">
                            <div class="product-image">
                                <div class="fslider" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="<?php echo $objResult["Link-index"];?>" title="<?php echo $objResult["Title"];?>"><img src="images/shop/<?php echo $objResult["Picture"];?>" alt="<?php echo $objResult["Alt"];?>"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="#sale-flash"></div>
                            </div>
                        </div>
                        <div class="col_half nobottommargin col_last product-desc">
                            <div class="product-price" style="font-family: 'Kanit', sans-serif;"><ins><?php echo $objResult["Price"];?> ฿</ins></div>
                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                                <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data' action="order.php?ProductID=<?php echo $objResult["ProductID"]; ?>">
                									<button type="submit" class="add-to-cart button nomargin" style="font-family: 'Kanit', sans-serif;">ใส่ตระกร้าสินค้า</button>
                								</form>
                            <!-- Product Single - Quantity & Cart Button End -->

                            <div class="clear"></div>
                            <div class="line"></div>
                            <p style="font-family: 'Kanit', sans-serif;">น้ำแร่จากแหล่งธรรมชาติที่ผสมผสานแร่ธาตุต่างๆ ตามคุณสมบัติโดยเฉพาะ ผนวกกับเทคโนโลยีที่คัดลอกแม่แบบจากธรรมชาติ เปลี่ยนแปลงให้โมเลกุลของน้ำแร่เล็กลงเพื่อให้สามารถเดินทางไปถึงระดับเซลได้เร็วกว่าปกติ จึงทำให้เซลได้รับความชุ่มชื้น สดชื่น</p>
                            <ul class="iconlist">
                                <li style="font-family: 'Kanit', sans-serif;"><i class="icon-caret-right"></i> ผลิตจากน้ำแร่ธรรมชาติ 100%</li>
                                <li style="font-family: 'Kanit', sans-serif;"><i class="icon-caret-right"></i> ขนาดพกพาสามารถใช้งานได้ทุกที่</li>
                            </ul>
                            <div class="panel panel-default product-meta nobottommargin">
                                <div class="panel-body">
                                    <span class="sku_wrapper" style="font-family: 'Kanit', sans-serif;">รหัสสินค้า : <span class="sku">3011</span></span>
                                    <span class="posted_in">รายการสินค้า :<a href="#" rel="tag">ผลิตภัณฑ์สปา</a></span>
                                    <span class="tagged_as" style="font-family: 'Kanit', sans-serif;">Tags: <a href="#" rel="tag">ผลิตภัณฑ์สปา</a>, <a href="#" rel="tag">น้ำแร่ธรรมชาติ</a></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
