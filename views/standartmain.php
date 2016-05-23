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

<div class="col-md-12" style="width:80%;margin-left:30%">
	<div>
		<h1 style="font-size:250%;"><i>Kullanıcı sayfasına Hoş Geldiniz</h1> </br>
	</div>
</div>

</body>
</html>
