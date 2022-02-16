<?php

class User{
        protected $id;
        protected $name;
        protected $surname;
        protected $age;
        protected $vip;
        protected $order;

        private function checkAge($int) 
        {
            if ($int < 18) 
            {
                throw new Exception('Non rientri nei limiti d\'età');
            }
            return $this->age = $int;;
        }

        public function __construct($id, $name, $surname, $age, $vip, $order){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            try 
            {
                $this->checkAge($age);
            } 
            catch (Exception $e) 
            {
                echo  $e->getMessage();
            }
            $this->vip = $vip;
            $this->order = $order;
        }

        

        

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

       

        /**
         * Get the value of surname
         */ 
        public function getSurname()
        {
                return $this->surname;
        }

        /**
         * Set the value of surname
         *
         * @return  self
         */ 
        public function setSurname($surname)
        {
                $this->surname = $surname;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of vip
         */ 
        public function getVip()
        {
                return $this->vip;
        }

        /**
         * Set the value of vip
         *
         * @return  self
         */ 
        public function setVip($vip)
        {
                $this->vip = $vip;

                return $this;
        }

        /**
         * Get the value of order
         */ 
        public function getOrder()
        {
                return $this->order;
        }

        /**
         * Set the value of order
         *
         * @return  self
         */ 
        public function setOrder($order)
        {
                $this->order = $order;

                return $this;
        }

};



?>