<?php
//function for creat Salt and use in another file 
   function selectsalt( $length = 10) {

    return random_bytes($length);
   }
  // echo Salt();
