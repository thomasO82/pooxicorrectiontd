<?php

class Employe extends Travailleur  implements ExploiteInterface
{
   public function presentation(): void
   {
    echo "je suis qu'un simple employé, je m'appelle {$this->prenom} {$this->nom}"; 
   }

   public function travailler() :void {
    echo "{$this->prenom} Travaille dur";
   }
}