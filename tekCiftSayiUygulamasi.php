<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
    #Gönderilen formun alınması 
	if(isset($_POST["sorgula"])){
		$sayi=$_POST["num"]; #Post metodu ile gönderildiği için sayının $_POST fonksiyonu ile alınması
        #Sayının tek mi çift mi olduğunun tespit edilip ekrana yazdırılması
		if($sayi%2==0){
			echo "<h3>Sayı çifttir</h3>";
		}else{
			echo "<h3>Sayı tektir</h3>";
		}
	}
	?>
    <!--Form oluşturulması-->
	<form action="" method="post">
		Sayı giriniz: <input type="number" name="num">
		<input type="submit" name="sorgula" value="Gönder">
	</form>
</body>
</html>