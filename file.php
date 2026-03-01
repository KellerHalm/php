<?php

    echo filesize('./localhost/t1.txt');
    
    $fp = fopen('./localhost/data1.txt', 'w');
        $a = fwrite($fp, date('Y m d H:i:s', time()));
        var_dump($a);
    fclose($fp);
    
    $filename = "./localhost/data1.txt";
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    
    echo '<br>';
    
    var_dump($contents);
    
    echo '<br>';
    
    if ($handle = opendir('./localhost')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                echo "$entry<br>";
                echo filesize('./localhost'.$entry);
                echo '<br>';
            };
        };
        closedir($handle);
    };
    
?>