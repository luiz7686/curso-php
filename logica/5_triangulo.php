<?php



for ($contador = 1 ; $contador <= 5; $contador++)
  {

      $i=1;
      $i = $i * $contador;
      $n = 1;

      while( $n <= $i  )
      {

        echo "*" ;

        $n ++;
      }

      echo " " . PHP_EOL;


  }
