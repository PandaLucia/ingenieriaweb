<?php
include vehiculo.php
 class Dos_ruedas extends Vehiculo{
   private $cilindrada;

   public function  poner_gasolina(litros){
     if($this->cilindrada)
       echo "El carro de dos ruedas tiene gasolina<br>";
     else
       echo "El vehiculo no circula<br>";
   }
 }
 ?>
