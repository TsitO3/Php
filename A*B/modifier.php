<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Modifier</title>
</head>
<body>
   <div >
    <?php
        $str = $_POST["string"];
        $index = $_POST["number"];
        $T = explode(";", $str);
        $line = explode(",", $T[$index]);
    echo  "<form class=\"container\" action=\"./traitementM.php\" method=\"post\">
         <input type=\"number\" name=\"valeurA\" value=\"$line[0]\" class=\"number\">
         <input type=\"number\" name=\"valeurB\" value=\"$line[1]\" class=\"number\">
         <input type=\"hidden\" name=\"string\" value=\"$str\" >
         <input type=\"hidden\" name=\"number\" value=\"$index\">
         <input type=\"submit\" class=\"submit\" value=\"ENVOYER\">
    </form>";
    ?>
   </div>  
</body>
</html>