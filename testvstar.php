
<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>VSTAR-ID</th>
      <th>รายชื่อ</th>
      <th>สาขา</th>
      <th>วันที่สมัคร</th>
      <th>Sponsored</th>
      <th>SponsoredVIP</th>
      <th>SponsoredMini</th>
      <th>รายได้จาก VIP-Mini</th>
    </tr>
  </thead>
  <tbody>
<?php
include 'connect.php';

$strSQL = "SELECT * FROM vip ";
$objQuery  = mysql_query($strSQL);
{
  while($objResult = mysql_fetch_array($objQuery))
  {
    ?>

    <tr class="">

      <?php

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

      $recordmoneym = $recordm * 1500.00 ;
      $recordmoneyvp = $recordvp * 7000.00 ;
      $recordmoney = $recordmoneym + $recordmoneyvp;





      ?>

      <td><?php echo $objResult["Vstar"]; ?></td>
      <td><?php echo $objResult["Name"];?> <?php echo $objResult["Surname"];?></td>
      <td><?php echo $objResult["Branch"]; ?></td>
      <td><?php echo $objResult["Dates"]; ?></td>
      <td><?php echo $recordsponsor ?> คน</td>
      <td><?php if ($recordvp >=2){

      echo 'STAR';
    }
    else {

      echo 'ไม่มีตำแหน่ง';
      } ?> คน</td>
      <td><?php echo $recordm ?> คน</td>
      <td><?php echo $recordmoney ?></td>
    </a>
  </tr>

  <?php
    }
  }
?>
</tbody>
</table>
</div>
