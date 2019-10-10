<?php

include 'header.php'; 
include '../option/baglan.php'; 
$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Genel Ayarlar <small>
              <?php 
              if(@$_GET['durum']=='ok') {?>

              <b style="color: green;">Güncelleme başarılı.</b>

              <?php 
            }
            elseif(@$_GET['durum']=='no') { ?>

            <b style="color: red;">Güncelleme yapılamadı.</b>

            <?php }  ?>


          </small></h2>


          <ul class="nav navbar-right panel_toolbox">

          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">

          <form action="../option/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Adresi <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="ayar_siteurl" value="<?php echo $ayarcek['ayar_siteurl']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeler <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" name="genelayarkaydet" class="btn btn-primary">Güncelle</button>
            </div>

          </form>

        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>