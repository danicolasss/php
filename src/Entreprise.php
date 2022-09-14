<?php

namespace App;

class Entreprise
{
    protected string $nomEntreprise,$ville;
    /**
     * @var Salarie[]
     */
    protected array $salaries=[];

    /**
     * @param string $nomEntreprise
     * @param string $ville
     */
    public function __construct(string $nomEntreprise, string $ville)
    {
        $this->nomEntreprise = $nomEntreprise;
        $this->ville = $ville;
    }

    public function AddEmploye(Salarie $salarie):void{
        $this->salaries [] = $salarie;
    }

    /**
     * @return array
     */
    public function getAllInfosOfSalarie(): array
    {
        foreach ($this->salaries as $salarie){
            $salarie->presenter();
        }
    }

    public function getChefsDeService():array
    {

        foreach ($this->salaries as $salarie){

            if ($salarie instanceof ChefsService){
               $chefsService[]=["prenom"=>$salarie->getPrenom(),"nom"=>$salarie->getNom(),"age"=>$salarie->getAge()];
            }

        }
        return $chefsService;
    }
}