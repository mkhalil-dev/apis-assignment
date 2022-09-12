<?php

$datenow = date('y-m-d');
$start = strtotime($datenow);
$end = strtotime('22-12-25');

$days_between = ceil(abs($end - $start) / 86400);
$results = [
    'Days till Christmas:' => $days_between
];

echo json_encode($results);

?>