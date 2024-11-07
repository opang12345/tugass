<?php 
    require_once 'class_pulpen.php';

    $pulpen = new pulpen();
    $pensil = new pulpen();

    $pulpen->set_name('pulpen');
    $pulpen->set_color('Red');
    $pensil->set_name('pensil');
    $pensil->set_color('Yellow');

    echo 'Nama alat tulis '.$pulpen->get_name().' Warnanya '.$pulpen->get_color();
    echo '<br/>Nama alat tulis '.$pensil->get_name().' Warnanya '.$pensil->get_color();

?>