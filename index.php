<?php 
include 'header.php';

//	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'"); //Türkçe karakter için.


 $sayfada = 4; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 $sorgu=$db->prepare("select * from icerik");
 $sorgu->execute();
 $toplam_icerik=$sorgu->rowCount();
 $toplam_sayfa = ceil($toplam_icerik / $sayfada);
                    // eğer sayfa girilmemişse 1 varsayalım.
 $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
                // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
 if($sayfa < 1) $sayfa = 1; 
                // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
 if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 
 $limit = ($sayfa - 1) * $sayfada;





  $iceriksor=$db->prepare("select * from icerik order by icerik_id DESC limit $limit,$sayfada");
  $iceriksor->execute();




  ?>
  <!-- Main Content -->
  <div role="main" class="main">
    <div class="container">
      <div class="row pt-xl mb-lg">


        <div class="col-md-12">



          <div class="row mt-xl">

           <?php  


           while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){

            ?>



            <span class="border">

              <div class="col-md-12">

                <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
                  <span class="thumb-info-side-image-wrapper p-none">
                    <a title="" href="post.php">
                     <a href="<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"];?>"> <img style="float: left; padding: 5px; margin:10px; width: 400px; height: 250px;" src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt=""></a>
                   </a>
                 </span>
                 <span class="thumb-info-caption">
                  <span class="thumb-info-caption-text">
                    <h2 style="margin-top: 10px;" class="mb-md mt-xs"><a href="<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"];?>"><?php echo $icerikcek['icerik_ad']; ?></a></h2>
                    <span class="post-meta">
                      <span><?php echo $icerikcek['icerik_zaman']; ?> | <?php echo $ayarcek['ayar_author']; ?></span>
                    </span>
                    <p style="font-size:10px !important"><?php echo substr($icerikcek['icerik_detay'], 0,200); ?>...</p>
                    <a class="mt-md" href="<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"];?>">Devamını Oku <i class="fa fa-long-arrow-right"></i></a>
                  
                  
                  <a target='_blank' href='http://www.facebook.com/share.php?u=https://omerfarukdilek.com/<?=seo($icerikcek["icerik_ad"]).'-'.$icerikcek["icerik_id"];?>'><i class="fa fa-facebook-square fa-2x" style="float:right;"></i></a>
             
                    
                  </span>
                </span>
              </span>

            </div>


          </span>
          <hr>

          <?php } ?>

        </div>



        <hr>










        <!-- Pager -->
        <div class="float-md-right">

       <ul class="pagination">

        <?php 

        $s=0;
        while ($s<$toplam_sayfa) {

          $s++;

          ?>

          <?php

          if($s==$sayfa){ ?>

          <li class="active">

            <a href="index.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
          </li>

          <?php } else { ?>

          <li>
            <a href="index.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
          </li>
          <?php }} ?>
        </ul>       

      </div>
    </div>

  </div>
  <hr>
  <?php include 'footer.php'; ?>

  