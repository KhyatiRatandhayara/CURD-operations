<?php
include "conn.php";
if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $password = $_POST["password"];

echo "<br>";
echo "The username: " . $username . "<br>" . "Password: " . $password;

$query = "INSERT INTO users(name, password) VALUES ( '$username', '$password')";
$result = mysqli_query($con, $query);
mysqli_close($con);
    }
?>