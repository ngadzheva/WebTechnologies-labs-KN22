<?php
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: ../signup.html');
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['username']) ? testInput($_POST['username']) : '';
        $password = isset($_POST['password']) ? testInput($_POST['password']) : '';
        $confirmPassword = isset($_POST['confirm-password']) ? testInput($_POST['confirm-password']) : '';
        $email = isset($_POST['email']) ? testInput($_POST['email']) : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : 'Unknown';
        $age = isset($_POST['age']) ? $_POST['age'] : 0;

        if ($username === '') {
            $errors[] = 'Please input username';
        }

        if ($password === '') {
            $errors[] = 'Please input password';
        }

        if ($confirmPassword === '') {
            $errors[] = 'Please input password confirmation';
        }

        if ($password !== $confirmPassword) {
            $errors[] = 'Password does not match Confirm password';
        }

        if ($errors) {
            foreach ($errors as $key => $value) {
                echo $value . "<br/>";
            }
        } else {
            header('Location: ../login.html');
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