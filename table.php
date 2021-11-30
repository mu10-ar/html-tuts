<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./table2.php" method="post">
    <input type="text" name="name" id="">
    <input type="text" name="email" id="">
    <input type="submit" value="submit">
</form>
<?php
if ($_GET) {
  $name = $_GET['name'];
  $email = $_GET['email'];
}

?>



</body>
</html>