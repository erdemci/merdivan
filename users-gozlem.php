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
						<a data-role="button" href="index.html" rel="external" data-ajax="enabled" data-icon="arrow-l" data-iconpos="left" class="ui-btn-left">Geri</a>
						<h1>Gönderdiğim Gözlemler </h1>
				</div>
				<div data role="content">
					<div class="ui-grid-b">
							<div class="ui-block-a">
								<h4>
									<?php echo $row['subject'].":<hr/>";?>
								</h4>
							</div>
							<div class="ui-block-b">
								<h5>
									<?php $lines= explode("\n", $row['idea']);
										foreach($lines as $line){ echo trim($line).': <hr /> ';}?>
								</h5>
							</div>
							 <div class="ui-block-c">
								<h5>
								<?php $lines= explode("\n    ", $row['durum']);
									foreach($lines as $line){ echo trim($line); }
									?>
								</h5>
							</div>
						</div>
				
				</div>
	
	</div>
	</body>
	</html>