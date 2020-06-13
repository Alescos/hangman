<?php

if ($argc !=2){
    echo 'Numero incorrecto de parametros';
    exit();
}

$secretWord=$argv[1];
$letterGuessed=[];
echo 'Bienvenido a el juego de Hangman' . PHP_EOL;
echo 'La palabra secreta tiene: '. mb_strlen($secretWord). ' letras'. PHP_EOL;

const maxAttempts=7;
$attempts=0;
do {
echo ' POr favor digite una letra: '. PHP_EOL;
$letter=trim(fgets(STDIN));
$attempts++;
IF (in_array($letter,$letters)){
    $letterGuessed[]=$letter;
    echo 'Correcto: '.get_guessed_word($secretWord). PHP_EOL;
}else{
    echo 'Incorrecto: '. PHP_EOL;
}


} while($attempts<maxAttempts);

function str_split_unicode($str){
    return preg_split("//u",$str,-1, PREG_SPLIT_NO_EMPTY );
}

function get_guessed_word($secretWord,$letterGuessed){
$guessedword='';

foreach ($letters as $letter) {
    if(in_array($letter,$letterGuessed)){
        $guessedword .= $letter;
    }else{
        $guessedword.='_';
    }
    return $guessedword;
}
