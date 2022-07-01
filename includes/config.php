<?php

  /*
    define () 
    -function mean set up constant variable with name 
    define ( name to be choosen, value to be implement )
    
    define () vs defined ()
    - defined use to check constant variable is exist. if exist, return TRUE.

    Reference :-
    https://www.w3schools.com/php/func_misc_define.asp

  */

  define( 'DB_HOST', 'localhost' );           // Set up database host
  define( 'DB_USER', 'root' );                // Set up database user
  define( 'DB_PASS', '' );                    // Set up database password,none password require
  define( 'DB_NAME', 'inventory_system' );    // Set up database name

?>
