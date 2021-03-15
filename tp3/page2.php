<?php
    session_start();
    $_SESSION['login'] ;
    $_SESSION['password']  ;
    echo "<h1>Bienvenu!!  ".$_SESSION['login']. "</h1>";
    echo "c'est page2";
    echo "</br>";
    echo "<a href=page1.php>chousir page1</a>";
    echo "</br>";
    echo "<a href=page2.php>chousir page2</a>";
    echo "</br>";
    echo '<a href="disconnected.php">disconnected</a>';
?>