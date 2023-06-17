<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="mx-auto mt-5" style="width: 30%;">
        <form action="" method="post">
            <h2><em>Formulario de Registro</em></h2>
            <!-- Nombre -->
            <label for="nombre" class="form-label mt-1">Nombre<span class="text-secondary ms-1"><em>(requerido)</em></span></label>
            <input type="text" class="form-control" name="nombre">
            <!-- Apellido -->
            <label for="apellido" class="form-label mt-1">Apellido<span class="text-secondary ms-1"><em>(requerido)</em></span></label>
            <input type="text" class="form-control" name="apellido">
            <!-- Email -->
            <label for="email" class="form-label mt-1">Email<span class="text-secondary ms-1"><em>(requerido)</em></span></label>
            <input type="email" class="form-control" name="email">
            <!-- Submit -->
            <input type="submit" class="form-control btn btn-primary mt-3" name="submit" value="Registrarse">

<?php

if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, apellido, email)
VALUES ('$nombre', '$apellido', '$email')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>   

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>