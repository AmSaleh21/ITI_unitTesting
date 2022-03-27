<?php
function factorial($number) {
  if (!is_numeric($number) || $number === false || $number < 0 || is_double($number)) {
    return null;
  }
  if ($number === 1 || $number === 0) {
    return 1;
  }
  return $number * factorial( $number - 1 );
}

function factorialNoRecursion($number)
{
  $factorialResult = 1;
  if(is_int($number) && $number >= 0){
    if($number > 1){
      for($i=2; $i<=$number; $i++){
         $factorialResult *= $i;
        }
        return $factorialResult;
      }else{
        return 1;
      }
    }else{
      return null;
  }
}

echo factorialNoRecursion(0);