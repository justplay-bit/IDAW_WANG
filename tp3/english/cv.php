
        <?php
        require_once('template_header.php');
        ?>  
        <img class="photo" src="photo1.jpg" width="150"></img>
        <h1>This is my cv</h1>
        <hr />
        <h3 class="name">Xuechu WANG</h3>
        <h3>Telephone : 0763447674</h3>
        <h4>Proficiency in C programming language, JavaScript, Java code and other languages. </h4>
        <hr />
        <h2>internship</h2>
        <p>2018.7<br/>Network Engineer - Shanxi Qingzhong Technology Co., Ltd.
             Data statistics, code detection. 
        </p>
        <h2>Experiences</h2>
        <p>2019.4 <br/> Level A test, Xidian University
             Calculation of statistics of the flow of people at different times, places and times,
             Design of an itinerant bus route (optimized campus visit)
            </p>
        <hr />
        <h2>Menu</h2>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('cv');
        ?>  
        <?php
        require_once('template_footer.php');
        ?>