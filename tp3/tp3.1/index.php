
<?php   
    setcookie("style_name", "", time() - 10);  
    setcookie("style_name", "css_default", time() + 3600);
?>

<!DOCTYPE html>
<html>
    <head>

        <?php
            $stylecss = "'" . $_COOKIE["style_name"] . ".css'";
            echo "<link rel='stylesheet' href=" . $stylecss .">";
        ?>

        <title>Xuechu WANG</title>
    </head>

    <body>
        <form id="style_form" action="changeCookie.php" method="POST">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
                <option value="css_default">default</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

        <div id="txt">
            HEllO WORLD!
        </div>

    </body>
</html>