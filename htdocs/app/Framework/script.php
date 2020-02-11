<?php
$host = "127.0.0.1";
$database = "L3";
$user = "masterinfo";
$mdp = "toto";

try {
    $conn = new PDO("mysql:host=" . $host . ";dbname=" . $database, $user, $mdp);
} catch (Exception $e){
    var_dump($e->getMessage());
    die;
}

$query1 = "INSERT INTO toto(tutu, name) VALUES(1, 'TITI');";

$number = $conn->exec($query1);

echo $number . "\n";

$query2 = "SELECT * FROM toto;";

$select = $conn->query($query2)->fetchAll();

foreach ($select as $s){
    echo $s["id"] . " - " . $s["tutu"] . " - " . $s["name"] . "\n";
}

$query3 = "DELETE FROM toto WHERE name = 'TITI' AND tutu = 1;";

$number = $conn->exec($query3);

echo $number . "\n";

$select = $conn->query($query2)->fetchAll();

foreach ($select as $s){
    echo $s["id"] . " - " . $s["tutu"] . " - " . $s["name"] . "\n";
}

$query4 = "SELECT tutu FROM toto WHERE name = 'OSKOUR';";

$tutu = $conn->query($query4)->fetchAll();

foreach ($tutu as $t){
    $oskour = $t["tutu"];
}

$oskour = $oskour + 1;

$query5 = "UPDATE toto SET tutu = ". $oskour . " WHERE name = 'OSKOUR';";

$number = $conn->exec($query5);

echo $number . "\n";

$select = $conn->query($query2)->fetchAll();

foreach ($select as $s){
    echo $s["id"] . " - " . $s["tutu"] . " - " . $s["name"] . "\n";
}
