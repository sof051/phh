<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement_formulaire</title>
</head>

<body>
<?php
//declaration d'une variable<?php
$mavar = 0;
//affectation d'une var déclarée
$mavar = $mavar + 3;
//affichage en ligne d'une variable simple
echo $mavar;
?>

<?php
    $mesData=null;

    echo '<br/>isset POST'.count($_POST).'<br/>isset GET'.count($_GET);
     if(count($_GET)>0)
     {
         $mesData=$_GET;
     }
     elseif (count($_POST)>0) {
         $mesData=$_POST;
     }
     else
     {
         echo "Aucune donnée";
         exit(0);
     }
?>
<h1>Tableau $mesData</h1>
<?php
//affichage décomposé d'une variable complexe (obj, tableau,...)
print_r($mesData);
?>
<h1>Position 1</h1>
<?php
//affichage d'un champ d'un tableau position 1
echo($mesData["description-produit"]);
?>
</body>

</html>