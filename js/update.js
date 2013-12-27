$(document).ready(function(){
	$("#bilgiupdate").click(function(){
				$.ajax({
					type:"POST",
					url:"./update.php",
					data:$("#update").serialize(),
					success:function(msg){
						if(msg=="1"){
							alert("Güncelleme Başarılı");
							window.location="info.php";
						}
						else{
						alert("Güncelleme Başarısız "+msg);
						window.location="info.php";
						}
					}
				});
		});
});
