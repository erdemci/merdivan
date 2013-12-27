$(document).ready(function(){
$("#buton").click(function(){	
		var isim=$("#userId").val();
		var sifre1=$("#sifre1").val();
		var sifre2=$("#sifre2").val();
		if((isim!="" && sifre1!="") && (sifre1==sifre2)){
				$.ajax({
					type:"POST",
					url:"./kayit.php",
					data:$("#form1").serialize(),
					success:function(msg){
						if(msg=="1"){
							alert("Kayıt Başarılı");
							window.location="home.php";
						}
						else{
						alert("Kayıt Başarısız "+msg);
						window.location="uye-ol.php";
						}
					}
				});
				}else if(sifre1!=sifre2){alert("Şifreniz Uyuşmuyor");}
				else{alert("Kullanıcı Adı ve Şifre Alanları Boş Olmamalı.");}
		
		});
		
});