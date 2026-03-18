<?php

function sum(array $numbers) : int
{
  $sum = 0;

  foreach($numbers as $number)
  {
   if (!is_numeric($number)){
       throw new Exception("Not a number");
   }else{
       $sum += $number; 
     
  }
}
  return $sum;
}