<?php 
include 'header.php';
$iceriksor=$db->prepare("select * from icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
  'icerik_id'=>$_GET['icerik_id']

));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>
<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
<div class="col-md-12">
        <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
          
          <span class="thumb-info-caption">
            <span class="thumb-info-caption-text">
              <h2 style="margin-top: 10px;" class="mb-md mt-xs"><?php echo $icerikcek['icerik_ad']; ?></h2>
              <span class="post-meta">
                <span><?php echo $icerikcek['icerik_zaman']; ?> | <a href="#">Ömer Faruk Dilek</a></span>
              </span>


              <img class="img-responsive" style="margin:0 auto; width: 500px; height: 350px;" src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="">


              <p style="font-size:10px">
                  <?php echo $icerikcek['icerik_detay']; ?>
                  </p>
              
              <hr>
             <p> <b>Anahtar Kelimeler: </b> <?php $etiketler=explode(', ', $icerikcek['icerik_keyword']);  
             
             foreach($etiketler as $etiketbas)
             {
                 echo $etiketbas; echo ", ";
             }
             
             ?>
             </p>
            </span>
          </span>
        </span>
</div>
      </div>
    </div>
  </div>
</article>
<?php include 'footer.php'; ?>