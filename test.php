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


$entreprise->AddEmploye($employ1);
$entreprise->AddEmploye($patron1);
$entreprise->AddEmploye($chefDeService);
$entreprise->AddEmploye($chefDeService1);
$entreprise->AddEmploye(new Interimaire("danny","Grangeot",22,"InterimSocity"));

dump($entreprise->getArrayOfChefsDeService());



