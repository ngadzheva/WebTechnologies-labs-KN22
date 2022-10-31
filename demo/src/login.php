<?php
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: ../login.html');
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['username']) ? testInput($_POST['username']) : '';
        $password = isset($_POST['password']) ? testInput($_POST['password']) : '';

        if ($username === '') {
            $errors[] = 'Please input username';
        }

        if ($password === '') {
            $errors[] = 'Please input password';
        }

        if ($errors) {
            foreach ($errors as $key => $value) {
                echo $value . "<br/>";
            }
        } else {
            header('Location: ../dashboard.html');
        }
    } else {
        echo "Invalid request";
    }

    function testInput($input) {
        $input = trim($input);
        $input = htmlspecialchars($input);

        return $input;
    }
?>