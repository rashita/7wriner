<?php
$json = file_get_contents("php://input");

$timestanp = 'backup' .date('Y') . date('m') . date('d'). date('H') . date('i') . date('s') . '.json';
file_put_contents($timestanp , $json);
//print $timestanp;
?>