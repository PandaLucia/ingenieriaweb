<title> LAB 4 </title>
<?php
 class Vehiculo{
   private $color ;
   private $peso ;
   public function circula(){
      if($this->peso)
        echo "El vehiculo circula<br>";
      else
        echo "El vehiculo no circula<br>";
      }


      public function añadir_persona(peso_persona){
        if($this->peso_persona)
          echo "Esta soporte para 4 personas<br>";

        else
          echo "Solo es soporte para una persona<br>";
         $this ->peso_persona = true;
      }
 }

$vehiculo = new Vehiculo();
$vehiculo->circula();
$vehiculo->añadir_persona();
$vehiculo->circula();
 ?>
