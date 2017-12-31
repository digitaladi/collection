<?php

require_once "Adress.php";
require_once "Customer.php";

//un client
$client = new Customer("Timera","Aladi" );



//adresse de facturation
$adresseDeFacturation = new Adress();
$adresseDeFacturation->setCity("St gratien");
$adresseDeFacturation->setCode(95210);
$adresseDeFacturation->setStreet("10, place charles de gaulle ");

//print_r($adresseDeFacturation);


//adresse de livraison
$adresseDelivraison = new Adress();
$adresseDelivraison->setCity("Paris 18eme");
$adresseDelivraison->setCode(75018);
$adresseDelivraison->setStreet("8, rue marc seguin ");





$client->addElement($adresseDeFacturation);
$client->addElement($adresseDelivraison);

echo "<br/>";
echo "<br/>";
echo "<br/>";

$maCollection = $client->collectionAdress;


echo " Les villes de ".$client->getNom() ." ". $client->getPrenom() . " sont : <br/>";

foreach ($maCollection as $item => $value){
   echo $item . " ". $value->getCity(). "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";




print_r($client);
?>
