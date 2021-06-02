<?php
/**
 * @param mixed $query requete SQL
 * 
 * @return [Array] tableau de lignes de réponses
 */
function selectTable($query)
{
    // Etaoe 1 - Connexion à la base de données
    $maDb = mysqli_connect("localhost","root","","magasin");

    // Etape 2 - Lancer la requête
    $res = mysqli_query($maDb, $query);
    if (!$res) return null;
   //  print_r($res);  
     
     // soit par l'objet du résultat, soit par la fonction fournie par mysqli_
    // echo '<br/> Nombre enregistrements : '.$res->num_rows.'<br/>';
    // On récupère le nombre d'enregistrements et on l'affiche
    $rowscount = mysqli_num_rows($res);
 //   echo 'rows count : '.$rowscount.'<hr/>';

    $returnArray = array();
    // Etape 3 - on récupère les données dans un tableau
    while ($row =mysqli_fetch_assoc($res)) {
        // on affiche le résultat
        //print_r($row);
        //echo '<hr/>';
        array_push($returnArray,$row);
    };
    return $returnArray;
}

//$monResultat=selectTable("SELECT idcat, titre FROM categories;");
//print_r($monResultat);

?>