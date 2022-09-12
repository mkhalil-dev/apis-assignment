<?php
$str = $_GET["str"];
$palindrome;
if ($str == strrev($str)){
    $palindrome = TRUE;
}
else{
    $palindrome = FALSE;
};

if(!$str){
    $results = [
        $str => 'IS EMPTY!'
    ];
}
else if($palindrome)
    $results = [
        $str => 'is a palindrome'
    ];
else{
    $results = [
        $str => 'is NOT a palindrome'
    ];   
}
echo json_encode($results);

?>