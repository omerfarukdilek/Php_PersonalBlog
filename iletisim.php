<?php include 'header-iletisim.php'; ?>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Benimle iletişime geçmek için aşağıdaki formu doldurmanız yeterli.</p>
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
	<form action="https://www.omerfarukdilek.com/mailphp/mail.php" method="POST" role="form">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>İsim: </label>
            <input type="text" name="adsoyad" class="form-control" placeholder="İsim:" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>E-posta: </label>
            <input type="email" name="email" class="form-control" placeholder="E-posta:" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Mesaj: </label>
            <textarea name="mesaj" rows="5" class="form-control" placeholder="Mesaj:" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
        </div>
      </form>
    </div>
  </div>
</div>
<hr>
<?php include 'footer.php'; ?>