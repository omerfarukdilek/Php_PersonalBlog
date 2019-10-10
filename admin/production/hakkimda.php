<?php

include 'header.php'; 
include '../option/baglan.php'; 
$hakkimdasor=$db->prepare("select * from hakkimda where hakkimda_id=?");
$hakkimdasor->execute(array(0));
$hakkimdacek=$hakkimdasor->fetch(PDO::FETCH_ASSOC);

?>
<head> <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> </head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Hakkımda</h3>
      </div>

      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Hakkımda Sayfası Düzenleme <small>
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
              <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">Başlık <span class="required">*</span>
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input type="text" id="first-name" required="required" name="hakkimda_baslik" value="<?php echo $hakkimdacek['hakkimda_baslik']; ?>" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">İçerik <span class="required">*</span>
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <textarea class="ckeditor" id="editor1" name="hakkimda_icerik"><?php echo $hakkimdacek['hakkimda_icerik']; ?></textarea>
              </div>
            </div>

            <script type="text/javascript">

              CKEDITOR.replace('editor1',
              {
                filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
                filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
                filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                forcePasteAsPlainText: true

              }
              );
              

            </script>

            <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-1">
              <button type="submit" name="hakkimdakaydet" class="btn btn-primary">Güncelle</button>
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