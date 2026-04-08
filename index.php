<?php 

require_once "interfaces/EmployeInterface.php";

require_once "class/Employe.php";
require_once "class/Responsable.php";

$charles = new Responsable("Charles", "Darwin", 33, 12);
$albert = new Employe("albert", "Einstein", 55, 23);
$brigitte = new Employe("Brigitte", "Machin", 45,10);

$charles->ajouterEmployer($albert);
$charles->ajouterEmployer($brigitte);

var_dump($charles->getEquipe());


