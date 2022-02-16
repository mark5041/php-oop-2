<?php

    require_once __DIR__ . "/User.php";

    class vip extends User
    {
        private $level = [
            'standard' => 0,
            'advance' => 20,
            'premium' => 40
        ];

        protected $discount;


        function checkDiscount($string) 
        {
            return $this->discount = $this->level[$string];
        }

        public function __construct($id_user, $name, $surname, $age, $level)
        {
            parent::__construct($id_user, $name, $surname, $age);
            $this->checkDiscount($level);
        }
        


        /**
         * Get the value of discount
         */ 
        public function getDiscount()
        {
                return $this->discount;
        }

        /**
         * Set the value of discount
         *
         * @return  self
         */ 
        public function setDiscount($discount)
        {
                $this->discount = $discount;

                return $this;
        }
    }

?>