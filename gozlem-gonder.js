$(document).ready(function(){
	$("#gozlem").click(function(){
		if($("#konusec").val()=="" && $("#icerik").val()==""){
			alert("Formda Boş Alan Bırakmayınız.");
		}else{
				$.ajax({
					type:"POST",
					url:"gozlem-kaydet.php",
					data:$("#gozlemgonder").serialize(),
					success:function(msg){
						if(msg=="1"){
							alert("Gözleminiz İletildi");
							window.location="home.php";
						}
						else{
						alert("Hata Oluştu"+msg);
						window.location="gozlem-gonder.php";
						}
					}
				});
			}
		});
});
