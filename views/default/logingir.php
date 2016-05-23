
<?php
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$type = $_POST["type"];
	
	
	if($type=="Admin")
	{
	
	$db = new PDO("mysql:host=localhost;dbname=advanced;charset=utf8", "root", "");		
		 $result = $db->prepare("SELECT * FROM kullanicilar WHERE username = ".$user." AND password = ".$pass.""); 
		 $sql="SELECT count(*) FROM kullanicilar WHERE username = '$user' AND password = '$pass'";
		 $result = $db->query($sql);
		 $row = $result->fetch(PDO::FETCH_NUM);
		 if( $row[0] == '0' ){
			echo "<script> window.location = 'www.google.com'; </script>";
		 }else{
			
			echo "<script> window.location = '/advanced/frontend/modules/BilgiSistemi/views/adminmain.php'; </script>";
		}
	}
	
	if($type=="Standart")
	{
	
	$db = new PDO("mysql:host=localhost;dbname=advanced;charset=utf8", "root", "");		
		 $result = $db->prepare("SELECT * FROM kullanicilar WHERE username = ".$user." AND password = ".$pass.""); 
		 $sql="SELECT count(*) FROM kullanicilar WHERE username = '$user' AND password = '$pass'";
		 $result = $db->query($sql);
		 $row = $result->fetch(PDO::FETCH_NUM);
		 if( $row[0] == '0' ){
			echo "<script> window.location = 'www.google.com'; </script>";
		 }else{
			
			echo "<script> window.location = '/advanced/frontend/modules/BilgiSistemi/views/standartmain.php'; </script>";
		}
	}
?>