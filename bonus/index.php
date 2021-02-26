<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>basket</title>
</head>
<body>
  <?php

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


</body>
</html>
