<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROBA R-UD4 PARTE A</title>
</head>
<body>
    <h1>Proba R-UD4 PARTE A</h1>
    <?php
//interfaces
require_once 'Adoptable.php';
require_once 'Comparar.php';
//clases
require_once 'Animal.php';
require_once 'Can.php';
require_once 'Gato.php';

// Xa pasamos obxectos DateTime ao crear os animais
$can1 = new Can("Lúa", new DateTime("2020-05-12"));
$gato1 = new Gato("Simba", new DateTime("2021-03-20"));

// Cada clase debe implementar a interface Adoptable
$can1->adoptar("Raquel");
$gato1->adoptar("Uxío");

// Método describir() debe mostrar o nome e data de nacemento sobre cada animal
echo $can1->describir() . "<br>";
echo $gato1->describir() . "<br>";

// Interface Comparar debe permitir comparar dous animais pola idade
echo "<br>Comparación por idade: ";
switch ($can1->compararCon($gato1)) {
    case -1:
        echo "Lúa é máis nova que Simba.";
        break;
    case 0:
        echo "Lúa e Simba teñen a mesma idade.";
        break;
    case 1:
        echo "Lúa é máis vella que Simba.";
        break;
}

// Método estático para contar cantos animais se crearon
echo "<br><br>Número total de animais: " . Animal::obterNumeroAnimais();

?>

</body>
</html>


