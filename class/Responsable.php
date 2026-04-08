<?php

class Responsable extends Travailleur implements ResponsableInterface
{

    private $equipe = [];

    public function getEquipe()
    {
        return $this->equipe;
    }

    public function setEquipe($_equipe)
    {
        $this->equipe = $_equipe;
    }

    public function ajouterEmployer(Employe $_employe): void
    {
        array_push($this->equipe, $_employe);
    }

    public function presentation(): void
    {
        echo "je suis le responsable, je m'appelle {$this->prenom} {$this->nom}";
    }

    public function faireTravailler(ExploiteInterface $travailleur) :void {
        $travailleur->travailler();
    }

    public function faireTravaillerEquipe() : void {
        foreach ($this->equipe as $member){
            $member->travailler();
            echo "<br/>";
        }
    }
}
