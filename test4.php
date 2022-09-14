<?php
use App\Salarie;
use App\Patron;
use App\ChefsService;
use App\Entreprise;
use App\Interimaire;
use App\Service;
use App\Employe;

require_once "./vendor/autoload.php";

$google = new Entreprise("Google","besancon",250369875);
$ServiceInformatique = new Service("ServiceInformatique",6995863);
$patronGoogle = new Patron("Sundar","Pichai",35,"tesla",1,24000,$google);
$chefsServiceInfo = new ChefsService("Grangeot","Danny",22,$ServiceInformatique,2500,2);

$employe1 = new Employe("dupond","jean",56,151.67,15,13,1.25);
$employe2 = new Employe("dupond","jean",56,151.67,15,13,1.25);
$employe3 = new Employe("dupond","jean",56,151.67,15,13,1.25);
$employe4 = new Employe("dupond","jean",56,151.67,15,13,1.25);

$google->addEmploye($employe1);
$google->addEmploye($employe2);
$google->addEmploye($employe3);
$google->addEmploye($employe4);
$google->addEmploye($chefsServiceInfo);
$google->addEmploye($patronGoogle);



echo "La masse Salarial de ".$google->getNomEntreprise()." est de ".$google->getMasseSalariale()." € \nLe salaire moyen est de ".$google->getSalaireMoyen()." €";




