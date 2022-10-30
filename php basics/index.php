<?php
    require_once "user.php";
    require_once "student.php";

    $user = new User("ivgerves", "adfdsfds", "ivgerves@gmail.com");
    echo $user->getUsername();
    echo "<br/>";

    $student = new Student("ivgerves", "adfdsfds", "ivgerves@gmail.com", 88888);
    echo $student->studentInfo();
?>