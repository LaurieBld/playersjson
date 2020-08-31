<?php
$host = "localhost"; $db_name = "xfilespayers"; $username = "root"; $password = "root";

try {
    $conn = new PDO("mysql:host=".$host.";dbname=".$db_name, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$json = file_get_contents('json/players.json');
$obj = json_decode($json, TRUE);

$stmt = $conn->prepare("INSERT INTO players (players_id,value,pseudo) VALUES (:players_id,:value,:xp");

foreach($obj['players'] as $key => $index) {
    $players_id = $key;
    $pseudo = $index['pseudo'];
    $xp = $index['xp'];

    $stmt->bindparam(":players_id", $item_id);
    $stmt->bindparam(":pseudo", $pseudo);
    $stmt->bindparam(":xp", $xp); 
    $stmt->execute();
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <title>X-Files players</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body id="body">
<h2>Lecture du fichier players.json</h2>
<body>
 <div id="myData"></div>
</body>

<script src="script.js">
</script>

</body>

</html>