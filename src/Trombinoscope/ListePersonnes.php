<?php
/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 22/04/15
 * Time: 10:09
 */

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT * FROM Personnes WHERE Nom LIKE :term');
$requete->execute(array('term' => '%'.$term.'%'));

$array = array();

while($donnee = $requete->fetch())
{
    array_push($array, $donnee['Nom']);

echo json_encode($array);
}

?>