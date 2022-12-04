<?php
    $db_name = 'www-tech22';
    $host = 'localhost';
    $db_type = 'mysql';
    $user = 'root';
    $password = '';

    try {
        $connection = new PDO("$db_type:host=$host;dbname=$db_name", $user, $password);

        // $sql = 'CREATE TABLE students (
        //     user_id INTEGER NOT NULL,
        //     fn INTEGER(8) NOT NULL,
        //     first_name VARCHAR(50),
        //     last_name VARCHAR(50),
        //     PRIMARY KEY (fn),
        //     FOREIGN KEY (user_id) REFERENCES users (id)
        // )';

        // $connection->query($sql);

        // $sql = 'INSERT INTO students (user_id, fn, first_name, last_name) VALUES (1, 88888888, "Ivan", "Ivanov");';
        // $connection->query($sql);

        $sql = 'INSERT INTO students (user_id, fn, first_name, last_name) VALUES (?, ?, ?, ?);';
        $prepared = $connection->prepare($sql);

        $sql = 'INSERT INTO users (username, password) VALUES (:username, :password);';
        $named_prepared = $connection->prepare($sql);

        // $named_prepared->execute(['username' => 'user2', 'password' => 'jdjkfjdhfgjkhfd']);
        // $prepared->execute([2, 88888889, 'Student', 'Name']);

        $sql = 'SELECT * FROM students';
        $result = $connection->query($sql);

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo $row['first_name'] . ' ' . $row['last_name'];
            echo '<br/>';
        }

        $result = $connection->query($sql);
        var_dump($result->fetchAll(PDO::FETCH_ASSOC));

        $connection->beginTransaction();

        $sql = 'UPDATE students SET first_name = :first_name WHERE fn = :fn';
        $update_student = $connection->prepare($sql);

        $students = [
            ['first_name' => 'New Student 1', 'fn' => 88888888],
            ['first_name' => 'New Student 2', 'fn' => 88888889]
        ];

        for ($i = 0; $i < 2; $i++) {
            $update_student->execute($students[$i]);
        }

        $connection->commit();
    } catch (PDOException $e) {
        $connection->rollBack();
        echo 'An error occurred';
    }
?>