<?php
    function displayA($str){
        echo "<!DOCTYPE html>
                <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                        <link rel=\"stylesheet\" href=\"styleA.css\">
                        <title>Resultat</title>
                </head>";
            echo "<body>";
                echo "<table class=\"display\">";
                echo    "<tr class=\"headT\">
                            <td>A</td>
                            <td>B</td>
                            <td>A*B</td>
                            <td>Outils</td>
                        </tr>";
                $T = explode(";", $str);
                array_pop($T);
                $index = 0;
                foreach ($T as $line){
                    $lineT = explode(",", $line);
                    $color = ($index%2==0)?"green":"red";
                    echo    "<tr class=\"$color simple\">
                                <td>$lineT[0]</td>
                                <td>$lineT[1]</td>
                                <td>$lineT[2]</td>
                                <td class=\"outils\">
                                    <form action=\"modifier.php\"  method=\"post\">
                                        <input type=\"hidden\" name=\"string\" value=\"$str\">
                                        <input type=\"hidden\" name=\"number\" value=\"$index\">
                                        <input type=\"submit\" class=\"modifier\" value=\"Modifier\">
                                    </form>
                                    <a href=\"./supprimer.php?str=$str&index=$index\"><button>Supprimer</button></a>
                                </td>
                            </tr>";
                    $index++;
                }
                echo "</table>";              
            echo "</body>
        </html>";

    }

?>