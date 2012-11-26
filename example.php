<?php 

/**
 * @file
 * Example PHP file
 * 
 * File description goes here.
 * 
 * See: guidelines/php.md
 * 
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */

/**
 * Pay attention to:
 *    - comments; single line vs double line; end at column 80
 *    - brackets and new lines in if/for/while/switch statements
 *    - arrays
 *    - single quotes for strings
 *    - double quotes for SQL
 *    - use underscores for function, class and string names; no camel case
 *    - leveling the variable/comment values with spaces is allowed
 */

/**
 * Function title
 * 
 * Short description of what it does.
 * The param, return, access etc. Additional comment properties can be
 * skipped if the function is self explanatory (get_user_name_by_id()) or if
 * function is a hook of another documented function in the system (Drupal/WP).
 * 
 * @param string $arg1
 *    First sample argument.
 *
 * @param string $arg2
 *    Second sample argument.
 *
 * @param string $arg3
 *    Third sample argument.
 *
 * @return string
 *    Sample value.
 */
function sample_function($arg1, $arg2 = NULL, $arg3 = array()) {
  
  /**
   * SQL queries
   */
  // Short
  $query = mysql_query("SELECT * FROM `table` WHERE `status` = 1");
  // Long
  $long_query = mysql_query("SELECT
                              u.`id`,
                              u.`name`,
                              u.`email`
                            FROM
                              `users` u
                            WHERE
                              u.`created` > 123456 AND
                              u.`status` = 1
                            ORDER BY u.`id` ASC
                            LIMIT 1");

  /**
   * Switch
   */
  switch ($arg1) {
    case '1':
      $result = 'one';
      break;

    case '2':
      $result = 'two';
      break;

    default:
      $result = 'three';
      break;
  }

  /**
   * If statement
   */
  if (isset($arg2)) {
    $result = 'Arg 2 is present.';
  }
  else {
    $result = 'Arg 2 is not present.';
  }
  // Shortened
  $result = $arg2 ? 'Arg 2 is present.' : 'Arg 2 is not present.';

  /**
   * Do-while statements
   */
  $count = 1;
  do {
    $count++;
  } while($count <= 100);

  /**
   * Basic calculations and concatenating strings
   */
  $a = 1 + 2 + 3 * (10 + 15);
  $name = 'John';
  $surname = 'Doe';
  $full_name = $name . ' ' . $surname;

  /**
   * Leveling variable names and values with spacing
   */
  $variable_one   = 'Value one';
  $variable_two   = 'Value two';
  $variable_three = 'Value three';
  // Another sample
  $output  = '<ul>';
  $output .= '<li>List item</li>';
  $output .= '</ul>';

  /**
   * Foreach
   */
  foreach ($arg3 as $item) {
    $items[] = $item;
  }

  /**
   * While
   */
  $i = 0;
  while ($i < 10) {
    $i++;
  }

  /**
   * Small details
   */
  // Short array
  $short_array = array('one', 'two', 'three');
  // Long array
  $long_array = array(
    'Sample value one',
    'Sample value two',
    'Sample value three',
    'Sample value four',
    'options' => array(
      'one' => 'One',
      'two' => 'Two',
      'three' => 'Three',
    ),
  );
  // Use print instead of echo
  print $full_name;

}

/**
 * Sample name class
 */
class Name extends Parent {
  
  /**
   * Function description
   * 
   * @access public
   *
   * @param  string $arg1
   *    sample argument
   *
   * @return string
   *    argument wrapped with two dashes
   */
  public function index($arg1) {
    return '--' . $arg1 . '--';
  }

}
