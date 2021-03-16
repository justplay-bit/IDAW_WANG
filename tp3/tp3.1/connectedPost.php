<?php
// on simule une base de données
$users = array(
// login => password
'wxc' => '123456',
'riri' => 'fifi',
'yoda' => 'maitrejedi' );
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
if(isset($_POST['login']) && isset($_POST['password'])) {
$tryLogin=$_POST['login'];
$tryPwd=$_POST['password'];
// si login existe et password correspond
if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
    $successfullyLogged = true;
    $login = $tryLogin;
    } else
    $errorText = "Erreur de login/password";
    } else
    $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
    echo $errorText;
    } 

    else {
    echo "<h1>Bienvenu!! ".$login."</h1>";
    echo "</br>";
    echo "<a href=page1.php>chousir page1</a>";
    echo "</br>";
    echo "<a href=page2.php>chousir page2</a>";

    }

    session_start();
    $_SESSION['login'] =$_POST['login'];
    $_SESSION['password']   = $_POST['password'];
    echo "</br>";
    echo '<a href="disconnected.php">disconnected</a>';

?>

