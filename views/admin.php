<?php

require_once '../controllers/AdminController.php';

if (isset($_POST['email'])){

}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="POST">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <button type="submit">Guardar</button>
</form>
</body>
</html>
