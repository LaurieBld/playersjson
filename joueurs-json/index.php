<?php
$connect = mysqli_connect("localhost", "root", "root", "xfilespayers"); 
$query = '';
$table_data = '';
$filename = "players.json";
$data = file_get_contents($filename); 
$array = json_decode($data, true);
foreach($array as $row) 
{
 $query .= "INSERT INTO players(pseudo, xp, urlavatar) VALUES ('".$row["pseudo"]."', '".$row["xp"]."', '".$row["urlavatar"]."'); "; 
 $table_data .= '
  <tr>
<td>'.$row["pseudo"].'</td>
<td>'.$row["xp"].'</td>
<td>'.$row["urlavatar"].'</td>
</tr>
 '; 
}
if(mysqli_multi_query($connect, $query)) 
{
echo '<h3> JSON Data importé</h3><br />';
echo '
<table class="table table-bordered">
<tr>
<th width="45%">Pseudo</th>
<th width="10%">Xp</th>
<th width="45%">UrlAvatar</th>
</tr>
';
echo $table_data;  
echo '</table>';
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