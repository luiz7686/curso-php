<?php



for ($contador = 1 ; $contador <= 100; $contador++)
  {

    if ( ($contador % 4) > 0  )  {
      echo "$contador " . PHP_EOL;
    }

    else {
      echo "PIN" . PHP_EOL;

    }
  }
