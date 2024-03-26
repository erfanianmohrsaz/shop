<?php
   function Salt( $length = 10) {
    return random_bytes($length);
   }
  // echo Salt();
