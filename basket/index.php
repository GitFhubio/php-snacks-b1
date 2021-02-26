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
  ]
];

for ($i=0; $i < count($matches) ; $i++) {
  echo $matches[$i]["home"] . ' - ' . $matches[$i]["away"]. ' | ' . $matches[$i]["homePoints"] . ' - ' . $matches[$i]["awayPoints"] . '<br />';
}
  ?>

</body>
</html>
