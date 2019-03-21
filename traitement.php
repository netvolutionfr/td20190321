<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Ok
<?php

$login = $_POST['login'];
$password = $_POST['password'];

$password_chiffre = hash('sha256', $password);

echo "Le mot de passe chiffré est : " . $password_chiffre;
echo "<br>";
if ($login === 'TEST' && $password_chiffre === '94ee059335e587e501cc4bf90613e0814f00a7b08bc7c648fd865a2af6a22cc2') {
    echo "Ok, c'est bon, entrez !";
} else {
    echo "Mauvais identifiant / mot de passe.";
}
?>
</body>
</html>