<div class="wrapper">
    <?php

    require_once('views/mainpage/leftmenu.php');
    ?>
    <div class="main_content">
        <?php
        require_once('views/mainpage/header.php');
        ?>


        <?= @$content ?>


    </div>
</div>