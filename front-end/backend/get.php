<?php
// $servername = "localhost";
// $username = "naveentata";
// $password = "11471411";
// $database = "testdb";
// $conn = new mysqli($servername, $username, $password, $database);
// $sql = "SELECT * FROM customers";
// $rs = $conn->query($sql);


// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// if ($conn->query($sql)) {
//     while($row=$rs->fetch_assoc()){
//         $data[]=$row;
//     }
//     header('Content-Type: application/json');
//     echo json_encode($data);
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $conn->close();


//database settings
$connect = mysqli_connect("localhost", "naveentata", "11471411", "testdb");

$result = mysqli_query($connect, "select * from customers");

$data = array();

while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
    header('Content-Type: application/json');
    echo json_encode($data);


?>