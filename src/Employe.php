<?php

namespace App;

class Employe extends Salarie
{
    protected int $nbHeuresMensuelles,
                  $tauxHoraire,
                  $nbHeureSuo,
                  $tauxHoraireHeureSup;

    /**
     * @param int $nbHeuresMensuelles
     * @param int $tauxHoraire
     * @param int $nbHeureSuo
     * @param int $tausHoraireHeureSup
     */
    public function __construct(string $nom, string $prenom, int $age,int $nbHeuresMensuelles, int $tauxHoraire, int $nbHeureSuo, int $tausHoraireHeureSup)
    {
        parent::__construct($nom,$prenom,$age);
        $this->nbHeuresMensuelles = $nbHeuresMensuelles;
        $this->tauxHoraire = $tauxHoraire;
        $this->nbHeureSuo = $nbHeureSuo;
        $this->tauxHoraireHeureSup = $tausHoraireHeureSup;
    }


    public function presenter(): void
    {
        dump("je suis ". $this->getNom()." ". $this->getPrenom()." et j'ai ".$this->getAge()." ans");
    }

    public function calculerSalaire()
    {
        $salaire= $this->nbHeuresMensuelles*$this->tauxHoraire + $this->tauxHoraireHeureSup*$this->tauxHoraire*$this->tauxHoraireHeureSup;
        return $salaire;
    }
}