<?php
    require_once "user.php";

    class Student extends User {
        private $fn;

        public function __construct($username, $password, $email, $fn) {
            parent::__construct($username, $password, $email);

            $this->fn = $fn;
        }

        public function studentInfo() {
            return $this->fn . " " . parent::getUsername();
        }
    }
?>