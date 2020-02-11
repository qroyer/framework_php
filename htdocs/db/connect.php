<?php
$host="db";
$database="l3";
$user="root";
$mdp="root";

try {
    $conn = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $mdp);
} catch (Exception $e){
    var_dump($e->getMessage());
    die;
}

$query = "select * from toto;";

$number = $conn->query($query)->fetchAll();


foreach ($number as $i) {
    echo $i[0]."\n";
}


echo "Yes !";
