<?php

include 'admin/option/baglan.php';
include 'admin/production/fonksiyon.php';
                   
if(isset($_GET['sef'])){


  $kategorisor=$db->prepare("Select * from kategori where kategori_seourl=:seourl");
  $kategorisor->execute(array(

 'seourl' => $_GET['sef']));
   

$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

$kategori_id=$kategoricek['kategori_id'];




$iceriksor=$db->prepare("select * from icerik where kategori_id=:kategori_id order by icerik_zaman DESC limit 25");
$iceriksor->execute(array(

'kategori_id' => $kategori_id));
}
else
{
$iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit 25");
$iceriksor->execute();
}
?>