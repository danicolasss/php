<?php
use App\Salarie;
use App\Patron;
use App\ChefsService;
use App\Entreprise;
use App\Interimaire;

require_once "./vendor/autoload.php";

$employ1= new Salarie("danny","grangeot",20);
$entreprise = new Entreprise("google","besancon");
$patron1 = new Patron("danny","grangeot",20,"twingoII");
$chefDeService= new ChefsService("danny","grangeot", 22,"informatique");
$chefDeService1= new ChefsService("dny","grangt", 22,"infortique");


$entreprise->addEmploye($employ1);
$entreprise->addEmploye($patron1);
$entreprise->addEmploye($chefDeService);
$entreprise->addEmploye($chefDeService1);
$entreprise->addEmploye(new Interimaire("danny","Grangeot",22,"InterimSocity"));

dump($entreprise->getArrayOfChefsDeService());



