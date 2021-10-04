<?php

/**
 * Problem Set #3
 * Name: Altina Bejtullahu
 * Time: 4h
 */


class Caesar
{

    public function apply_shift(string $text, int $s): string
    {
        //TO DO
        $result = "";
 
    // traverse text
        for ($i = 0; $i < strlen($text); $i++)
        {
           
            if ((ctype_upper($text[$i]))){
                
                $result = $result.chr((ord($text[$i]) +
                                $s - 65) % 26 + 65);
                
            
        }
 
    // Encrypt Lowercase letters
                else{
                    $result = $result.chr((ord($text[$i]) +
                                    $s - 97) % 26 + 97);
                
                
                }
        }
 
    // Return the resulting string
 return "Working {$text} and the shift for {$s} and caesar cipher is: {$result}";
    }


}
$test = new Caesar();
var_dump($test->apply_shift('Star Labs', 3));