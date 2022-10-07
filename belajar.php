<?php

    echo $a = "Nama Saya Adalah Syawal Alfian";
    echo "<br />";
    //untuk menentukan banyak karakter 
    echo strlen($a);
    echo "<br />";
    //untuk menentukan banyak kata
    echo str_word_count($a);
    echo "<br />";
    //untuk membalikan suatu kalimat atau karakter
    echo strrev($a);
    echo "<br />";
    //untu
    echo strpos($a, "Syawal");
    echo "<br />";
    
    echo str_replace("Syawal Alfian", "Syaw", $a);

?>
