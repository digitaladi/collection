<?php

/**

 * Cette classe(Client) à un attribut qui contient une collection d'objets de type Adresse
 *
 *Cela veut dire q'un client peut avoir plusieurs adresse
 *
 *Pour ajouter un objet de type adresse dans la collections d'objets, on utilise la methode addElement
 */
class Customer
{

    //les caracteristiques du client
    private $nom;
    private $prenom;

    //cette caracteristique stocke une collection d'objets de type adresse
    public $collectionAdress;

    


    public function __construct($nom, $prenon)
    {
        //ici on initialise le tableau à chaque instanciation
        $this->collectionAdress = [];
        
        $this->setNom($nom);
        $this->setPrenom($prenon);
    }




    //methode qui permet d'ajouter un instance de Adress dans le tableau collectionAdress
    public function addElement(Adress $adress){
        //si l'instance ne se trouve pas dans le tableau....
       if(!in_array($adress, $this->collectionAdress)){
            $this->collectionAdress[] = $adress;   //on le met dans le tableau
        }
    }



                                                                //GETTER ET SETTER

    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    
    
    

}