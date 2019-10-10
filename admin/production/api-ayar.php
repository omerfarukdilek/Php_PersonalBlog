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
            <h2>Api Ayarları<small>
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Recapctha Api <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" placeholder="Google Recapctha apisini giriniz.."  name="ayar_recapctha" value="<?php echo $ayarcek['ayar_recapctha']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Map Api <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" placeholder="Google Map apisini giriniz.." name="ayar_googlemap" value="<?php echo $ayarcek['ayar_googlemap']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Analystic <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" placeholder="Google Analystic apisini giriniz.." name="ayar_analystic" value="<?php echo $ayarcek['ayar_analystic']; ?>" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

           

              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="apiayarkaydet" class="btn btn-primary">Güncelle</button>
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