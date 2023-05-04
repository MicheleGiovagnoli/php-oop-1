<?php

//CLASSE
class Movie {
    //VARIABILI D'ISTANZA
    public $titolo;
    public $genere;
    public $dataRilascio;
    public $duarata;

    //COSTRUTTORE
    public function __construct($titolo, $genere, $dataRilascio, $durata)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->dataRilascio = $dataRilascio;
        $this->durata = $durata;
    }

    //METODI 
    public function getAllDate(){
        return $this->titolo . ' ' . $this->genere . ' ' . $this->dataRilascio . ' ' . $this->durata;
    }
}

//ISTANZA
$dune = new Movie('Dune', 'Fantascienza', '2021','2:35');
$Interstellar = new Movie('Interstellar', 'Fantascienza', '2014', '2:49');

var_dump($dune);
echo ' <hr/>';
echo $dune->getAllDate();
echo ' <hr/>';
var_dump($Interstellar);
echo ' <hr/>';
echo $Interstellar->getAllDate();
echo ' <hr/>';


