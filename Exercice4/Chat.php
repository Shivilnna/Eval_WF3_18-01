<?php

/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 18/01/2017
 * Time: 14:42
 */
class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->prenom   = $prenom;
        $this->age      = $age;
        $this->couleur  = $couleur;
        $this->sexe     = $sexe;
        $this->race     = $race;
    }

//  Ajouter une méthode ​getInfos()​ permettant de retourner la totalité des propriétés sous forme de tableau.
    public function getInfos() {
        $data = array(
            "Prénom"    =>$this->prenom,
            "Age"       =>$this->age,
            "Couleur"   =>$this->couleur,
            "Sexe"      =>$this->sexe,
            "Race"      =>$this->race
        );
        return $data;
    }

// GETTER
    public function getPrenom() {return $this->prenom;}
    public function getAge()    {return $this->age;}
    public function getCouleur(){return $this->couleur;}
    public function getSexe()   {return $this->sexe;}
    public function getRace()   {return $this->race;}

//  SETTER
    public function setPrenom($valor) {
//        Verif si il y a bien entre 3 et 20 caracteres.
        if (count($valor) <= 20){
            if (count($valor) >= 3) {
                return $this->prenom = $valor;
            }
        }
    }

    public function setAge($valor) {
//        Verif si $valor est bien un INT et entier.
        if (is_int($valor)) {
            return $this->age = $valor;
        }
    }

    public function setCouleur($valor) {
//        Verif si il y a bien entre 3 et 10 caracteres.
        if (count($valor) <= 10){
            if (count($valor) >= 3) {
                return $this->couleur = $valor;
            }
        }
    }

    public function setSexe($valor) {
//        Verif si bien male ou femelle.
        if ($valor = 'male' || $valor = 'femelle') {
            return $this->sexe = $valor;
        }
    }

    public function setRace($valor) {
//        Verif si il y a bien entre 3 et 20 caracteres.
        if (count($valor) <= 20){
            if (count($valor) >= 3) {
                return $this->race = $valor;
            }
        }
    }
}
