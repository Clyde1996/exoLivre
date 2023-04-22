<?php

class Livre{

    private string $titre;
    private string $anneeParution;
    private int  $nbPages;
    private string $prix;
    private Auteur $auteur;



    public function __construct($titre, $anneeParution, $nbPages, $prix, $auteur){

        $this->titre = $titre;
        $this->anneeParution = $anneeParution;
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        
        $this->auteur = $auteur;
        $this->auteur->ajouterLivre($this);
    }




    //getters/setters
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAnneeParution()
    {
        return $this->anneeParution;
    }

    public function setAnneeParution($anneeParution)
    {
        $this->anneeParution = $anneeParution;

        return $this;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }

    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function __toString(){
        
        return $this->titre ." ". $this->anneeParution. " : " .$this->nbPages. " pages / ". $this->prix;
    }
}



?>