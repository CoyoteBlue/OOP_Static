<?php

Class GetSetClass {
  // Properties
  public $data = "This is a property(variable)";
  public $error = "This is the Class Called GetSetClass ! ";   // .__CLASS__.

  // Methods

  //Constructor
  public function __construct(){
    echo "This object has been initated - or open connection to database";
  }

  public function __toString(){
    echo "toString method: ";
    return $this -> error;
  }

  public function setNewProperty($newdata){
    $this -> data = $newdata;
  }

  public function getProperty(){
    return $this -> data;
  }

  //Destructor
  public function __destruct(){
    echo "<br/><br />This is the end of the class - or close connection to database";
  }

}

// $propertysetget = new GetSetClass; // You can use it in index.php in body

 ?>
