
        <?php
        require_once('template_header.php');
        ?>  
        <img class="photo" src="photo1.jpg" width="150"></img>
        <h1>C'est mon cv</h1>
        <hr />
        <h3 class="name">Xuechu WANG</h3>
        <h3>Téléphone : 0763447674</h3>
        <h4>Maîtrise du langage de programmation C, JavaScript, code de Java et autres langages. </h4>
        <hr />
        <h2>Stage</h2>
        <p>2018.7<br/>Ingénieur réseau - Shanxi Qingzhong Technology Co., Ltd.        
            Statistiques de données, détection de code. 
        </p>
        <h2>Expériences</h2>
        <p>2019.4 <br/> Test de niveau A, Université Xidian          
            Calcul des statistiques du flux de personnes à différents moments, lieux et heures, 
            Conception d’un itinéraire de bus itinérant (visite optimisée du campus)
            </p>
        <hr />
        <h2>Menu</h2>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('cv','fr');
        ?>  
        <?php
        require_once('template_footer.php');
        ?>