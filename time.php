<?php
    $t = time(); 
    echo date('Y-m-d H:i: A', $t), '<br>';
    echo $t, '<br>';
    
    // date_default_timezone_set('Russia/Moscow');
    // $t = time();
    // echo date('Y-m-d H:i: A', $t), '<br>';
    // echo $t, '<br>';
    
    $s = "January 01 1983";
    echo strtotime($s), "<br>";
?>
