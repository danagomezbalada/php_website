<?php

    class Persona
    {
        private $name;
        private $age;
        private $height;

        //Constructor de la classe Persona
        public function __construct($name, $age, $height)
        {
            $this->name = $name;
            $this->age = $age;
            $this->height = $height;

        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setAge($age)
        {
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function setHeight($height)
        {
            $this->height = $height;
        }

        public function getHeight()
        {
            return $this->height;
        }

    }
/*
    $p = new Persona("Joel", 25, 183);
    echo '<h2>Hola sóc el ' . $p->getName() . '</h2>';
    echo '<h2>Tinc ' . $p->getAge() . ' anys</h2>';
    echo '<h2>Medeixo ' . $p->getHeight() . ' cms</h2>';
*/?>