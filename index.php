<?php

//CLASSE
class Movie {
    //VARIABILI D'ISTANZA
    public $titolo;
    public $genere;
    public $dataRilascio;
    public $duarata;

    //COSTRUTTORE
    public function __construct($titolo, Generi $genere, $dataRilascio, $durata)
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

    public function getAllGeneri(){
        return $this->genere?->uno . ' ' . $this->genere?->due . ' ' . $this->genere?->tre;
    }
}

class Generi {
    public $uno;
    public $due;
    public $tre;

    public function __construct($uno, $due, $tre){
        $this->uno = $uno;
        $this->due = $due;
        $this->tre = $tre;
    }

}
//ISTANZA
$duneGeneri = new Generi('Fantascienza', 'Azione', 'Avventura');
$dune = new Movie('Dune', $duneGeneri, '2021', '2:35');
var_dump($dune);

$interstellarGeneri = new Generi('Fantascienza', 'Drammatico', 'Avventura');
$interstellar = new Movie('Interstellar', $interstellarGeneri, '2014', '2:49');
var_dump($interstellar);

echo ' <hr/>';
echo $dune->getAllDate();
echo ' <br/>';
echo $dune->getAllGeneri();
echo ' <hr/>';

echo ' <hr/>';
echo $Interstellar->getAllDate();
echo ' <br/>';
echo $Interstellar->getAllGeneri();
echo ' <hr/>';


