<?php
	require "baglanti.php";
	session_start();
	$uyead = $_POST['username']; 
	$sifre = $_POST['sifre'];
	$sql = "SELECT * FROM uyeler WHERE nick='$uyead' and sifre='$sifre'";
	$result = mysql_query($sql,$conn);
	
	$varmi=mysql_num_rows($result);

    while($row=mysql_fetch_array($result)){                                                                                                                                                                                                                                                                                                                                                                                                                                                         
	 if($varmi==1)
        {	
			echo "1";
			$_SESSION["username"]=$uyead;
			$_SESSION["userid"]=$row['id'];
			$_SESSION["mail"]=$row['mail'];
			$_SESSION["isim"]=$row['ad'];
			$_SESSION["soyad"]=$row['soyad'];
        }
		else{
		echo "0";
		}
	}
		mysql_close($conn);
		
?>