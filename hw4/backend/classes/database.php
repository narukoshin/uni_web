<?php
    class Database {
        /**
         * @var PDO
         */
        public $db;
        /**
         * @param $host
         * @param $user
         * @param $password
         * @param $base
         * @return null|PDO
         */
        public function __construct($host, $user, $password, $base) {
            $this->db = new PDO(sprintf("mysql:host=%s;dbname=%s", $host, $base), $user, $password);

            if ($this->db instanceof PDO) {
                return $this->db;
            }
            return null;
        }
    }