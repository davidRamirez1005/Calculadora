<?php
// header("content-Type: application/json");
echo "HACER OTRA OPERACION:";
echo <<<HTML
    <a href="index.html" taget="_blank">Volver</a>
HTML;
// var_dump($_GET);
echo "<br>"."<br>";
print_r($_POST);
echo "<br>"."<br>";

if($_POST["calcular"]=="suma"){
    echo $_POST["numero1"] + $_POST["numero2"];
}
else if($_POST["calcular"]=="resta"){
    echo $_POST["numero1"] - $_POST["numero2"];
}
else if($_POST["calcular"]=="division"){
    echo $_POST["numero1"] / $_POST["numero2"];
}
else if($_POST["calcular"]=="multiplicacion"){
    echo $_POST["numero1"] * $_POST["numero2"];
}
else{
    echo "Ingrese algo `_´";
}



?>
