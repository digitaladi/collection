<?php

require_once "Adress.php";
require_once "Customer.php";

//un client  (objet de type client)
$client = new Customer("Timera","Aladi" );


//objet de type adresse
//adresse de facturation
$adresseDeFacturation = new Adress();

//assignation des caracteristiques d' adresses
$adresseDeFacturation->setCity("St gratien");
$adresseDeFacturation->setCode(95210);
$adresseDeFacturation->setStreet("10, place charles de gaulle ");

//print_r($adresseDeFacturation);


//objet de type adresse
//adresse de livraison
$adresseDelivraison = new Adress();
$adresseDelivraison->setCity("Paris 18eme");
$adresseDelivraison->setCode(75018);
$adresseDelivraison->setStreet("8, rue marc seguin ");




//on ajoute une adresse $adresseDeFacturation dans le tableau collectionAdress
$client->addElement($adresseDeFacturation);


//on ajoute une adresse $adresseDelivraison dans le tableau collectionAdress
$client->addElement($adresseDelivraison);

echo "<br/>";
echo "<br/>";
echo "<br/>";


//la collection d'objets de type adresse
$maCollection = $client->collectionAdress;

//on affiche les caracteristiques nom et prenom de l'objet client
echo " Les villes de ".$client->getNom() ." ". $client->getPrenom() . " sont : <br/>";


//On parcourt la collection d'objets, et pour chaque objet on affiche la city
foreach ($maCollection as $item => $value){
   echo $item . " ". $value->getCity(). "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";




print_r($client);
?>
