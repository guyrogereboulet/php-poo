<?php 

class Employe {

    public $nom;
    public $prenom;
    private $age;

    public function __construct($prenom, $nom, $age) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        // $this->age = $age;
        // Je peux faire la verication directement dans le constructeur
        $this->setAge($age);

    }

    public function setAge($age) {

        //Si c'st pa un entier ou il mineur égale à 120
        if(is_int($age) && $age <= 120) {
          $this->age = $age;
        } else {
            // J'ajoute une exception, pour avoir un message dans le terminal
            throw new Exception ("L'age d'un employé devrait etre un entier entre 1 e 120");
        }
        



    }


    public function getAge() {
        return $this->age = $age;
    }

    public function presentation() {

        var_dump("Bonjour, Je suis $this->prenom $this->nom et j'ai $this->age ans");

    }

}


$employe1 = new Employe( "Jean", "Dior", 121);
/* Encapsulation (Avec la propriété private, on peut pas modifier l'age) */
// $employe1->age = "Casa";

/*Pour modifier l'age on doit utiliser un fonction public set */
// $employe1->setAge(50);



$employe1->presentation();




$employe2 = new Employe( "Guy Roger", "Eboulet", 33);
$employe2->presentation();


$employe3 = new employe("Louis", "Du Bon", 34);
$employe3->presentation();













?>