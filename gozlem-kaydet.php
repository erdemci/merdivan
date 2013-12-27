<?php
require "baglanti.php";
session_start();
$valid_exts = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
$max_size = 4096* 4096; // max file size
$konu=$_POST['subject'];       
//$path = 'Fotoğraf Yüklenmedi.'; // upload directory
		 if ( isset( $_FILES["image"] ) && !empty( $_FILES["image"]["name"] )){
		// get uploaded file extension
			$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		// looking for format and size validity
			if (in_array($ext, $valid_exts)) {
			$path = 'uploads/' . uniqid(). '.' .$ext;
			// move uploaded file from temp to uploads directory
			move_uploaded_file($_FILES['image']['tmp_name'], $path) ;
			} else {
				echo "<script>alert('Gecersiz Dosya Formati');</script>";
			}
		}else {
			switch ($konu){
				case 'Cukur/Yol Tehlikesi/Kaldirim' :
					$path='icons/cukur.JPG';
				break;
				case 'Sokak Hayvanı/Haşere' :
					$path='icons/hasere.png';
				break;
				case 'İmar/Kaçak Yapı' :
					$path='icons/bina.png';
				break;
				case 'Restorasyon/Kentsel Dönüşüm' :
					$path='icons/rest.png';
				break;
				case 'Elektrik Kaçağı/Kesintisi' :
					$path='icons/elektrik.png';
				break;
				case 'Trafik/Trafik Işığı' : //Metro/Vapur/Tramvay/Ulaşım sorunu
					$path='icons/trafik.png';
				break;
				case 'Şehir Estetiği/Graffiti' :
					$path='icons/graf.png';
				break;
				case 'Çöp/Sağlık/Çevre' :
					$path='icons/cop.png';
				break;
				case 'Su Baskını/Kesintisi' :
					$path='icons/su.png';
				break;
				case 'Çevre/Peyzaj /Ağaç' :
					$path='icons/peyzaj.png';
				break;
				case 'Metro/Vapur/Tramvay/Ulaşım sorunu' :
					$path='icons/metro.png';
				break;
			}//switch case
			
		}
		                        
		$lokasyon=$_POST['lokasyon'];
		$icerik=$_POST['idea'];
		$konum=$_POST['koordinat'];
		$kim=$_SESSION['username'];
		$sorgu="insert into gozlem (title,lokasyon,foto,icerik,konum,kim,tarih) VALUES ('$konu', '$lokasyon','$path','$icerik','$konum','$kim',now())";	
		if(mysql_query($sorgu,$conn)){
				echo "<script>alert('Gozleminiz  iletildi');window.location='home.php';</script>";
			}
			else{
			echo "<script>alert('Hata Oluştu '+".mysql_error()."); window.location='gozlem-gonder.php'; </script>";
			//echo "<script>alert('Hata Olustu');window.location='gozlem-gonder.php';</script>";
		}
	 mysql_close();
			
?>