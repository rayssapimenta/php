<?php
//permitem o uso do cod sem hierarquia
//podemos usar os metodos da classe
// use
trait TestandoTrait{
    public function teste(){
    echo "Sou um método da primeira Trait \n";
    }
}
trait Testando{
    public function traitTestando(){
        echo "Este método é da trait Testando \n";
    }
}

class Central{
    use Testando;
    use TestandoTrait;
}
$x = new Central;
$x -> traitTestando();
$x -> teste();