<?php
    class DataBase {
        private $connection;
        private $insertStudent;
        private $insertUser;
        private $updateUser;
        private $updateStudent;
        private $getUser;
        private $getStudent;

        public function __construct() {
            // Read db config from ini file
            $this->connection = new PDO(...)

            init();
        }

        private function init() {
            $insertStudent = 'INSERT INTO students (user_id, fn, first_name, last_name) VALUES (:user_id, :fn, :first_name, :last_name)';
            $this->insertStudent = $this->connection->prepare($insertStudent);
        }

        // $student = ["user_id" => ..., ...]
        public function insertStudent($student) {
            try {
                $this->insertStudent->execute($student);
            } catch (PDOException $e) {
                return ['error' => 'Can not insert student'];
            }
        }
    }
?>