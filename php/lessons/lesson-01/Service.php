<?php

    abstract class Service {
        public $date;
        private $duration;
        protected $amount;
 
        public function setDuration($time) {
            if ($time < 1) {
                echo "Cannot add a duration less than 1 <br />";
                return;
            }

            $this->duration = $time;
        }
    }

    
    class Cleaning extends Service {
        public function defineAmount($amount) {
            if ($amount < 1) {
                echo "The cost of the cleaning service cannot be less than 1.00€ <br />";
            }

            $this->amount = $amount;
        }
    }


    $cleaningService = new Cleaning();
    $cleaningService->date = "01-01-2001";

    $cleaningService->setDuration(0);
    $cleaningService->setDuration(10);

    $cleaningService->defineAmount(0);
    $cleaningService->defineAmount(10.00);
        
    var_dump($cleaningService);