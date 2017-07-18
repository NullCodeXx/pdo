<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormBuilde
 *
 * @author solo
 */
class FormBuilde {

    private $method;
    private $action;
    private $form = "";
    
    function __construct($action = "", $method = "POST" ) {
        $this->method = $method;
        $this->action = $action;
    }

    //Crée une  function form LABEL
    function label(string $text) {
        $this->form .= "<label>" . $text . " </label>";
    }

    //Crée une function form SELECT
    function input(string $type, string $text = "valeur null") {
        $this->form .= "<input type='". $type ."'  placeholder='" . $text . "' name='" . $text . "' />";
    }

    //Crée une function form INPUT
    function select(string $name, array $options) {
        $this->form .= '<select name=" ' . $name . ' " >';
        foreach ($options as $option) {
            $this->form .= '<option>' . $option . '</option>';
        }
        $this->form .= '</select>';
    }

    //Crée une function form build
    function build() {
        return '<form method="' . $this->method . '" action="' . $this->action . '">'.  $this->form . '</form>';
    }
    
    

}
