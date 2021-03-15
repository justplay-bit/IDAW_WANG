<?php
    echo "vous avez disconnected";
    session_start();
    unset( $_SESSION['login']);
    unset( $_SESSION['password']);
    echo '</br>';
    echo '$login';
?>