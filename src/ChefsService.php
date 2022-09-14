<?php
namespace App;
use App\Salarie;

class ChefsService extends Salarie{
    protected int $salaireFix;
    protected int $pourcentageChiffreAffaire;
    protected Service $service ;

    /**
     * @param string $service
     */
    public function __construct(string $nom, string $prenom, int $age,Service $service,int $salaire,int $pourcentageChiffreAffaire)
    {
        parent::__construct($nom,$prenom,$age);
        $this->service = $service;
        $this->salaireFix = $salaire;
        $this->pourcentageChiffreAffaire = $pourcentageChiffreAffaire;
    }

    public function presenter(): void
    {
        dump("Bonjour je suis {$this->getNom()} {$this->getPrenom()} j'ai {$this->getAge()} ans et je suis le chef du service {$this->service}");
    }

    /**
     * @param int $salaireFix
     */
    public function setSalaireFix(int $salaireFix): void
    {
        $this->salaireFix = $salaireFix;
    }

    public function calculerSalaire():int
    {
        $salaire=$this->pourcentageSurChiffreAffaire*$this->service->getChiffreAffaireMensuel()+$this->salaireFix;
        return $salaire;
    }
}