<?php 

class Stagiaire implements ExploiteInterface {

    use PersonTrait;

   public function __construct(string $_prenom, string $_nom, int $_age)
    {
        $this->prenom = $_prenom;
        $this->nom = $_nom;
        $this->age = $_age;
    }

    public function travailler(): void
    {
        echo "Le stagiaire {$this->prenom} fait l'esclave";
    }

}