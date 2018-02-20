<?php
Class ParentClass {
  // Properties
  public $name = "Hey There!";

  protected $message = "How are you Today";

  private $more = "You can read this message but you cannot change it - Mr Private";

  //Method
  public function secret(){
    return $this -> more;
  }
}
$parentobject = new ParentClass;

?>
