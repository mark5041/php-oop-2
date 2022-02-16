<?php

class User {
        protected $id_user;
        protected $name;
        protected $surname;
        protected $age;
        protected $order = [];

        private function checkAge($int) 
        {
            if ($int < 18) 
            {
                throw new Exception('Non rientri nei limiti d\'età');
            }
            return $this->age = $int;;
        }

        public function __construct($id_user, $name, $surname, $age){
            $this->id_user = $id_user;
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
        }

        

        

        /**
         * Get the value of id_user
         */ 
        public function getID_user()
        {
                return $this->id_user;
        }

        /**
         * Set the value of id_user
         *
         * @return  self
         */ 
        public function setID_user($id_user)
        {
                $this->id_user = $id_user;

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
                $this->order[] = $order;

                return $this;
        }

};



?>