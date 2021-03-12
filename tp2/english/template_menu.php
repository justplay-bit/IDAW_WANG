<?php
function renderMenuToHTML($currentPageId,$currentLanguage) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'motivation' => array( 'motivation' ),
'cv' => array( 'cv' ),
'loisir' => array('loisir')
);
// ...
echo "<ul>";
foreach($mymenu as $pageId => $pageParameters) {
    if ($pageId == $currentPageId) {
        echo "<li><a id='currentpage' href='http://localhost/tp2/english/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
    } else {
        echo "<li><a href='http://localhost/tp2/english/index.php?page=" . $pageId . "&lang=" . $currentLanguage . "'>" . $pageParameters[0] . "</a></li>";
    }

}


if ($currentLanguage == "en") {
    echo "<li><a href='http://localhost/tp2/english/index.php?page=" . $currentPageId . "&lang=fr'>francais</a></li>";
} else {
    echo "<li><a href='http://localhost/tp2/english/index.php?page=" . $currentPageId . "&lang=en'>english </a></li>";
}
echo "</ul>";
    // ...
    }
    ?>