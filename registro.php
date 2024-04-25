<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carrera_registrants";


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario
$name = $_POST['name'];
$surname = $_POST['surname'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$disciplines = $_POST['disciplines'];
$category = $_POST['category'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$location = $_POST['location'];
$state = $_POST['state'];

// Preparar la consulta SQL para la inserción
$sql = "INSERT INTO registrants (name, surname, birthdate, gender, email, disciplines, category, phone, age, location, state) 
        VALUES ('$name', '$surname', '$birthdate', '$gender', '$email', '$disciplines', '$category', '$phone', '$age', '$location', '$state')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

