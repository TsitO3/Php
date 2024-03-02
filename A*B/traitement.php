<?php
        require "function.php";
        $a = $_POST["valeurA"];
        $b = $_POST["valeurB"];
        $str = "";
        for ($i = 1; $i <= $b; $i++){
            $str .= $a . "," . $i . "," . $a*$i . ";";
        }
        displayA($str);
?>