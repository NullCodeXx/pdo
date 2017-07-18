<?php

//Utiliser une namespace.
namespace entities;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmallDoggo
 *
 * @author solo
 */
class SmallDoggo {
    private $Id;
    private $Name;
    private $Race;
    private $Birthdate;
    private $Isgood;
    
    function __construct(string $Name,
            string $Race,
            \DateTime$Birthdate,
            bool $Isgood,
            int $Id = NULL) {
        $this->Name = $Name;
        $this->Race = $Race;
        $this->Birthdate = $Birthdate;
        $this->Isgood = $Isgood;
        $this->Id = $Id;
    }

    
  

}
