<?php

namespace App;

class Entreprise
{
    protected string $nomEntreprise,$ville;
    /**
     * @var Salarie[]
     */
    protected array $salaries=[];
    protected  int $chiffreAffaireMensuel;

    /**
     * @param string $nomEntreprise
     * @param string $ville
     */
    public function __construct(string $nomEntreprise, string $ville,int $chiffreAffaireMensuel)
    {
        $this->nomEntreprise = $nomEntreprise;
        $this->ville = $ville;
        $this->chiffreAffaireMensuel = $chiffreAffaireMensuel;
    }

    public function addEmploye(Salarie $salarie):void{
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
    public function getMasseSalariale ()
    {
        $masseSalariale=0;
        foreach ($this->salaries as $salarie){
            $masseSalariale = $salarie->calculerSalaire() + $masseSalariale;
        }
        return round( $masseSalariale,2);
    }
    public function getSalaireMoyen()
    {
        return round( $this->getMasseSalariale() / count($this->salaries),2);

    }

    /**
     * @return Salarie[]
     */
    public function getSalaries(): array
    {
        return $this->salaries;
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

    /**
     * @return int
     */
    public function getChiffreAffaireMensuel(): int
    {
        return $this->chiffreAffaireMensuel;
    }

    /**
     * @return string
     */
    public function getNomEntreprise(): string
    {
        return $this->nomEntreprise;
    }

}