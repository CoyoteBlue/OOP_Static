<div style="visibility:hidden;height:0px;display:none;">
<?php
ob_start();
include ('/includes/parentclass.inc.php');
include ('/includes/extendclass.inc.php');
include ('/includes/newclass.inc.php');
include ('/includes/getsetclass.inc.php');
$parentobject = new ParentClass;
$object = new NewClass;
$extendobject = new ExtendClass;
ob_flush();
?>
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OOP - Object Orientated PHP</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <h1>OOP Object Orientated PHP</h1>
      <?php
      echo "<h2>Welcome to Object Orientated PHP</h2><br />";

      echo "<p class='show'>This is the info from a basic class</p>";
      echo $object->info;
      echo "<p class='show'><br />This is the info from a extended class and public</p>";
      echo $parentobject->name;
      echo "<p class='show'><br />This is the info from a extended class and protected(property)</p>";
      echo $extendobject->message();
      echo "<p class='show'><br />This is the info from a parent class and private object(property) but public function</p>";
      echo $parentobject->secret();
      echo "<br /><br />";
      ?>
      <h3>Set and Get in Class with Public property and public methods (Set and Get property)</h3>
      <?php

      echo "<p class='showsetget'>This is Set and Get info from a getset class and public object(property) and public functions Set and Get</p>";

      $propertysetget = new GetSetClass;
      echo "<br />";
      echo $propertysetget; // echo out the __toString function in GetSetClass - need this function to prevent error
      echo "<br />";
      echo $propertysetget -> getProperty();
      echo "<br />";
      $propertysetget -> setNewProperty("Hey look ive just changed the original property - Username: Kevin<br />");
      echo $propertysetget -> getProperty();
      echo "<br /><br />";

      $propertysetget2 = new GetSetClass;
      echo "<br />the property that we just change it to is: - ";
      echo $propertysetget -> getProperty();
      echo "<br />With second object we can set it again to: - ";
      $propertysetget2 -> setNewProperty("A second Object that we can change the property as well - Username: Barry<br />");
      echo $propertysetget2 -> getProperty();

      // Delete class properties - Destructor
      unset($propertysetget);
      unset($propertysetget2);

      echo "<br /><br />";
      echo "<h3>Accessing OOP Static Properties and Methods</h3>";
      echo "<br />";
      include ('/includes/static_class.inc.php');
      echo "The Static Property is = ";
      echo StaticClass::$static;
      echo "<br />";
      echo "The Static Method returns the Static Property = ";
      echo StaticClass::staticMethod();
       ?>
  </body>
</html>
