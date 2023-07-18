<?php
// $servername = "localhost";
// $username = "528926";
// $password = "admin.jobNexus";
// $database = "528926";
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobBoard";

$conn = mysqli_connect($servername, $username,$password, $database);
if ($conn) {
    echo "<script>
        console.log('Connection established');
    </script>";
}
if (!$conn) {
    echo "<script>
    alert('We are unable to connect to our database.');
  </script>";
}
?>