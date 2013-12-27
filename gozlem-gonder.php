<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <title>Merdivan</title>
  <link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
  <script src="jqm/jquery.mobile-1.3.2.min.js" type="text/javascript"></script>	
   <script type="text/javascript" src="js/fotoyukle.js"></script>
 <script type="text/javascript" src="js/ajaxphoto.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
 <!-- <script type="text/javascript" src="gozlem-gonder.js"></script> -->
 
  
</head>
    <body>
		<div data-role="page" id="gozlemgondersayfa" data-theme="b">  
		<div data-role="header" data-theme="d">
			<a data-role="button" href="home.php" rel="external" data-ajax="enabled" data-icon="arrow-l" data-iconpos="left" class="ui-btn-left">Geri</a>
				<h1>Gözlemini Gönder</h1>
			</div>
		<div data-role="content">
			<form action="gozlem-kaydet.php" method="post" enctype="multipart/form-data" id="gozlemgonder" data-ajax="false" >
				<select id="konusec" name="subject" data-theme="d" required>
						<option id="option0" value="">Gözlem Konusunu Seçin</option>
						<option id="option11" value="Cukur/Yol Tehlikesi/Kaldirim">Cukur/Yol Tehlikesi/Kaldırım</option>
						<option id="option10" value="Sokak Hayvanı/Haşere">Sokak Hayvanı/Haşere</option>
						<option id="option9" value="İmar/Kaçak Yapı">İmar/Kaçak Yapı</option>
						<option id="option9" value="Restorasyon/Kentsel Dönüşüm<">Restorasyon/Kentsel Dönüşüm</option>
						<option id="option8" value="Trafik/Trafik Işığı">Trafik/Trafik Işığı</option>
						<option id="option7" value="Metro/Vapur/Tramvay/Ulaşım sorunu">Metro/Vapur/Tramvay/Ulaşım sorunu</option>
                        <option id="option1" value="Elektrik Kaçağı/Kesintisi">Elektrik Kaçağı/Kesintisi</option>
						<option id="option2" value="Şehir Estetiği/Graffiti">Şehir Estetiği/Graffiti</option>
						<option id="option3" value="Çöp/Sağlık/Çevre">Çöp/Sağlık/Çevre</option>
						<option id="option4" value="Su Baskını/Kesintisi">Su Baskını/Kesintisi </option>
                        <option id="option5" value="Çevre/Peyzaj /Ağaç">Peyzaj /Ağaç</option>
                        <option id="option6" value="Diğer istek/Şikayetler">Diğer istek/Şikayetler</option>
                </select>
			    <select id="lokasyon" name="lokasyon" data-theme="d">
                    <option id="loksec" value="" >Lokasyonumu Offline Seç</option>
                    <option id="istbak" value="İstanbul-Bakırköy"> İstanbul-Bakırköy</option>
                    <option id="istsar" value="İstanbul-Sarıyer"> İstanbul-Sarıyer</option>
                    <option id="istkad" value="İstanbul-Kadıköy"> İstanbul-Kadıköy</option>
                    <option id="istbes" value="İstanbul-Beşiktaş"> İstanbul-Beşiktaş</option>
                    <option id="istüsk" value="İstanbul-Üsküdar"> İstanbul-Üsküdar</option>
                    <option id="istsis" value="İstanbul-Şişli"> İstanbul-Şişli</option>
                    <option id="burnil" value="Bursa-Nilüfer"> Bursa-Nilüfer</option>
                    <option id="ankcan" value="Ankara-Çankaya"> Ankara-Çankaya</option>
                    <option id="izmkon" value="İzmir-Konak">İzmir-Konak</option>
                    <option id="izmkar" value="İzmir-Karşıyaka">İzmir-Karşıyaka</option>
                    <option id="izmgüz" value="İzmir-Güzelbahçe">İzmir-Güzelbahçe</option>
                    <option id="izmbuc" value="İzmir-Buca">İzmir-Buca</option>
                    <option id="izmsef" value="İzmir-Seferihisar">İzmir-Seferihisar</option>
                    <option id="izmbor" value="İzmir-Bornova">İzmir-Bornova</option>
                    <option id="esk" value="Eskişehir">Eskişehir</option>
                    <option id="tra" value="Trabzon">Trabzon</option>
                </select>    
				<script type="text/javascript">
        $(document).ready(function() {
			$("#map").hide();
			$("#koordinat").hide();
            $('#findme').click(function() {
			$("#map").show();
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(success, error);
                } else {
                    error('Konum Belirleme Desteklenmiyor');
                }
        function success(position) {
		
          var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		  console.log(latlng);
		  var lat = latlng.nb;
		  var lng = latlng.ob;

			var geocoder=null;
			geocoder = new google.maps.Geocoder();
			
			var koord = new google.maps.LatLng(lat, lng);
			geocoder.geocode({'latLng': koord}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
				$("#koordinat").val(results[0].formatted_address);
				alert("Konumunuz:"+results[0].formatted_address);
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  });
				
          var myOptions = {
				zoom: 15,
				center: latlng,
				mapTypeControl: false,
				navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
				mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var mapcanvas = $('#mapcanvas');
          var map = new google.maps.Map(mapcanvas[0], myOptions);
          var marker = new google.maps.Marker({
              position: latlng, 
              map: map, 
              title:"Burdasınız"
          });
        }
        function error(msg) {
          var errMsg = typeof msg == 'string' ? msg : "Konum Belirleme Başarısız";
          $('#msg').html(errMsg);
        }
	   });
   });  				
    </script>
		
		<input type="button" id="findme" value="Konumumu Haritadan Belirle"/>
		<input type="text" id="koordinat" name="koordinat" value="" />
		<div id="map">
				<div id="msg"></div>
				<div id="mapcanvas" style="height:200px; width:%100;"></div>
		</div>
				<div class="ui-grid-a">
							<div class="ui-block-a">
							<h3>Fotoğraf Gönder</h3>
							<input id="uploadImage" type="file" accept="image/*" name="image" onchange='Test.UpdatePreview(this)' />
							</div>
					<div class="ui-block-b">
					<img src="#" id="preview" width="128" height="i28"/>
					</div>
		</div>
				<textarea name="idea" id="icerik" placeholder="Özet İçeriğiniz maksimum 300 karakter" maxlength="300"></textarea>
				<button id="gozlem">Gözlemini Gönder</button>
			</form>
       </div>	
			 <!-- php Kodları -->
	</div>
	</body>
	</html>