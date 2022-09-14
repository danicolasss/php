<?php
namespace App;

class Patron extends Salarie {
// tout est hérite a l'expetion du constructeur
    private string $voiture;
    protected int $pourcentageChiffreAffaire;
    protected int $primeDirection;

    protected Entreprise $entreprise;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     * @param string $voiture
     */
    public function __construct (string $nom, string $prenom, int $age, string $voiture,int $pourcentageChiffreAffaire, int $primeDirection,Entreprise $entreprise)
    {
        parent::__construct($nom,$prenom,$age);
        $this->voiture = $voiture;
        $this->entreprise = $entreprise;
        $this->pourcentageChiffreAffaire = $pourcentageChiffreAffaire;
        $this->primeDirection = $primeDirection;
    }

    public function presenter(): void
    {

        dump("je suis le patron et je me nomme ". $this->getNom()." ". $this->getPrenom()." et j'ai ".$this->getAge()." ans");
    }

    public function deplacer():void{
        dump( "je me deplace en $this->voiture");
    }


    public function calculerSalaire()
    {
        $salaire= $this->primeDirection + ($this->pourcentageSurChiffreAffaire*$this->entreprise->getChiffreAffaireMensuel());
        return $salaire;
    }
}