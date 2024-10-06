<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

	#Varsayılan kullanıcı adı ve şifresi
	$kadi="muhsindolu";
	$pass="7171";
    
	# Post method ile gönderilen verilerin alınması
	$giris_sifresi=$_POST["kullanici_password"];
	$giris_adi=$_POST["kullanici_ad"];
    # if bloğu ile kullanıcı bilgi kontrolünün yapılması ve ekrrana başarılı veya başarısız giriş denemesinin yansıtılması
	if ($giris_adi===$kadi & $giris_sifresi==$pass){
		echo "Giriş Başarılı";
	}else{
		echo "Giriş Başarısız!!!";
	}
	?>
	<br>
	<hr>
<!-- Kullanıcı giriş formu -->
	<h3>Kullanıcı Girişi</h3>
	<form action="" method="POST">
		Kullanıcı Adı: <input type="text" name="kullanici_ad" placeholder="Kullanıcı adı giriniz...">
		Şifre: <input type="password" name="kullanici_password" placeholder="Kullanıcı şifresi giriniz...">
		<button type="submit">Giriş yap</button>
	</form>

</body>
</html>