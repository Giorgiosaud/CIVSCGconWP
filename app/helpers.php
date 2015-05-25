<?php
function recortar_palabras($string, $wordsreturned)
    /*  Returns the first $wordsreturned out of $string.  If string
        contains more words than $wordsreturned, the entire string
        is returned.*/
{
    $retval = $string;	//	Just in case of a problem
    $array = explode(" ", $string);
    /*  Already short enough, return the whole thing*/
    if (count($array)<=$wordsreturned)
    {
        $retval = $string;
    }
    /*  Need to chop of some words*/
    else
    {
        array_splice($array, $wordsreturned);
        $retval = implode(" ", $array)." ...";
    }
    return $retval;
}