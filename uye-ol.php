<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Merdivan</title>
	<link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
	<script src="jqm/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="jqm/jquery.mobile-1.3.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/kayit.js"></script>	
</head>
<body>

<div data-role="page" id="uye-ol">
    <div data-role="header">
		<h1>Üye Ol</h1>
    </div>
   <div data-role="content">
	<form action="" id="form1" method="post">
		<input type="text" id="userId" name="userId" placeholder="* Kullanıcı Adınızı Giriniz:" pattern="[a-zA-Z0-9]{4,}" title="Kullanıcı Adınız En az Dört Karakter Olmalı" value="" required>
		<input type="password" id="sifre1" name="sifre1" placeholder="* Şifrenizi Giriniz:" pattern="[a-zA-Z0-9]{6,}" title="Şifreniz En az Altı Krakter Olmalı." value="" required>
		<input type="password" id="sifre2" name="sifre" placeholder="* Şifrenizi Doğrulayınız:" pattern="[a-zA-Z0-9]{6,}" title="Şifreniz En az Altı Krakter Olmalı." value="" required>
		<input type="email" id="mail" name="mail" value="" placeholder="Mail Adresinizi Giriniz:">
		<input type="text" id="isim" name="isim" placeholder="Adınızı Giriniz:">
		<input type="text" id="soyad" name="soyad" placeholder="Soyadınızı Giriniz:">
		<button id="buton">Giriş Yap</button>
	<label for="form1">(*) işaretli Zorunlu Alan.</label>
    </form>
   
   </div>
    
  </div>
		
</body>
</html>