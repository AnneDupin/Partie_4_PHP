<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Exercices PHP / PART 4</h1> 

   <h2>Exercice 12</h2>
   <p><b>Créez un tableau contenant les 12 mois de l'année, affichez "Mars".</b></p>
   
<select>
<?php
$month_names = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
foreach($month_names as $month)
{
echo $month_name[2];
?>
<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
<?php 
}
?>
<?php

function showMonthNames($month_names)
 {
	foreach($month_names as $month)
	{
	echo $month."<br/>";
	}
 }
showMonthNames($month_names);
echo $month[2];

?>

</select>


<h2>Exercice 13</h2>
<p><b>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez ces langages.</b></p>


<?php 
$langage =[1 => 'Javascript', 2 => 'PHP', 3 => 'Python', 4 => 'C++', 5 => 'Ruby'];
echo $langage[1];
foreach($langage as $programing) {
    ?>
<p><?= $programing ?></p>
<?php 
}
?>

<h2>Exercice 14</h2>
<p><b>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez le troisième langage.</b></p>


<?php 
$langage =[1 => 'Javascript', 2 => 'PHP', 3 => 'Python', 4 => 'C++', 5 => 'Ruby'];
var_dump($langage);
echo $langage[3];
?>






</body>
</html>