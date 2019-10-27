<?php

trait FullName {

  public function getFullName(){

    return "Nome: " . $this -> nome . ", cognome: " . $this -> cognome . "<br>";
  }
}

class Persona {

  use FullName;

  public $nome;
  public $cognome;
  public $indirizzo;

  public function __construct($nome, $cognome, $indirizzo){
    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> indirizzo = $indirizzo;
  }

  public function toString(){
    return $this -> nome . " " . $this -> cognome . " " . $this -> indirizzo . " ";
  }

}

class Studente extends Persona {

  public $programma;
  public $tasse;

  public function __construct($nome, $cognome, $indirizzo, $programma, $tasse){

    parent::__construct($nome, $cognome, $indirizzo);
    $this -> programma = $programma;
    $this -> tasse = $tasse;
  }

  public function toString(){

    return parent::toString() . $this -> programma . " " . $this -> tasse;
  }
}

class Insegnante extends Persona {

  public $specializzazione;
  public $paga;

  public function __construct($nome, $cognome, $indirizzo, $specializzazione, $paga){

    parent::__construct($nome, $cognome, $indirizzo);
    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function toString(){

    return parent::toString() . $this -> specializzazione . " " . $this -> paga;
  }
}


$persona1 = new Persona("Marco", "Lauretti", "Roma");
$persona2 = new Studente("Paolo", "Rozdzynski", "Firenze", "IT", "0 Euro");
$persona3 = new Insegnante("Nikolas", "Mosca", "Milano", "FrontEndDev", "2000 Euro/mese");

echo $persona1 -> toString() . "<br><br>";
echo $persona2 -> toString() . "<br><br>";
echo $persona3 -> toString() . "<br><br>";


echo $persona1 -> getFullName();
echo $persona2 -> getFullName();
echo $persona3 -> getFullName();
?>
