<?php
namespace App;

class Patron extends Salarie {
// tout est hérite a l'expetion du constructeur
    private string $voiture;
    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param string $voiture
     */
    public function __construct (string $nom, string $prenom, int $age, string $voiture)
    {
        parent::__construct($nom,$prenom,$age);
        $this->voiture = $voiture;
    }

    public function presenter(): void
    {
        parent::presenter();
        dump("je suis le patron et je me nomme ". $this->getNom()." ". $this->getPrenom()." et j'ai ".$this->getAge()." ans");
    }

    public function deplacer():void{
        dump( "je me deplace en $this->voiture");
    }

}