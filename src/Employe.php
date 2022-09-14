<?php

namespace App;

class Employe extends Salarie
{

    public function __construct (string $nom, string $prenom, int $age)
    {
        parent::__construct($nom,$prenom,$age);
    }

    public function presenter(): void
    {
        parent::presenter();
        dump("je suis ". $this->getNom()." ". $this->getPrenom()." et j'ai ".$this->getAge()." ans");
    }
}