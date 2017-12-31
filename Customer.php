<?php

/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 31/12/2017
 * Time: 22:57
 */
class Customer
{

    private $nom;
    private $prenom;
    
    public $collectionAdress;

    


    public function __construct($nom, $prenon)
    {
        $this->collectionAdress = [];
        
        $this->setNom($nom);
        $this->setPrenom($prenon);
    }
    
    
    public function addElement(Adress $adress){
       if(!in_array($adress, $this->collectionAdress)){
            $this->collectionAdress[] = $adress;
        }
    }

    /**
     * @return mixed
     */
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