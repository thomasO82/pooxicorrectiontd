<?php 

class Responsable extends Employe implements ResponsableInterface {

    private $equipe = [];

    public function getEquipe(){
        return $this->equipe;
    }

    public function setEquipe($_equipe){
        $this->equipe = $_equipe;
    }

    public function ajouterEmployer(Employe $_employe) : void{
        array_push($this->equipe, $_employe);
    }
}