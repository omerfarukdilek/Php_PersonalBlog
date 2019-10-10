<?php 
include 'header-hakkimda.php';
$hakkimdasor=$db->prepare("select * from hakkimda where hakkimda_id=?");
$hakkimdasor->execute(array(0));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    	<h1 class="mt-xl mb-none"><?php echo $hakkimdacek['hakkimda_baslik']; ?></h1>
      <p><?php echo $hakkimdacek['hakkimda_icerik']; ?></p>
      
    </div>
  </div>
</div>
<hr>
<?php include 'footer.php'; ?>
