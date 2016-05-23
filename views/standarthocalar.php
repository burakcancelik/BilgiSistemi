<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

?>
<!DOCTYPE html>
<html lang="<?php= Yii::$app->language ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js "></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/start/jquery-ui.css" rel="stylesheet" type="text/css" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body style="background-color:rgb(185, 76, 225)">
<nav class="navbar navbar-default">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="/advanced/frontend/modules/BilgiSistemi/views/standartmain.php">Ana Sayfa</a></li>
  <li role="presentation"><a href="/advanced/frontend/modules/BilgiSistemi/views/standartdersler.php">Derslerim</a></li>
  <li role="presentation"><a href="/advanced/frontend/modules/BilgiSistemi/views/standarthocalar.php">Hocalar</a></li>
  <li role="presentation"><a href="http://localhost/advanced/frontend/web/index.php?r=BilgiSistemi/request">İstek Gönder</a></li>
</ul>
</nav>
<input id="Arama" type="text" class="form-control" style="width:80%;margin:auto" placeholder="Arama Kutucuğu..." /> </br>
 <table class="table table-bordered"style="width:80%;margin:auto">
				<tr>
					<th>Hoca Adı</th>
					<th>Verdiği Ders</th>
					
				</tr>

<?php
$db = new PDO("mysql:host=localhost;dbname=advanced;charset=utf8", "root", "");		
		 foreach($db->query("SELECT * FROM hocalar") as $hocalar)
		 {
			echo '<tr><td>'.$hocalar['hocaadi'].'</td>';
			echo '<td>'.$hocalar['dersi'].'</td></tr>'; 
		 }
		
	
?>
</table>


</body>
</html>
<script>

	$("#Arama").keyup(function(){
		var terim = $(this).val();
		$("#calisan").show();
		$("tr").show();
		if(terim != "")
		{
			$("tr").hide();
			$("#ilksutun").show();
			$("tr:contains('"+terim+"')").show();
		}
		if(terim == "")
		{	
			$("tr").show();
		}
	});


</script>

