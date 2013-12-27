<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>Merdivan</title>
  <link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="jqm/jquery.mobile-1.3.2.min.js" type="text/javascript"></script>	
</head>
    <body>
		 <div data-role="page" id="home" data-theme="b">  
		    <div data-role="header" data-theme="c">
			    <a data-role="button" href="home.php" rel="external" data-ajax="enabled" data-icon="arrow-l" data-iconpos="left" class="ui-btn-left">Geri</a>
             <h1>Olan-Biten </h1>
			</div>
			<div data role="content">
				<div data-role="content">
                <?php
				include "baglanti.php";
				try{
					$sql="SELECT * FROM gozlem ORDER BY id DESC";
					$result = mysql_query($sql,$conn);
					while($row = mysql_fetch_array($result)){						
														?>
					<div data-role="content" style="margin:0px;padding:0px">
						<div class="ui-grid-b">
							<div class="ui-block-a">
								<h4>
									<?php echo $row['title']."<hr/>";?>
								</h4>
							</div>
							<div class="ui-block-b">
								<h5>
									<?php $lines= explode("\n", $row['icerik']);
										foreach($lines as $line){ echo trim($line).'<hr /> ';}?>
								</h5>
							</div>
							 <div class="ui-block-c">
								<h5>
								<?php if($row['konum']==""){$lines= explode("\n ", $row['lokasyon']);
									foreach($lines as $line){ echo trim($line);}
									}else{$lines= explode("\n    ", $row['konum']);
									foreach($lines as $line){ echo trim($line);}
									} 
									?>
								</h5>
							</div>
								<div class="ui-block-d">
								<h5>
								<?php $lines= explode("\n    ", $row['tarih']);
									foreach($lines as $line){ echo trim($line); }
									?>
								</h5>
								<h5>
									<?php echo $row['kim']."<hr/>";?>
								</h5>
							</div>
						</div>
					</div>
					<br />
			<?php
					}
				}catch (PDOException $e){
					echo "Bağlantı Hatası: " .$e->getMessage();
				}	
			$dbh=null;	
			?>
				
            </div>	
				
			</div>
		</div>
	</body>
	</html>