<?php 
include 'header.php';
include '../option/baglan.php'; 


if(isset($_POST['arama'])){

  $aranan=$_POST['aranan'];

  $iceriksor=$db->prepare("select * from icerik where icerik_ad LIKE '%$aranan%' order by icerik_id ASC limit 25");

  $iceriksor->execute();
  $say=$iceriksor->rowCount();
}

else{

  $iceriksor=$db->prepare("select * from icerik order by icerik_id DESC limit 25");
  $iceriksor->execute();
  $say=$iceriksor->rowCount();
}

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
      </div>


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form action="" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelimeniz...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="arama">Ara!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div align="left" class="col-md-6">
              <h2>İçerik İşlemleri <small> <?php echo $say." Kayıt listelendi."  ?></small></h2><br>
              
            </div>
            <div align="right" class="col-md-6"><td class=" "><a href="icerik-ekle.php"><button class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a></td></div>

            <div class="clearfix"></div>
          </div>

          <div class="x_content">


            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">

                    <th width="180px;" class="column-title text-center">İçerik Tarih </th>
                    <th class="column-title">İçerik Ad </th>
                    <th class="column-title text-center">İçerik Durum </th>
                    <th width="90px;" class="column-title text-center"> </th>
                    
                    
                  </tr>
                </thead>

                <tbody>

                  <?php  
                  

                  while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)){

                    ?>

                    <tr>

                      <td class="text-center"><?php echo $icerikcek['icerik_zaman']; ?></td>
                      <td><?php echo $icerikcek['icerik_ad']; ?></td>
                      <td class="text-center"><?php 

                      if ($icerikcek['icerik_durum']=="1") {

                        echo "Aktif";
                        
                      }
                      else {

                        echo "Pasif";
                      }

                      ?>
                    </td>

                    <td class=" "><a href="../option/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>"><button style="width: 90px;" class="btn btn-danger "><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</button></a></td>


                  </tr>

                  <?php } ?>

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>