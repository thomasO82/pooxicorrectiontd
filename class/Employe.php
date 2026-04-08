<?php

class Employe implements EmployeInterface
{
    // ATTRIBUTS
    private string $prenom;
    private string $nom;
    private int $age;
    private int $anciennete;
    private static int $nbEmploye = 0;
    const NB_EMPLOYE_MAX = 10;

    //METHODES

    public function __construct(string $_prenom, string $_nom, int $_age, int $_anciennete)
    {
        $this->setPrenom($_prenom);
        $this->setNom($_nom);
        $this->setAge($_age);
        $this->setAnciennete($_anciennete);

        self::incrementEmployer();
    }

    static public function incrementEmployer() : void
    {
        self::$nbEmploye++;
    }

    public function presentation() : void
    {
        echo "Je m'appelle {$this->prenom} {$this->nom}, j'ai {$this->age} ans et je bosse ici depuis {$this->anciennete} ans";
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $_prenom)
    {
        $this->prenom = $_prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $_nom)
    {
        $this->nom = $_nom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(string $_age)
    {
        if ($_age >= 18 && $_age <= 65) {
            return $this->age = $_age;
        }
        echo "l'age doit etre comprius entre 18 et 65 ans";
    }

    public function getAnciennete()
    {
        return $this->anciennete;
    }

    static public function getNbEmploye(){
        return self::$nbEmploye;
    }

    public function setAnciennete(string $_anciennete)
    {
        if ($_anciennete <= 40) {
            return $this->anciennete = $_anciennete;
        }
        echo ("l'ancienneté ne peut etre superieur a 40");
    }
}