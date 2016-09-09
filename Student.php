<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Eric Lau
 */
class Student {
    //Constructor for Student Object
    function __construct() {
    $this->surname = '';
    $this->first_name = '';
    $this->emails = array();
    $this->grades = array();
    }
    
    //Adds an email to the student
    function add_email($which,$address) {
    $this->emails[$which] = $address;
    }
    
    //Adds a grade to the student
    function add_grade($grade) {
    $this->grades[] = $grade;
    }
    
    //Averages the grades of the student
    function average() {
    $total = 0;
    foreach ($this->grades as $value)
    $total += $value;
    return $total / count($this->grades);
    }
    
    //Turns the data stored in the object into a string
    function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what)
    $result .= $which . ": \t". $what. "\n";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
    }
    
}
