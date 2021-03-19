<html>
    <head>
        <title>TestConnection Xuechu WANG</title>
    <head>
    <body>
    <a href = inscription.php>inscription d'ici</a><br>
        
<?php
$servername = "localhost";
$username = "root";
$password = "962095";
$dbname = "tp3";
 

$conn = new mysqli($servername, $username, $password,$dbname);
 

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} 
echo "connection success".'<br>';

//id user_login, user_password et pseudo
$sql = "SELECT id, user_login, user_password ,pseudo FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. '<br>'."  user_login: " . $row["user_login"].'<br>'. "-pwd " . $row["user_password"].'<br>'."-nick_name " . $row["pseudo"]. "<br>". "<br>";
    }
} else {
    echo "0 ";
}

 //id login, password et pseudo
?>
    
    </body>
</html>