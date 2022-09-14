<?php
use App\Salarie;
use App\Patron;
use App\ChefsService;
use App\Entreprise;
use App\Interimaire;

require_once "./vendor/autoload.php";

$employe= new Salarie("grangeot","danny",22);
$employe->presenter();

$employe = new Patron("grangeot","danny",22,"merco");
dump($employe->presenter());