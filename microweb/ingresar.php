<?php
session_start();
$user = $_POST["usuario"];
if ($user == "admin") {
    header("Location:admin.php");
} else {
//    echo "usuario";
    header("Location:usuario.php");
}
$pass = $_POST["password"];
$servurl = "http://microusuarios:3001/usuarios/$user/$pass";
$curl = curl_init($servurl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
if ($response === false) {
    header("Location:index.html");
}

