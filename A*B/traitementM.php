<?php
        require "function.php";
        $a = $_POST["valeurA"];
        $b = $_POST["valeurB"];
        $str = $_POST["string"];
        $index = $_POST["number"];
        $T = explode(";", $str);
        $T[$index] = $a.",".$b.",".$a*$b;
        $str = implode(";", $T);
        displayA($str);
?>