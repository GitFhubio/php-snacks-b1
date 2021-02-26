<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>basket</title>
</head>
<body>
<?php

/*Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60*/

$matches = [
  [
    'home'=>'Olimpia Milano',
    'away'=>'Cantu',
    'homePoints'=>55,
    'awayPoints'=>60
  ],
  [
    'home'=>'Los Angeles Lakers',
    'away'=>'San Antonio Spurs',
    'homePoints'=>85,
    'awayPoints'=>89
  ],
  [
    'home'=>'Boston Celtics',
    'away'=>'Utah Jazz',
    'homePoints'=>85,
    'awayPoints'=>84
  ],
  [
    'home'=>'Golden State Warrios',
    'away'=>'Brooklyn Nets',
    'homePoints'=>89,
    'awayPoints'=>90
  ],
  [
    'home'=>'Miami Heat',
    'away'=>'Chicago Bulls',
    'homePoints'=>77,
    'awayPoints'=>76
  ],
  [
    'home'=>'Cleveland Cavaliers',
    'away'=>'Toronto Raptors',
    'homePoints'=>92,
    'awayPoints'=>98
  ]
];

// var_dump($matches);
// echo '<br>';
// print_r($matches);
  ?>
  <ul>
<?php
for ($i=0; $i < count($matches) ; $i++) { ?>
  <li> <?php echo $matches[$i]["home"] . ' - ' . $matches[$i]["away"]. ' | ' . $matches[$i]["homePoints"] . ' - ' . $matches[$i]["awayPoints"] ; ?> </li>
<?php } ?>
</ul>

<ul>

  <h2>prova for each</h2>

<?php
foreach ($matches as $el) { ?>
<li> <?php echo $el["home"] . ' - ' . $el["away"]. ' | ' . $el["homePoints"] . ' - ' . $el["awayPoints"] ; ?> </li>
<?php } ?>
</ul>
<?php
if(array_key_exists('alfredo',$matches[0])){
  echo 'exists';
} else {
  echo 'doesn\' t exist';
}
if(in_array(55, $matches[0])){
  echo 'exists';
    var_dump(in_array (55, $matches[0]));
} else {
  echo 'doesn\' t exist';
}
if(array_search (55, $matches[0])){
  echo 'exists';
  // dà pure chiave prima occorrenza trovata mentre in array è solo booleano
  var_dump(array_search (55, $matches[0]));
} else {
  echo 'doesn\' t exist';
}

$pippo=[4,5,7,8,9];
$pluto=[2,5,7,8,9];
$paperino=array_merge($pippo,$pluto);
print_r($paperino);
$paperino[]='paperina';
array_push($paperino,'paperoga');
print_r($paperino);
function randomArray($min, $max, $nItems)
{
   $newArray = [];
   while (count($newArray) < $nItems) {
       $number = rand($min, $max);
       if (!in_array($number, $newArray)) {
           $newArray[] = $number;
} }
   return $newArray;
}
print_r(randomArray(1, 100, 5));
 ?>

</body>
</html>
