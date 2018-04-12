
<?php
error_reporting(E_ALL);
$animals_continents = [
    "Eurasia" => ['rangifer tarandus', 'elephantidae'],
    "North America" => ['vulpes lagopus', 'lemmini'],
    "South America" => ['puma concolor', 'vultur gryphus'],
    "Africa" => ['cercopithecinae', 'panthera leo'],
    "Australia" => ['macropodidae', 'phascolarctos cinereus'],
    "Antarctica" => ['aptenodytes forsteri', 'phocidae',]
];
$double_name = [];
$continent = [];
$first_world = [];
$second_word = [];
echo '<h1>Массив животных через запятую</h1>';
foreach ($animals_continents as $continents_key => $animals) {
    $continent[] = $continents_key;
    echo "<h2>$continents_key</h2>";
    echo $animals[0] . ', ' . $animals[1];
    foreach ($animals as $two) {
        $rows_two = explode(" ", $two);
        if (count($rows_two) == 2) {
            $double_name[] = $two;
            $first_world[] = $rows_two[0];
            $second_word[] = $rows_two[1];
        }
    }
}
echo '<hr>';
echo '<h1>Массив из двух слов</h1>';
foreach ($double_name as $item) {
    echo "$item<br>";
}
echo '<hr>';
shuffle($second_word);
echo '<h1>Выдуманные животные</h1>';
foreach ($second_word as $last) {
    $title = array_shift($continent);
    $first = array_shift($first_world);
    echo "<h2>$title</h2>";
    echo $first . ' ' . $last . '<br>';
}