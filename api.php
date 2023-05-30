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


// Cargar el documento HTML
$dom = new DOMDocument();
$dom->loadHTMLFile('index.html');

// Obtener el elemento con el ID "titulo"
$titulo = $dom->getElementById('titulo');

// Modificar el contenido del elemento
$titulo->nodeValue = 'Nuevo título';

// Guardar los cambios en el documento
$dom->save('index.html');


?>