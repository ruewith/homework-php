<?php 
//Задача №1

function snake_to_camel(string $str) {
  $words = explode('_', $str);

  if (count($words) > 1) {
    $output = '';
    foreach ($words as $word) {
      $tmp = strtolower($word);
      $output .= ucfirst($tmp);
    }
    return $output;
  } else {
    return $str;
  }
}
print_r(snake_to_camel('this_is_string'));

//Задача №2

function get_filename(string $path) {
    return current(explode(".", substr(strrchr($path, "\/"), 1)));
}
$dir = 'C:\OpenServer\testsite\www\someFile.txt';
print_r(get_filename($dir));

//Задача №3
//Задача №4

$array = [100, 13, 55, 11, 41];
foreach ($array as $elem) {
  $sum = 0;
    do {
        $sum += $elem%10;
    } while ($elem = (int)($elem/10));
    $arrSum[] = $sum;
};
print_r($array);
print_r($arrSum);
asort($arrSum);
print_r($arrSum);

//Задача №5

$str_lower = function($str) {
    return mb_strtolower($str); 
};

$str_upper = function($str) {
    return mb_strtoupper($str); 
};

$str_capital = function($str) {
    return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
};

function str_convert(string $str, callable $func) :string {

    return $func($str);
}

$str = 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Дорогу буквенных грустный наш если возвращайся, языкового своего использовало коварный мир пунктуация ему рукопись за проектах ты переписывается текста ipsum.';
print_r(str_convert($str, $str_lower));
print_r(str_convert($str, $str_upper));
print_r(str_convert($str, $str_capital));