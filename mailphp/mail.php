<?
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
  
include '/home/omerfar9/public_html/admin/option/baglan.php';
require("class.phpmailer.php");

if ($_POST['toplam']!=$_POST['islem']) {
	
	echo "bot kontrolü";
	exit;
} 





	//Mysql den mail bilgilerimizi çekiyoruz.
	$ayarsor=$db->prepare("select * from ayar where ayar_id=?");
	$ayarsor->execute(array(0));
	$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);


	$mail = new PHPMailer();
	$mail->IsSMTP();  
	$mail->CharSet="SET NAMES UTF8";                               // send via SMTP
	$mail->Host     = $ayarcek['ayar_smtphost']; // SMTP servers
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = $ayarcek['ayar_smtpuser'];  // SMTP username
	$mail->Password = $ayarcek['ayar_smtppassword'];// SMTP password
	$mail->Port     = $ayarcek['ayar_smtpport'];
	$mail->From     = $ayarcek['ayar_smtpuser']; // smtp kullanýcý adýnýz ile ayný olmalý
	$mail->Fromname = "ÖmerFarukDilek Test Mail";
	//Çoklu mail için bu satırı çoğal
	$mail->AddAddress("info@omerfarukdilek.com","Form Mail");
	

	$mail->Subject  =  $_POST['adsoyad'];
	$mail->Body     =  implode("    ",$_POST);

if(!$mail->Send())
{
	echo "Mesaj Gönderilemedi <p>";
	echo "Mailer Error: " . $mail->ErrorInfo;
	exit;
}

echo "Mesaj Gönderildi";
exit;


?>
<!--<meta http-equiv="refresh" content="0;URL=../iletisim.php?durum=ok">-->