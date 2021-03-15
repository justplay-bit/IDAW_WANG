<?php
require_once("template_header.php");
require_once("menu.php");
$currentPageId = 'cv';
$currentLanguage = 'en';

if(isset($_GET['page'])) {
$currentPageId = $_GET['page'];
}
if(isset($_GET['lang'])) {
$currentLanguage = $_GET['lang'];
}
?>


<header class="bandeau_haut">
<h1>Xuechu WANG</h1>
</header>

<div id="nav">
<?php
renderMenuToHTML($currentPageId,$currentLanguage);
?>
</div>

<section class="corps">
<?php
$pageToInclude =  $currentPageId . ".php";

if(is_readable($pageToInclude)){
    require_once($pageToInclude);
}
else{ 
    require_once("error.php");
}
?>
</section>

<!-- <form id="style_form" action="index.php" method="GET">
<select name="css">
<option value="style1">style1</option>
<option value="style2">style2</option>
</select>
<input type="submit" value="Appliquer" />
</form> -->

<?php
require_once("template_footer.php");
?>