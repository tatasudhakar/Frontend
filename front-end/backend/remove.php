<?php
$servername = "localhost";
$username = "naveentata";
$password = "11471411";
$database = "testdb";
$data = json_decode(file_get_contents("php://input"));



// // Create     connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "INSERT INTO customers (first_name, last_name)
// VALUES ('John', 'Doe')";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$first_name=$conn->real_escape_string($data->reg_no);
echo $first_name;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customers (first_name, last_name)
VALUES ('$first_name', '$last_name')";

if ($conn->query($sql) === TRUE) {
    echo $first_name;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>