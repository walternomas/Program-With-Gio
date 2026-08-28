<?php

// Constants

define('STATUS_PAID', 'paid'); // Define a constant named STATUS_PAID with the value "paid"

echo defined('STATUS_PAID'); // Output: 1 (true, since the constant is defined)

echo STATUS_PAID; // Output: paid

if (true) {
  // const FOO = 'bar'; // Error: Constants cannot be defined inside a conditional statement in PHP
  define('STATUS_PENDING', 'pending'); 
}