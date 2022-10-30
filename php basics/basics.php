<?php
    echo "Hello, world!";

    $name = "Nevena";

    function greeting() {
        global $name;

        $lastName = "Gadzheva";

        echo "Hello, $name $lastName!";
    }

    greeting();

    function sum($a, $b = 5, $c = 8) {
        $sum = $a + $b + $c;
        echo $sum;
    }

    echo "<br/>";
    sum(5, 9, 13);
    echo "<br/>";
    sum(5, 8);
    echo "<br/>";
    sum(5);
    echo "<br/>";

    $arr = [1, 8, 9, 6];
    $arr[] = 3;
    $arr[] = 7;

    array_push($arr, 9);
    array_unshift($arr, 4);

    print_r($arr);
    echo "<br/>";
    var_dump($arr);

    array_pop($arr);
    echo "<br/>";
    print_r($arr);

    array_shift($arr);
    echo "<br/>";
    print_r($arr);

    echo "<br/>";
    print_r(array_slice($arr, 1, 3));
    echo "<br/>";
    print_r($arr);

    array_splice($arr, 1, 3);
    echo "<br/>";
    print_r($arr);

    array_splice($arr, 1, 0, 6);
    echo "<br/>";
    print_r($arr);

    array_splice($arr, 2, 1, 10);
    echo "<br/>";
    print_r($arr);

    echo "<br/>";
    foreach ($arr as $value) {
        echo $value;
        echo "<br/>";
    }

    $user = [
        "username" => "admin",
        "password" => "password",
        "email" => "test@gmail.com",
        "id" => 1
    ];

    echo "<br/>";

    var_dump($user);

    echo "<br/>";

    foreach ($user as $key => $value) {
        echo "$key: $value";
        echo "<br/>";
    }
?>

