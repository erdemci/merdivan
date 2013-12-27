<!DOCTYPE html>
<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Merdivan</title>
  <link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
  <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="jqm/jquery.mobile-1.3.2.min.js" type="text/javascript"></script>	
  <script type="text/javascript" src="js/giris.js"></script>
</head>
 <body>
   <div data-role="page" id="index">
   <div data-role="header" data-theme="a"><h1>Giriş Yap</h1></div>
   <!--<div data-role="header" data-theme="a"><h1><span style="color:#9d04a3">G</span> <span style="color:#690887">i</span> <span style="color:#3649e4">r</span> <span style="color:#0cb969">i</span> <span style="color:#08b91c">ş</span><span> </span> <span style="color:#ebfc04">Y</span> <span style="color:#fa7f06">a</span> <span style="color:#ed0700">p</span> </h1></div> -->
      <div data-role="content">
		<form id="girisform" action="" method="post">
			<input type="text" id="username" name="username" placeholder="* Kullanıcı Adınız:" pattern="[a-zA-Z0-9]{4,}" title="Kullanıcı Adınız En az Dört Karakter Olmalı" required>
			<input type="password" id="sifre" name="sifre" placeholder="* Şifreniz:" pattern="[a-zA-Z0-9]{6,}" title="Şifreniz En az Altı Krakter Olmalı." required>
			<button id="giris">Giriş Yap</button>
		</form>
        <a data-role="button" href="uye-ol.php" rel="external">Üye Ol</a>
      </div>
	  <div data-role="footer" data-theme="c">
		<img src="img/inf.jpg" width="100%" height="auto" alt="" />
	</div> 
   </div>  
     
 </body>
</html>
