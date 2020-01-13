<?php 
// Задача №1

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        echo $i * $j, ' ';
    };
    echo "<br>";
};
// Задача №2

$x = 2;
$y = 7;
$days = 0;

while ($x <= $y) {
   $x = $x +($x * 0.1);
   $days++;
};

echo "Количество дней - $days <br>";

// Задача №3

$num = 800;
$i = 0;

while ($num >= 50) {
    $num/=2;
    $i++;
} 

echo "Количество итераций - $i <br>";

//Задача №4 

$arr = [
  '1'=> [
      'price' => 10,
      'count' => 2
  ],
  '2'=> [
      'price' => 5,
      'count' => 5
  ],
  '3'=> [
      'price' => 8,
      'count' => 5
  ],
  '4'=> [
      'price' => 12,
      'count' => 4
  ],
  '5'=> [
      'price' => 8,
      'count' => 4
  ],
];

asort($arr);

var_dump($arr);