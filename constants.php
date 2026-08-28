<?php

// Constants

define('STATUS_PAID', 'paid'); // Define a constant named STATUS_PAID with the value "paid"

echo defined('STATUS_PAID') . '<br>'; // Output: 1 (true) if the constant is defined, otherwise 0 (false)

echo STATUS_PAID . '<br>'; // Output: paid

$pending = 'PENDING';

if (true) {
  // const PENDING = 'PENDING'; // Error: Constants cannot be defined inside a conditional statement in PHP
  // We can use variable in name of constant using define() function
  define('STATUS_' . $pending, $pending); // This is valid because define() can be used inside a conditional statement
}

echo STATUS_PENDING . '<br>'; // Output: PENDING

// Predefined Constants
echo PHP_VERSION . '<br>'; // Output: The current PHP version (e.g., 8.0.3)

// Magic Constants
echo __LINE__ . '<br>'; // Output: The current line number in the file (e.g., 12)