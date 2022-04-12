<?php

namespace App;

class Morse
{
    const MORSE = [
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    ];


    public function convertToLetters(string $str): string
    {
        //@todo write your logic here
        //Déclaration d'une variable $result qui retourne une string vide. 
        //Déclaration d'une variable $words. La fonction explode() prend en paramètres le séparateur (3 espaces) et la chaine initiale ($str) retourne un tableau de chaîne de caractères 

        // $result = self::MORSE[$str];
        // $str = '.-- .. .-.. -..';
        // $letters[0] = '.--';
        // $letters[1] = '..';
        // $letters[2] = '.-..';
        // $letters[3] = '-..';
        //test
        $result = "";
        $words = explode('   ', $str); 
        foreach ($words as $word) {
            
            $letters = explode(" ", $word);
            foreach($letters as $letter) {
                $result .= self::MORSE[$letter];
            }
            $result .= " ";
        }
        return trim($result);
    }
}