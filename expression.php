

<?php 
ini_set('display_errors', 1);

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];


$power = pow($a,3);
$mult = $b*$c;
$div = $a/$b;
$exp = $power+$mult+$div;


$results = [
    $exp => 'exp'
];

echo json_encode($results);

?>