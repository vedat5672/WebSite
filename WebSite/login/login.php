<?php

session_start();
ob_start();


if(($_POST["email"]=="g201210046@sakarya.edu.tr") && ($_POST["password"]=="1111"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "g201210046@sakarya.edu.tr";
$_SESSION["pass"] = "1111";

echo "Hosgeldiniz g201210046. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";


}
elseif(($_POST["email"]==null) && ($_POST["password"]==null))
{
echo "Kullanici adi veya sifre bos birakilamaz. ";
header("Refresh: 2; url=giris.html");
}
else
{
echo "Kullanici adi veya sifre yanlis. Lütfen kontrol ediniz .";
header("Refresh: 2; url=giris.html");
}


ob_end_flush();
?>