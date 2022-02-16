<?php

    require_once __DIR__ . "/VIP.php";

    class order extends vip
    {
        protected $id_order;
        protected $product;
        protected $price;
        protected $finalPrice;


        public function __construct($id_order, $id_user, $name, $surname, $age, $level, $product, $price)
        {
            parent::__construct($id_user, $name, $surname, $age, $level);
            $this->id_order = $id_order;
            $this->product = $product;
            $this->order[] = $id_order;
            $this->price = $price;
            $this->finalPrice = $price * ($this->checkDiscount($level) / 100 );
        }


        /**
         * Get the value of id_order
         */ 
        public function getId_order()
        {
                return $this->id_order;
        }

        /**
         * Set the value of id_order
         *
         * @return  self
         */ 
        public function setId_order($id_order)
        {
                $this->id_order = $id_order;

                return $this;
        }

        /**
         * Get the value of product
         */ 
        public function getProduct()
        {
                return $this->product;
        }

        /**
         * Set the value of product
         *
         * @return  self
         */ 
        public function setProduct($product)
        {
                $this->product = $product;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of finalPrice
         */ 
        public function getFinalPrice()
        {
                return $this->finalPrice;
        }

        /**
         * Set the value of finalPrice
         *
         * @return  self
         */ 
        public function setFinalPrice($finalPrice)
        {
                $this->finalPrice = $finalPrice;

                return $this;
        }
    }

?>