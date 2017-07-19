<?php
/*
 * Toutes les constantes, fonctions et classes déclarées ici 
 * feront partie du namespace MonNamespace.
 */

/**
 * Description of SmallDoggo
 *
 * @author solo
 */

//Utiliser une namespace.
namespace entities;
{
     function test() {
        echo "<br />" . "Coucou je suis la function qui se situe dans le neme-space"
        . "et qui porte le même nom de la function Global";
    }
    test();

class SmallDoggo {
    private $Id;
    private $Name;
    private $Race;
    private $Birthdate;
    private $Isgood;
    
    function __construct(string $Name,
            string $Race,
            \DateTime$Birthdate, // l'anti slash sert a revenir en arrière comme le cmd vus que DateTime est un object et non un type.
            bool $Isgood,
            int $Id = NULL) {
        $this->Name = $Name;
        $this->Race = $Race;
        $this->Birthdate = $Birthdate;
        $this->Isgood = $Isgood;
        $this->Id = $Id;
    }
    

}
}
