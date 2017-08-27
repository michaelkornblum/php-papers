<?php
  $title = "Variables and Data Types";
  require 'partials/header.php';

  echo '<h1>Variables and Data Types</h1>';
  /* RULES FOR INSTANCIATING VARIABLES
   * -  variables must always start with a $
   * -  the second character in variable names must be an
   *    underscore or a letter
   * -  remaining characters in a variable name can be
   *    - uppercase letters
   *    - lowercase letters
   *    - numbers
   * -  do not use special characters in variable names
  */

  /* DATA TYPES
   * - strings
   * - numbers
   * - floats
   * - booleans
  */

  echo '<h2>Instanciating variables</h2>';
  // instanciate variables
  $string = 'The meaning of life, the Universe and Everything is ...';
  $number = 42;
  $float = 3.14;
  $boolean = true;
  $a = 5;
  $b = 6.25;
  $fName = "Michael";

  echo "<pre>";
  // show value and datatype of variables
  var_dump($string);
  echo "\n";
  var_dump($number);
  echo "\n";
  var_dump($float);
  echo "\n";
  var_dump($boolean);
  echo "\n";
  echo "</pre>";

  echo '<h2>Changing variable values</h2>';
  echo '<pre>';
  // show current variable value
  var_dump($a);
  echo "\n";
  // change variable value
  $a = $a + 10; // returns 15
  var_dump($a);
  echo "\n";

  // another example
  var_dump($fName);
  $fName = "Mike";
  echo "\n";
  var_dump($fName);
  echo "\n";
  echo "</pre>";



  /* TYPE JUGGLING
   * Type jugging is a feature in PHP that converts the
   * data types of variables to perform operations. It
   * commonly occurs when performing operations that
   * involve floats and integers. It can also can also
   * occur with strings.
   */

   echo '<h2>Type Juggling</h2>';
   echo '<pre>';
   // convert $a to float for this operation
   var_dump($a + $b);
   echo "\n";

   // convert $a to string for this operation.
   $user = "username: mkornblum, id:" . $a;
   var_dump($user);
   echo "\n";
   echo "</pre>";



   /*
    * ISSET and UNSET
    * ISSET is used to determine if a variable has been
    * set in your script. unset is used to remove a
    * variable from your script.
    */


    echo "<h2>isset and unset</h2>";
    echo '<pre>';
    // return true if variable is set, false if it's not
    var_dump(isset($fName));
    echo "\n";
    // unset variable
    unset($fName);
    // this will return false
    var_dump(isset($fName));
    echo '</pre>';
    require 'partials/footer.html';
?>
