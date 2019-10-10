<?php
session_start();
ob_start();
include 'header.php'; 


if(!isset($_SESSION['admin_kadi'])){

 
      Header("Location:login.php");

}


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yönetim Paneli</h2>
            
            <div class="clearfix"></div>
          </div>

          <div class="x_content">


            <p>Sitenizi sol taraftaki menülerden düzenleyebilirsiniz.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>