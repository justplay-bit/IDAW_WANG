

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
echo "<nav class=\"menu\"><ul>";
foreach($mymenu as $pageId => $pageParameters) {
    if($pageId===$currentPageId){
        echo "<li><a href=\".$pageId.php\">".$pageParameters[0]."</a><li>";
    }
    else{
        echo"<li><a href=\"".$pageId.".php\">".$pageParameters[0]."</a></li>";
    }
}

if ($currentLanguage == "en") {
    echo "<li><a href='http://localhost/tp2.1/english/index.php?page=" . $currentPageId . "&lang=en'>fr</a></li>";
} else {
    echo "<li><a href='http://localhost/tp2.1/francais/index.php?page=" . $currentPageId . "&lang=fr'>en</a></li>";
}
    echo "</ul></nav>";
    // ...
    }
    ?>