<?php 

class Employe {

    public $nom;
    public $prenom;
    public $age;

    public function __construct($prenom, $nom, $age) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;

    }

    public function presentation() {

        var_dump("Bonjour, Je suis $this->prenom $this->nom et j'ai $this->age ans");

    }

}


$employe1 = new Employe( "Jean", "Dior", 30);
$employe1->presentation();


$employe2 = new Employe( "Guy Roger", "Eboulet", 33);
$employe2->presentation();


$employe3 = new employe("Louis", "Du Bon", 34);
$employe3->presentation();





// $nom = "Chamla";
// $prenom = "Lior";
// $age = 32;


// $nom2 = "Guy Roger";
// $prenom2 = "Eboulet";
// $age2 = 33;



// function presentation($nom, $prenom, $age) {

//     var_dump("Bonjour, Je suis $prenom $nom et j'ai $age ans");

// }

// presentation($nom, $prenom, $age);
// presentation($nom2, $prenom2, $age2);

// php -S localhost:8000



?>