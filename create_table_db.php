<?php
    require('credentials.php');

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to create table
    $sql = "CREATE TABLE cadastro_grr20205277 (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        data_nasc DATE,
        sexo VARCHAR(15) NOT NULL,
        telefone VARCHAR(15) NOT NULL,
        cor_Cabelo VARCHAR(20) NOT NULL,
        tipo_Cabelo VARCHAR(20) NOT NULL,
        cor_Pele VARCHAR(20) NOT NULL,
        tipo_Pele VARCHAR(20) NOT NULL,
        cor_Olhos VARCHAR(20) NOT NULL,
        mensagem VARCHAR(1000) NOT NULL,
        receber_Novidades VARCHAR(5) NOT NULL,
        forma_Receber_Novidades VARCHAR(20) NOT NULL,
        reg_date TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
