<?php 

ob_start();
session_start();
include 'baglan.php';




if(isset($_POST['genelayarkaydet'])){

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_siteurl=:siteurl,
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_author=:author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'siteurl'=>$_POST['ayar_siteurl'],
		'title'=>$_POST['ayar_title'],
		'description'=>$_POST['ayar_description'],
		'keywords'=>$_POST['ayar_keywords'],
		'author'=>$_POST['ayar_author']));

	if($update)
	{
		Header("Location:../production/genel-ayar.php?durum=ok");
	}

	else
	{
		Header("Location:../production/genel-ayar.php?durum=no");
	}
}




if(isset($_POST['apiayarkaydet'])){

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_googlemap=:googlemap,
		ayar_analystic=:analystic

		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'recapctha'=>$_POST['ayar_recapctha'],
		'googlemap'=>$_POST['ayar_googlemap'],
		'analystic'=>$_POST['ayar_analystic']));


	if($update)
	{
		Header("Location:../production/api-ayar.php?durum=ok");
	}

	else
	{
		Header("Location:../production/api-ayar.php?durum=no");
	}
}





if(isset($_POST['sosyalayarkaydet'])){

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:facebook,
		ayar_twitter=:twitter,
		ayar_instagram=:instagram

		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'facebook'=>$_POST['ayar_facebook'],
		'twitter'=>$_POST['ayar_twitter'],
		'instagram'=>$_POST['ayar_instagram']));


	if($update)
	{
		Header("Location:../production/sosyal-ayar.php?durum=ok");
	}

	else
	{
		Header("Location:../production/sosyal-ayar.php?durum=no");
	}
}





if(isset($_POST['mailayarkaydet'])){

	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport

		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'smtphost'=>$_POST['ayar_smtphost'],
		'smtpuser'=>$_POST['ayar_smtpuser'],
		'smtppassword'=>$_POST['ayar_smtppassword'],
		'smtpport'=>$_POST['ayar_smtpport']));


	if($update)
	{
		Header("Location:../production/mail-ayar.php?durum=ok");
	}

	else
	{
		Header("Location:../production/mail-ayar.php?durum=no");
	}
}




if(isset($_POST['hakkimdakaydet'])){

	$ayarkaydet=$db->prepare("UPDATE hakkimda SET
		hakkimda_baslik=:baslik,
		hakkimda_icerik=:icerik
		WHERE hakkimda_id=0");

	$update=$ayarkaydet->execute(array(
		'baslik'=>$_POST['hakkimda_baslik'],
		'icerik'=>$_POST['hakkimda_icerik']));


	if($update)
	{
		Header("Location:../production/hakkimda.php?durum=ok");
	}

	else
	{
		Header("Location:../production/hakkimda.php?durum=no");
	}
}




if(isset($_POST['sliderkaydet'])){

	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:ad,
		slider_resimyol=:resimyol,
		slider_link=:link,
		slider_sira=:sira,
		slider_durum=:durum");

	$insert=$kaydet->execute(array(
		'ad'=>$_POST['slider_ad'],
		'resimyol'=>$refimgyol,
		'link'=>$_POST['slider_link'],
		'sira'=>$_POST['slider_sira'],
		'durum'=>$_POST['slider_durum']));


	if($insert)
	{
		Header("Location:../production/slider.php?durum=ok");
	}

	else
	{
		Header("Location:../production/slider.php?durum=no");
	}
}





if(@$_GET['slidersil']=="ok")
{
	$sil=$db->prepare("DELETE FROM slider WHERE slider_id=:slider_id");
	$kontrol=$sil->execute(array(
		'slider_id'=>$_GET['slider_id']));

	if($kontrol)
	{
		Header("Location:../production/slider.php?durum=ok");
	}

	else
	{
		Header("Location:../production/slider.php?durum=no");
	}
}




if(isset($_POST['sliderduzenle'])){

	
	if($_FILES['slider_resimyol']["size"] > 0){


		$uploads_dir = '../../img/slider';
		@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
		@$name = $_FILES['slider_resimyol']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum
			slider_resimyol=:resimyol
			WHERE slider_id={$_POST['slider_id']}");

		$update=$duzenle->execute(array(
			'ad'=>$_POST['slider_ad'],
			'link'=>$_POST['slider_link'],
			'sira'=>$_POST['slider_sira'],
			'durum'=>$_POST['slider_durum'],
			'resimyol'=>$refimgyol));

		$slider_id=$_POST['slider_id'];

		if($update)
		{
			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
		}

		else
		{
			Header("Location:../production/slider-duzenle.php?durum=no");
		}

	}
	else
	{
		$duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_durum=:durum
			WHERE slider_id={$_POST['slider_id']}");

		$update=$duzenle->execute(array(
			'ad'=>$_POST['slider_ad'],
			'link'=>$_POST['slider_link'],
			'sira'=>$_POST['slider_sira'],
			'durum'=>$_POST['slider_durum']));

		$slider_id=$_POST['slider_id'];

		if($update)
		{
			Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
		}

		else
		{
			Header("Location:../production/slider-duzenle.php?durum=no");
		}
	}
}




if(isset($_POST['icerikkaydet'])){

	


	$uploads_dir = '../../img/icerik';
	@$tmp_name = $_FILES['icerik_resimyol']["tmp_name"];
	@$name = $_FILES['icerik_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	$tarih=$_POST['icerik_tarih'];
	$saat=$_POST['icerik_saat'];
	$zaman=$tarih." ".$saat;

	//$icerik_seourl=seo($_POST['icerik_ad']);

	$kaydet=$db->prepare("INSERT INTO icerik SET
		kategori_id=:kategori_id,
		icerik_ad=:ad,
		icerik_resimyol=:resimyol,
		icerik_detay=:detay,
		/*icerik_seourl=:seourl,*/		
		icerik_keyword=:keyword,
		icerik_durum=:durum,
		icerik_zaman=:icerik_zaman");

	$insert=$kaydet->execute(array(
		'kategori_id'=>$_POST['kategori_id'],
		'ad'=>$_POST['icerik_ad'],
		'resimyol'=>$refimgyol,
		'detay'=>$_POST['icerik_detay'],
		
		'keyword'=>$_POST['icerik_keyword'],
		'durum'=>$_POST['icerik_durum'],
		'icerik_zaman'=>$zaman));


	if($insert)
	{

		Header("Location:../production/icerik.php?durum=ok");
	}

	else
	{
		Header("Location:../production/icerik.php?durum=no");

	}
}




if(@$_GET['iceriksil']=="ok")
{
	$sil=$db->prepare("DELETE FROM icerik WHERE icerik_id=:icerik_id");
	$kontrol=$sil->execute(array(
		'icerik_id'=>$_GET['icerik_id']));

	if($kontrol)
	{

		Header("Location:../production/icerik.php?durum=ok");
	}

	else
	{
		Header("Location:../production/icerik.php?durum=no");

	}
}





if(isset($_POST['loggin'])) {

	$user = $_POST['admin_kadi'];
	$pass = md5($_POST['admin_sifre']);

	if(empty($user) || empty($pass)) {
		$message = 'All field are required';
	} else {
		$query = $db->prepare("SELECT admin_kadi, admin_sifre FROM admin WHERE 
			admin_kadi=? AND admin_sifre=? ");
		$query->execute(array($user,$pass));
		$row = $query->fetch(PDO::FETCH_BOTH);

		if($query->rowCount() > 0) {
			$_SESSION['admin_kadi'] = $user;
			header('Location:../production/index.php');
		} else {
			header('Location:../production/login.php?login=no');

		}
	}
}






if (isset($_POST['kategoriduzenle'])) {

	$kategori_id=$_POST['kategori_id'];
	$kategori_seourl=seo($_POST['kategori_ad']);

	
	$kaydet=$db->prepare("UPDATE kategori SET
		kategori_ad=:ad,
		kategori_durum=:kategori_durum,	
		kategori_seourl=:seourl,
		kategori_sira=:sira,
		kategori_icon=:icon

		WHERE kategori_id={$_POST['kategori_id']}");
	$update=$kaydet->execute(array(
		'ad' => $_POST['kategori_ad'],
		'kategori_durum' => $_POST['kategori_durum'],
		'seourl' => $kategori_seourl,
		'sira' => $_POST['kategori_sira'],
		'icon' => $_POST['kategori_icon']		


	));

	if ($update) {

		Header("Location:../production/kategori-duzenle.php?durum=ok&kategori_id=$kategori_id");

	} else {

		Header("Location:../production/kategori-duzenle.php?durum=no&kategori_id=$kategori_id");
	}

}






if (isset($_POST['kategoriekle'])) {

/*	$kategori_seourl=seo($_POST['kategori_ad']);*/

	$kaydet=$db->prepare("INSERT INTO kategori SET
		kategori_ad=:ad,
		kategori_durum=:kategori_durum,	
		/*kategori_seourl=:seourl,*/
		kategori_sira=:sira,
		kategori_icon=:icon
		");
	$insert=$kaydet->execute(array(
		'ad' => $_POST['kategori_ad'],
		'kategori_durum' => $_POST['kategori_durum'],
		/*'seourl' => $kategori_seourl,*/
		'sira' => $_POST['kategori_sira'],
		'icon' => $_POST['kategori_icon']		
	));

	if ($insert) {

		Header("Location:../production/kategori.php?durum=ok");

	} else {

		Header("Location:../production/kategori.php?durum=no");
	}

}








if ($_GET['kategorisil']=="ok") {
	
	$sil=$db->prepare("DELETE from kategori where kategori_id=:kategori_id");
	$kontrol=$sil->execute(array(
		'kategori_id' => $_GET['kategori_id']
	));

	if ($kontrol) {

		Header("Location:../production/kategori.php?durum=ok");

	} else {

		Header("Location:../production/kategori.php?durum=no");
	}

}

?>