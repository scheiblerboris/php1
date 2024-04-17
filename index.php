<?php
$login = "admin";
$pass = "123";
$auth = false;
if ($login == "admin" && $pass == "123") {
    $user = $login;
    $auth = true;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php if ($auth): ?>
Добро пожаловать <?=$user?>!
<?php  else: ?>
<form action="">
    <input type="text">
    <input type="password">
    <input type="submit" value="Войти">
</form>
<?php endif; ?>
</body>
</html>


