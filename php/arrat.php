<?php 
$n = [1,"layeb"];
// var_dump($n);
// $n = [ 1,2,3];
// each $n;


$person = [];
array_push($person, 'layeb','rony', 'taniya');
// print_r($person);

$nmae = [];
$subname = ['layeb', 'layeb1', 'layeb3'];
for ($i = 0;$i < count($nmae);$i++){
    $nmae[] = $subname[$i];
    // array_push($nmae,$subname[$i]);
    // print_r($nmae);
}


$language = [];

$framework = ['react', 'laravel', 'go', 'vue'];
foreach( $framework as $item){
//    echo $language[] = $item . PHP_EOL;
    // print_r($language);
}

$name = ' Hlllo ';
echo trim($name);