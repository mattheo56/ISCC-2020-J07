<?php
$coordonnees = array (
"T-shirt rouge"=> 15.50,
"T-shirt vert"=> 15.50,
"T-shirt argent"=>16.50,
"Short bleu"=>19.99,
"Short ver"=>19.99,
"Veste argent"=>35);




function affichage_produits ($coordonnees)
{
$total=0;

echo "<table>";

foreach($coordonnees as $element => $v)
{
echo "<tr>";
echo"<td>";
echo "$element";
echo "</td>";
echo "<td>";
echo "$v";
echo "</td>";
echo "</tr>";

}
}

affichage_produits($coordonnees);

?>