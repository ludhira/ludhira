<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $b = strrev($word);
        $c = strtolower($b);
        $string_reverse = str_split($c);
        $palin = '';
        foreach($string_reverse as $value){
            $palin.= $value;

    }
    print $palin;
    $d = strtolower($word);
    if ($d == $palin){
        print "<br>Palindrome";
    }else{
        print "<br>Not Palindrome";
    }
}
}

echo Palindrome::isPalindrome('Deleveled');
?>
