<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jqm/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="jqm/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="jqm/jqm-demos.css" />
	<link rel="stylesheet" href="jqm/external.css" />
	<title>Olan-biten</title>
</head>
<body>
	<div data-role="page">
	<div data-role="header" data-theme="e"><h1>Olan-Biten</h1>
	<a data-role="button" href="home.php" rel="external" data-ajax="enabled" data-icon="arrow-l" data-iconpos="left" class="ui-btn-left">Geri</a></div>
	<div data-role="content">
	<table data-role="table" id="movie-table-custom" data-mode="reflow" class="movie-list table-stroke">	
  <thead>
    <tr>
      <th data-priority="1">ID</th>
      <th style="width:40%">Gözlem Başlığı</th>
      <th data-priority="2"></th>    
      <th data-priority="2">Tarih</th>
      <th data-priority="3">Konum</th>
      <th data-priority="4">Kim Tarafından</th>
      <th data-priority="4">İçerik</th>
    </tr>
  </thead>
  <tbody>
  <?php  
  require "baglanti.php";
  $sql="SELECT * FROM gozlem ORDER BY id DESC";
					$result = mysql_query($sql,$conn);
					while($row = mysql_fetch_array($result)){
					if($row['lokasyon']=="" && $row['konum']!="")
		echo "
        <tr>
            <th>".$row['id']."</th>
            <td class='title'>".$row['title']."</td>
            <td><img src=' ".$row['foto']." ' width='100%' height='200px' /></td>
            <td>".$row['tarih']."</td>
            <td>".$row['konum']."</td>
            <td>".$row['kim']."</td>
            <td>".$row['icerik']."</td>
        </tr> ";
		else
		echo "
        <tr>
        <th>".$row['id']."</th>
        <td class='title'>".$row['title']."</td>
        <td><img src=' ".$row['foto']." ' width='100%' height='200px' /></td>
        <td>".$row['tarih']."</td>
        <td>".$row['lokasyon']."</td>
        <td>".$row['kim']."</td>
        <td>".$row['icerik']."</td>
        </tr>";
} 		
 ?>   
  </tbody>
</table>
	</div>
	</div>	
</body>
</html>