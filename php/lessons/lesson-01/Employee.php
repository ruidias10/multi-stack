<?php

    interface Balance {
        public function deposit($amount);
        public function raise($amount);
    }
 
    abstract class Person {
        public $name;
        public $phone;
        public $address;
    }


    class Client extends Person implements Balance {
        public $balance;

        function __construct() {
            
        }        

        public function hireEmployee(Employee $cleaningEmployee) {

        }

        public function deposit($amount) {
            $bonus = 1.1;
            $this->balance = $this->balance + ($amount * $bonus);
            echo "$this->name have current balance $this->balance <br />";
        }
        
        public function raise($amount) {
            $rate = 1.3;
            $this->balance = $this->balance - ($amount * $rate);
            echo "$this->name have current balance $this->balance <br />";
        }
    }


    class Employee extends Person implements Balance{
        public $pixKey;
        public $balance;

        function __construct() {
            
        }        

        public function deposit($amount) {
            $this->balance = $this->balance + $amount;
            echo "$this->name have current balance $this->balance <br />";
        }

        public function raise($amount) {
            $this->balance = $this->balance - $amount;
            echo "$this->name have current balance $this->balance <br />";
        }

        public function serveCustomer($clientName) {
            echo "$this->name served the customer $clientName <br />";
        }

        public function evaluateCustomer($clientName, $evaluationNote) {
            echo "The client $clientName was evaluated with a note of $evaluationNote <br />";
        }        
    }


    $client = new Client();
    $client->name = "Alice";
    $client->phone = "+351 123 456 789";
    $client->address = "Av. das Flores, 1576 Porto";

    var_dump($client);

    $client->deposit(100);
    $client->deposit(100);
    $client->raise(100);    


    print "<br /><hr /><br />";    


    $employee = new Employee();
    $employee->name = "Maria";
    $employee->phone = "+351 123 456 789";
    $employee->address = "Av. Central, 1234 Porto";

    var_dump($employee);

    $employee->deposit(100);
    $employee->deposit(100);
    $employee->raise(100);        

    print "<br />";

    $employee->serveCustomer("Raquel");  
    $employee->evaluateCustomer("Raquel", 5); 