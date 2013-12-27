<?php
session_start();
	 require "baglanti.php";
	 $userid=$_SESSION["userid"];
	 $kadi=$_POST['username'];
	 $mail=$_POST['mail'];
	 $isim=$_POST['isim'];
	 $soyad=$_POST['soyad'];
	 
	
	$sql = "SELECT nick FROM uyeler WHERE nick=' $kadi '";
	$result = mysql_query($sql,$conn);
	
	$varmi=mysql_num_rows($result);
	
	 if($varmi==0){
	 $sorgu="UPDATE uyeler SET nick=' $kadi ',mail='$mail',ad='$isim',soyad='$soyad' where id='$userid' ";
	 if(mysql_query($sorgu,$conn)){
	echo "1";
			$_SESSION["username"]=$kadi;
			$_SESSION["mail"]=$mail;
			$_SESSION["isim"]=$isim;
			$_SESSION["soyad"]=$soyad;
	}else
	echo mysql_error();	
	}else{echo "Kullanici ismi zaten kullanılmaktadir";}
	 
	 mysql_close();
?>