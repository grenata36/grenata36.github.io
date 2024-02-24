<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
         <input type="text" name="name" id="name">
         <label for="name">Név</label>
         <input type="email" name="email" id="email">
         <label for="email">E-mail</label>
         <button>küldés</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_adat = $_POST['name'] . '<br>';
    $email_adat = $_POST['email'] . '<br>';
    $egység = $name_adat . " " . $email_adat;

    $name_file = fopen('adatok.txt','a');
    fwrite($name_file, $egység . PHP_EOL);
    fclose($name_file);

}

?>



