<?php
namespace App;
use App\Salarie;

class ChefsService extends Salarie{
    protected string $service;
    protected int $salaire;

    /**
     * @param string $service
     */
    public function __construct(string $nom, string $prenom, int $age,string $service,int $salaire)
    {
        parent::__construct($nom,$prenom,$age);
        $this->service = $service;
        $this->salaire = $salaire;
    }

    public function presenter(): void
    {
        parent::presenter();
        dump("Bonjour je suis {$this->getNom()} {$this->getPrenom()} j'ai {$this->getAge()} ans et je suis le chef du service {$this->service}");
    }

    /**
     * @param int $salaire
     */
    public function setSalaire(int $salaire): void
    {
        $this->salaire = $salaire;

    }



}