<?php

//Muuta nämä tiedot oikeiksi
 $connect = new PDO('mysql:host=localhost;dbname=trtkp20a3', 'root', '');
 
$query = "
SELECT * FROM group15_arvostelut
WHERE nakyvyys = '1' 
ORDER BY id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll(); 
$output = '';
 foreach($result as $row)
{
 $output .= ' <panel class="col-sm-5">
 <h3>Nimimerkki: '.$row["nimimerkki"].'</h3>
 <h3> Arvosana: '.$row["arvosana"].'</h3>
 <p>'.$row["kommentti"].'</p>
 
 </panel>
 ';
} 

print $output;


?>
