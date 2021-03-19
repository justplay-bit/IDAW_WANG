

<?php
$servername = "localhost";
$username = "root";
$password = "962095";
$dbname = "tp3";
 
$conn = new mysqli($servername, $username, $password,$dbname);

$names  = $_POST['name'];
$pwds  = $_POST['pwd'];
$nick_names  = $_POST['nick_name'];

$sql = "INSERT INTO MyGuests (user_login, user_password, pseudo)
VALUES ('$names','$pwds','$nick_names')";
 
if ($conn->query($sql) === TRUE) {
    echo "new date create success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

echo "<a href=testConnection.php>"."show user here"."</a>";
?>