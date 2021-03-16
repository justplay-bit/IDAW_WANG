<!--AMSE PHP TP3 Fan_FEI-->
<?php
    if(isset($_COOKIE["style_name"])) {
        setcookie("style_name", "", time() - 10);
    }

    $user_css = $_POST["css"];
    setcookie("style_name", $user_css, time() + 3600);
    echo $_COOKIE["style_name"];

    header("location: index.php");
?>