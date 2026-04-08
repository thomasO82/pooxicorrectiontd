<?php

class Employe extends Travailleur  implements EmployeInterface
{
   public function presentation(): void
   {
    echo "je suis qu'un simple employé, je m'appelle {$this->prenom} {$this->nom}"; 
   }
}