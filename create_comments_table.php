<?php
  require('credentials.php');

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // sql to create table

  // Change table's name for each table you want to 
  // creat (Comments_cosmeticos; Comments_video...), then run this file again
  $sql = "CREATE TABLE Comments_video_grr20204466 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    comment VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
  )";

  if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
