<?php
    class User {
        private $username;
        private $password;
        private $email;

        public function __construct($username, $password, $email) {
            $this->username = $username;
            $this->setPassword($password);
            $this->email = $email;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setPassword($password) {
            $this->password = $password;
        }
    }
?>