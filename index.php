<?php 

require_once "interfaces/VolerInterface.php";
require_once "interfaces/EmployeInterface.php";
require_once "interfaces/ResponsableInterface.php";
require_once "interfaces/ExploiteInterface.php";

require_once "traits/PersonTrait.php";

require_once "class/Travailleur.php";
require_once "class/Employe.php";
require_once "class/Responsable.php";
require_once "class/Stagiaire.php";

$responsable = new Responsable("Chef", "truc", 34, 21);

$employeOne = new Employe("Test", "Truc", 23, 4);
$employeTwo = new Employe("Employe 2", "Muche", 23, 4);
$stagiaire = new Stagiaire("stagiaire", "Renaud", 33);

$responsable->ajouterEmployer($employeOne);
$responsable->ajouterEmployer($employeTwo);

$responsable->faireTravaillerEquipe();
// $responsable->faireTravailler($stagiaire);