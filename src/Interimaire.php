<?php

namespace App;

class Interimaire extends Salarie
{
    protected string $societeInterim;

    /**
     * @param string $societeInterim
     */
    public function __construct(string $nom, string $prenom, int $age,string $societeInterim)
    {
        parent::__construct($nom,$prenom,$age);
        $this->societeInterim = $societeInterim;
    }

    /**
     * @return string
     */
    public function getSocieteInterim(): string
    {
        return $this->societeInterim;
    }



}