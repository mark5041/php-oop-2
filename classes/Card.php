<?php

class Card {
        protected $number;
        protected $name;
        protected $expire;
        protected $cvv;
        protected $holder;
        private $availableCard = [
            'Mastercard',
            'Visa',
            'American Express',
        ];

        private function checkAvailable($string) 
        {
            if (!in_array($string, $this->availableCard)) 
            {
                throw new Exception('Carta non supportata');
            }
            return $this->name = $string;;
        }

        public function __construct($number, $name, $expire, $cvv, $holder){
            $this->number = $number;
            try 
            {
                $this->checkAvailable($name);
            } 
            catch (Exception $e) 
            {
                echo  $e->getMessage();
            }
            $this->expire = $expire;
            $this->cvv = $cvv;
            $this->holder = $holder;
        } 

        

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

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
            if(in_array($name, $this->availableCard))
            {
                $this->name = $name;

                return $this;
            }
            else
            {
                die("dati della carta errati");
            }
                
        }

        /**
         * Get the value of expire
         */ 
        public function getExpire()
        {
                return $this->expire;
        }

        /**
         * Set the value of expire
         *
         * @return  self
         */ 
        public function setExpire($expire)
        {
                $this->expire = $expire;

                return $this;
        }

        /**
         * Get the value of cvv
         */ 
        public function getCvv()
        {
                return $this->cvv;
        }

        /**
         * Set the value of cvv
         *
         * @return  self
         */ 
        public function setCvv($cvv)
        {
                $this->cvv = $cvv;

                return $this;
        }

        /**
         * Get the value of holder
         */ 
        public function getHolder()
        {
                return $this->holder;
        }

        /**
         * Set the value of holder
         *
         * @return  self
         */ 
        public function setHolder($holder)
        {
                $this->holder = $holder;

                return $this;
        }
};

// numero della carta e dati correlati presi online. Nel caso dovessero rivelarsi corretti, si prega di segnalare il fatto



?>