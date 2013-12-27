<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Merdivan</title>
  <link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="jqm/jquery.mobile-1.3.2.min.js" type="text/javascript"></script>	
  <script type="text/javascript" src="js/update.js"></script>
</head>
    <body>
	 <div data-role="page" id="home" data-theme="b">  
				<div data-role="header" data-theme="c">
				<a data-role="button" href="home.php" rel="external" data-ajax="enabled" data-icon="arrow-l" data-iconpos="left" class="ui-btn-left">Geri</a>
        <h1>Kullanıcı Bilgilerim </h1>
       </div>
				<form action="" id="update">
			<div class="ui-grid-a">
				  	<div class="ui-block-a"><h4>Kullanıcı Adı: </h4></div>
				  	<div class="ui-block-b"><input type="text" name="username" value="<?php echo $_SESSION["username"];?>" pattern="[a-zA-Z0-9]{4,}" title="Kullanıcı Adınız En az Dört Karakter Olmalı"/></div>
                    
					<div class="ui-block-a"><h4>Adı:</h4></div>
					<div class="ui-block-b"><input type="text" name="isim" value="<?php echo $_SESSION["isim"];?> "/></div>
                  
					<div class="ui-block-a"><h4>Soyadı:</h4></div>
					<div class="ui-block-b"><input type="text" name="soyad" value="<?php echo $_SESSION["soyad"];?> "/></div>
                  
					<div class="ui-block-a"><h4>Mail Adresi:</h4></div>
					<div class="ui-block-b"><input type="text" name="mail" value="<?php echo $_SESSION["mail"];?> "/></div>
                 
			</div>
			<button id="bilgiupdate" data-theme="d">Kullanıcı Bilgilerimi Güncelle</button>
		</form>
			<!--	 <a data-role="button" href="gozlem.html" rel="external" data-ajax="false"   data-theme="d">Gönderdiğim Gözlemler</a> -->
                
                
    </div>
	</body>
	</html>