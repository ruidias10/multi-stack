<?php

    trait Helpers {
        public function slug(): string {
            if (!property_exists($this, "name")) {
                throw new RuntimeException("Name attribute is missing");
            }
 
            return strtolower(
                preg_replace('/[^A-Za-z0-9-]+/', '-', $this->name)
              );            
        }
    }


    class School {
        use Helpers;

        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }


    class Course {
        use Helpers;

        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }    


    $school = new School("Escola C+S Quinta do Conde");
    var_dump($school);
    var_dump($school->slug());


    print "<br /><hr /><br />";    

    $course = new Course("Curso de PHP");
    var_dump($course);
    var_dump($course->slug());