<?php 

try{


	$db=new PDO("mysql:host=localhost;dbname=omerfar9_myblog",'omerfar9','w46W7Y1mub');
//	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'"); //Türkçe karakter için.
$db->exec("set names utf8");

	//echo "Veritabanı bağlantısı başarılı";
}

catch(PDOException $e){

	echo $e->getMessage();
}




?>