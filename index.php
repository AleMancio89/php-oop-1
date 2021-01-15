<?php
/*
Definire una classe PHP che modella il concetto di una "Stanza di Hotel"; oltre a definire almeno 3 proprieta' distinte, vorrei che implementaste un costruttore che assegna un valore ad almeno una di queste proprieta', a vostro piacimento. Infine, implementate anche una funzione che, quando invocata sull'oggetto, stampi il contenuto di tutte le sue proprieta' ( concatenate i valori per formare una stringa )
*/

class Stanza {
    public $prezzo;
    public $tipo;
    public $piano;

    function __construct($tipo, $prezzo, $piano) {
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->piano = $piano;
    }

    function print_room() {
        echo 'Prezzo: ' . $this->prezzo . '€' . ' Tipo Camera: ' . $this->tipo . ' Piano: ' . $this->piano;
    }

}

$stanza1 = new Stanza('Suite', '50', '4');

$stanza1->print_room();


?>