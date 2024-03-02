<?php
        require "function.php";
        $str = $_GET["str"];
        $index = $_GET["index"];
        $T = explode(";", $str);
        array_splice($T, $index, 1);
        $str = implode(";", $T);
        displayA($str);
?>