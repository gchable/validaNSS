<?php

/**
 * Devuelve el dígito verificador de un número de seguridad social de 11 dígitos
 * en el entendido que el resultado debe ser igual al último digito del número
 * proporcionado, de lo contrario el NSS está mal.
 */

function validaNSS($nss)
{
   $nss = str_split($nss);
   
   //Eliminamos el último dígito, ya que el dígito se calcula en base a los diez primeros numeros
   array_pop($nss);

  $suma = 0;
   foreach ($nss as $key => $value) {
      // A los impares en el array se multiplica por uno (o solo se toma el valor)
      if (!($key % 2)) {
         $suma += $value * 1;
      } else {
         // A los pares se multiplica por dos, si el resultado son dos números se suman entre si,
         // por ejemplo si el resultado es 14, se convierte en 5, o a lo que es igual a 14 se le resta 9
         $suma += $value * 2;
         if ($value * 2 > 9) {
            $suma -= 9;
         }
      }
   }
   
   // La suma se resta a la siguiente decena inmediato superior, por ejemplo si la suma es 62,
   // la decena superior es 70, entonces 70-62 el digito es 8, si es una decena el digito es 0
   return $suma % 10 == 0 ? 0 : 10 - ($suma % 10);
}

echo validaNSS('84937718678');
