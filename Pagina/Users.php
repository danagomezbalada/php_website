<?php
    class Users
    {
        private $username;
        private $password;
        private $email;
        //Constructor de la classe Users
        public function __construct($username, $password, $email)
        {
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
        }
        public function setUsername($username)
        {
            $this->username = $username;
        }
        public function getUsername()
        {
            return $this->username;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getEmail()
        {
            return $this->email;
        }
    }
?>