<?php

$panier = array(
array("Tshirt rouge","15.50","5"),
array("Tshirt vert","15.50","6"),
array("Tshirt argent", "15.50","8"),
array("Short bleu","16.50","5"),
array("Short vert","19.99","5"),
array("Veste argent","19.99","10"),
array("Veste argent","35","3"),
);

function afficher_panier($panier) 
{
	foreach ($panier as $element) {
	echo "<ul>";
		foreach ($element as $donnes) {
	echo "<li>" .$donnes. "</li>";
	    }
	      echo "</ul>";
	 }
}

afficher_panier ($panier);

function calculer_total_panier($panier) 
{
	$total =0;
	foreach ($panier as $element) {
	     $total = $total + $element [1];
	}
return $total;
}

echo "<p>" . calculer_total_panier ($panier) . "</p>";
?> 