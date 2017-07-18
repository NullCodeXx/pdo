<?php

/*Révision sur les function.
 * 
 */

include_once "FormBuilde.php";

$formBuider = new FormBuilde();


$formBuider->label("Entrer une valeur");
$formBuider->input("text", "valeur no null");
$formBuider->select("name", ["option1", "option2"]);

echo $formBuider->build();
