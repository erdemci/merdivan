<?php
session_start();
	 require "baglanti.php";
	 $id=uniqid();
	 $kadi=$_POST['userId'];
	 $sifre=$_POST['sifre1'];
	 $mail=$_POST['mail'];
	 $isim=$_POST['isim'];
	 $soyad=$_POST['soyad'];
		
	$sql = "SELECT nick FROM uyeler WHERE nick=' $kadi '";
	$result = mysql_query($sql,$conn);
	$varmi=mysql_num_rows($result);
	if($varmi==0){
	 $sorgu="insert into uyeler(id,nick,sifre,mail,ad,soyad) values('".$id."','".$kadi."','".$sifre."','".$mail."' ,'".$isim."','".$soyad." ') "; 
	 	if(mysql_query($sorgu,$conn)){
	echo "1";
			$_SESSION["userid"]=$id;
			$_SESSION["username"]=$kadi;
			$_SESSION["mail"]=$mail;
			$_SESSION["isim"]=$isim;
			$_SESSION["soyad"]=$soyad;
	}else{
	echo mysql_error();	}
	
	}else{echo "Kullanıcı Adı Kullanılmaktadır.";
	}
	
	 mysql_close();
?>