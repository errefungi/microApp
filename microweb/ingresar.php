<?php
session_start();
$_SESSION["usuario"] = $user;
$user = $_POST["usuario"];
$pass = $_POST["password"];
$servurl = "http://microusuarios:3001/usuarios/$user/$pass";
$curl = curl_init($servurl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
if ($response === false) {
    header("Location:index.html");
}

    if ($user == "admin") {
        echo "admin";
        header("Location:admin.php");
    } else {
        echo "usuario";
        header("Location:usuario.php");
    }
if ($user === false) {
    header("Location:index.html");
}
