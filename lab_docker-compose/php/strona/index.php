<?php 

$conn = mysqli_connect('baza_danych', 'root','haslo123');
if (!$conn) {
   exit('Nie uzyskano polaczenia: '.mysqli_connect_error());
}
echo 'Uzyskano polaczenie, proxy dziala!';
die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   Nic nie działa, przerabiaj!
</body>
</html>
