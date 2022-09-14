<?php

namespace App;

class Service
{
    protected string $nom;
    protected int $chiffreAffaireMensuel;

    /**
     * @param string $nom
     * @param int $chiffreAffaireMensuel
     */
    public function __construct(string $nom, int $chiffreAffaireMensuel)
    {
        $this->nom = $nom;
        $this->chiffreAffaireMensuel = $chiffreAffaireMensuel;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getChiffreAffaireMensuel(): int
    {
        return $this->chiffreAffaireMensuel;
    }


}