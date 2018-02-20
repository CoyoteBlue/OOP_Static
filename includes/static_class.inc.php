<?php

Class StaticClass {
  // Properties
    public $newdata = "I am inside the Static Class";
    public $newerror = "Error message inside Static Class";

    public static $static = 0;

  // Methods
   public function __construct() {
     echo "This Static Class has been initialised";
   }

   public function __toString() {
     echo "toString Method: ";
     return $this ->newerror;
   }

   public static function staticMethod(){
     return self::$static;
   }

   public function setPropertyNew($datanew){
     $this -> data = $datanew;
   }

   public function getPropertyNew(){
     return $this -> newdata;
   }

}
?>
