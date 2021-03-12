

<?php
function renderMenuToHTML($currentPageId) {
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
    echo "</ul></nav>";
    // ...
    }
    ?>