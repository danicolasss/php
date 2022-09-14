<?php
namespace App;

abstract class Salarie{
    private string $nom,$prenom;
    private int $age;

    /**
     * @param string $nom
     * @param string $prenom
     * @param int $age
     */
    public function __construct($nom, $prenom, $age)
    {
        $this->pourcentageSurChiffreAffaire= 0;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }


    //tous les sous-classe devront implementer cette methode
    abstract public function presenter();
    abstract public function getSalaireSalarie();

}