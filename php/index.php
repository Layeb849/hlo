 <?php
    // $a = 10;
    // $b = 20;
    // $c = $a + $b;
    // echo "$c" . '<br>';
    // $name = "bangladeshhhh";
    // // echo strlen("$name" . "<br>");
    // $n = 7;
    // for ($i = 1; $i <= 10; $i++) {

    //     echo ($i . ' * ' . $n . ' = ' . $i * $n . '<br>');
    // }
    // "<br" . "<br";
    // $n = 3;
    // for ($i = 1; $i <= 10; $i++) {

    //     echo ($i . ' * ' . $n . ' = ' . $i * $n . '<br>');
    // }

    // (function () {
    //     echo "anonumas function done" . '<br>';
    // })();

    // function Add($a, $b)
    // {
    //     // $a = 30; $b = 20;
    //     $c = $a + $b;
    //     echo "the sum is : " . $c . '<br>';
    // }
    // Add(30, 20);
    // $x = "12";
    // if (is_numeric($x)) {
    //     echo 'yes its newmeric' . "<br>";
    // } else {
    //     echo "none newmeric";
    // }

    $arr = ["rakib", "sakib", "rohim", "korim", "layeb", "sojib"];
    // print_r($arr);
    // print_r($arr[0]);
    for ($i = 0; $i < count($arr); $i++) {
        echo "$i <br>";
    }
    foreach ($arr as $item) {
        // echo $item . "<br>";
    }
    $arre = ["rakib", "sakib", "rohim", "korim", "layeb"];

    // array_push($arre, "sadik");
    array_pop($arre);
    // array_shift($arre, "layebb");
    // print_r($arre);
    $person = [
        "name" => "Layeb",
        "age" => "22",
        "address" => "magura",
    ];
    foreach ($person as $person_key => $person_value) {
        // echo "$person_key : $person_value <br>";
        echo "$person_key <br> ";
    }

    // combination function
    $name = ["akid", "sakib", "montu", "boltu"];
    $age = ["20", "22", "24", "36"];
    $newarr = array_combine($name, $age);
    // print_r($newarr);
    foreach ($newarr as $name_key => $age_value) {
        echo "$name_key : $age_value <br>";
    }
    $multi = [
        [1, 2, 3, 4],
        [5, 6, 7, 8],
        [9, 10, 11, 22],
    ];
    print_r($multi[1][3] . "<br>");

    $persons = [
        ['name' => 'Hello world'],
        ['age' => 25],
        ['address' => 'Magura']
    ];
    // echo $persons[0]['name'];
    // foreach ($persons as $persons_key =>$persons_value) {
    //     echo "$persons_key : $persons_value <br>";
    // }

    $numbers = [1, 24, 5, 6, 7, 76, 7];
    sort($numbers);
    print_r($numbers);

    // $numbers = [9, 5, 1, 15, 3];
    // sort($numbers);
    // echo ($numbers);

    $str1 = "helloworld";
    echo md5($str1);


    // $str = "Hello";
    // echo md5($str);
