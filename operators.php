<?php
  $title = "Operators";
  require 'partials/header.php';

  echo '<h1>Operators</h1>';
  $a = 10;
  $b = 5;
  $c = true;
  $d = false;



  /* MATHMATICAL OPERATORS
   * PHP has the following mathmatical operators:
   * -  addition +
   * -  subtraction -
   * -  division /
   * -  multiplication *
   * -  exponents **
   * -  modulus %
   */

   echo '<h2>Mathmatical Operators</h2>';
   echo '<pre>';
   // add $a and $b
   var_dump($a + $b); // returns 15
   echo "\n";
   // subtract $a from $b
   var_dump($a - $b); // returns 5
   echo "\n";
   // multiply $a by $b
   var_dump($a * $b); // returns 50
   echo "\n";
   // divide $a by $b
   var_dump($a / 3); // returns 3.33...
   echo "\n";
   // return remainder of $a / 3
   var_dump($a % 3); // returns 1
   echo "\n";
   // return $a to the third power
   var_dump($a ** 3); // returns 1000
   echo "\n";

   /* COMBINING MATHMATICAL OPERATORS
    * Some mathmatical operators take precedence over
    * others.
    *
    * The order of precedence:
    * - parenthesis and exponents
    * - multiplication and division
    * - addition and subtraction
  */

  /* The following example bites a lot of beginning
   * programmers in the ass. You'd expect var_dump to
   * return 75 instead of 35. But the order of
   * precedence is often not taken into account.
   */

  // return 35
  var_dump(10 + 5 * 5);
  echo "\n";

  /* Use parenthesis to promote any mathmatical operator
   * to the top of the food chain.
  */

  // return 75
  var_dump((10 + 5) * 5);
  echo "\n";
  echo "</pre>";


  /* ASSIGNMENT OPERATORS
   * Assignment operators take the value of a variable,
   * performs a mathematical operation using a second
   * value and returns a result.
  */

  echo "<h2>Assignment Operators</h2>";
  echo "<pre>";
  // add 5 to $a
  // long form: $a = $a + 5;
  $a += 5; // returns 15;
  var_dump($a);
  echo "\n";

  // subtract 5 from $a
  // long from: $a = $a - 5;
  $a -= 5; // returns 10;
  var_dump($a);
  echo "\n";

  // multiply $a by 5
  // long form: $a = $a * 5;
  $a *= 5; // returns 50
  var_dump($a);
  echo "\n";

  // divide $a by 5
  // long form: $a = $a / 5;
  $a /= 5; // returns 10
  var_dump($a);
  echo "\n";

  // bring $a to the second power
  // long form: $a = $a ** 2;
  $a **= 2; // returns 100
  var_dump($a);
  echo "\n";

  // show the remainder of $a divided by 3
  // long form: $a = $a % 3;
  $a %= 3;
  var_dump($a); // returns 1
  echo "\n";
  echo "</pre>";

  echo '<h2>Comparison Operators</h2>';
  echo '<pre>';
  /* COMPARISON OPERATORS
   * Comparison operators are to compare two values for
   * for specific properties. With the exception of tne
   * new spaceship operator (<=>) all comparison
   * operators return a boolean value.
  */

  // Does $a equal '1'?
  var_dump($a == '1'); // returns true
  echo "\n";

  // Does $a NOT equal '1'?
  var_dump($a != '1'); // returns true
  echo "\n";

  // Does $a equal '1' AND is it the same data type?
  var_dump($a === '1'); // returns false
  echo "\n";

  // Does $a NOT equal '1' OR is it NOT the same data type?
  var_dump($a !== '1'); // returns true
  echo "\n";

  // Is $a less than 5?
  var_dump($a < 5); // returns true
  echo "\n";

  // Is $a greater than 5?
  var_dump($a > 5); // returns false
  echo "\n";

  // Is $a greater than or equal to 5?
  var_dump($a >= 5); // returns false
  echo "\n";

  // Is $a less than or equal to 5?
  var_dump($a <= 5); // returns false
  echo "\n";



  /* SPACESHIP OPERATOR RULES
   * - If value on left is less than value on right: -1
   * - If value on left is greater than value on right: 1
   * - If both values are equal: 0
  */

  // Is $a less than or greater than 5?
  var_dump($a <=> 5); // return -1;
  echo "\n";
  echo "</pre>";


  echo "<h2>Logical Operators</h2>";
  echo "<pre>";
  /* LOGICAL OPERATORS
   * Logical operators can be used to combine multiple operators
   * into one expression. They are:
   * - || or
   * - && and
   */

   // Is $a greater than 5 OR does $b equal 5?
   var_dump($a > 5 || $b == 5); // returns true;
   echo "\n";

   // Is $a greater then 5 AND does $b equal 5?
   var_dump($a > 5 && $b == 5); // returns false;
   echo "\n";
   echo "</pre>";

   echo '<h2>Increment / Decrement Operators</h2>';
   echo '<pre>';
   /* INCREMENT / DECREMENT OPERATORS
    * Increment / Decrement Operators are used to increase or
    * decrease a variables value by one. When placed to the left
    * of a variable, the operator adds or subtracts one from the
    * variable before further processing occurs. When placed
    * after the variable, the variable is processed after being
    * incremented or decremented.
    */

    // display $a and add 1
    echo "Before: " . $a++ . ", After: " . $a . "\n";

    // add 1 and display $a
    echo "Before: " . ++$a . ", After: " . $a . "\n";

    // display $a and subtract 1
    echo "Before: " . $a-- . ", After: " . $a . "\n";

    // subtract 1 and display $a
    echo "Before: " . --$a . ", After: " . $a . "\n";
    echo "</pre>";


    /* EXPANDED ORDER OF OPERATIONS
     * - `**`
     * - `++`, `--`
     * - `!`
     * - `*`, `/`, `%`
     * - `+`, `-`
     * - `<`, `<=`, `>`, `>=`
     * - `==`, `=!`, `===`, `!==`
     * - `&&`
     * - `||`
     * - `=`, `+=`, `-=`, `*=`, `/=`, `%=`, `**=`
     */


     echo "<h2>Bringing It All Together</h2>";
     echo "<pre>";
     /* BRINGING IT ALL TOGETHER
      * You can chain operators
    */

    var_dump($a + $b > 5 || $c); // returns true
    echo "\n";

    var_dump(($a + $b) * 2 + 3 * 4); // returns 24
    echo "</pre>";
  require 'partials/footer.html';
?>
