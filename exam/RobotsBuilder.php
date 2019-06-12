<?php
    /* С помощью паттерна строитель реализуйте похожую логику как в предыдущем
    задании, а также:
    Метод который добавляет шасси (гусеничное или колесное)
    Метод который добавляет тело робота
    Метод который добавляет голову робота
    Метод который добавляет оружие если это военный робот*/

    interface BuilderInterface
    {
        public function addChassis();

        public function addBody();

        public function addHead();
    }
    interface AddableWeapon
    {
        public function addWeapon();

    }

    class CivRobotsBuilder implements BuilderInterface
    {
        private $robot;

        public function __construct()
        {
            $this->reset();
        }

        public function reset()
        {
            $this->robot = new CivRobot;
        }

        public function addChassis()
        {
            $this->robot->chassis = true;
            return $this;
        }

         public function addBody()
        {
            $this->robot->body = true;
            return $this;
        }

        public function addHead()
        {
            $this->robot->head = true;
            return $this;
        }

        public function getRobot()
        {
            $result = $this->robot;
            $this->reset();
            return $result;
        }
    }

    class MilRobotsBuilder implements BuilderInterface, AddableWeapon
    {

       private $robot;

        public function __construct()
        {
            $this->reset();
        }

        public function reset()
        {
            $this->robot = new MilRobot;
        }

        public function addChassis()
        {
            $this->robot->chassis = true;
            return $this;
        }

         public function addBody()
        {
            $this->robot->body = true;
            return $this;
        }

        public function addHead()
        {
            $this->robot->head = true;
            return $this;
        }

        public function addWeapon()
        {
            $this->robot->weapon = true;
            return $this;
        }

        public function getRobot()
        {
            $result = $this->robot;
            $this->reset();
            return $result;
        }
    }



