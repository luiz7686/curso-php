<?php



for ($contador2 = 1 ; $contador2 <= 10; $contador2++)
{

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


  }  
