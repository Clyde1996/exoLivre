<?php

class Auteur{
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct($nom, $prenom){

        $this->nom = $nom;
        $this->prenom = $prenom;

        $this->livres = [];
    }

    // méthodes

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
        // array_push($this->livres, $livre); // identique
    }

    public function afficherLivres() {
        $texte = "Livres De " . $this . "<br/>";
        
         
        // TODO pour chaque livre (de nous-même, notre instance d'auteur),afficher les informations de ce livre
        foreach ($this->livres as $livre) {
            $texte .= $livre . "<br/>";
        }

        return $texte;
        
    }
    
  
    //getters/setters
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function __toString(){

        return $this->prenom . " " . $this->nom;
    }


}




?>