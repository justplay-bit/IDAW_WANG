<?php
require_once("template_header.php");
require_once("template_menu.php");
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
<?php
renderMenuToHTML($currentPageId,$currentLanguage);
?>

<section class="corps">
<?php
$pageToInclude = $currentLanguage . "/" . $currentPageId . ".php";

if(is_readable($pageToInclude))
require_once($pageToInclude);
else
require_once("error.php");
?>
</section>
<?php
require_once("template_footer.php");
?>