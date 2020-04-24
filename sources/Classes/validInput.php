<?php
    Class Input
    { 
        public static  $error = false;
       
        //reference:https://supunkavinda.blog/php/input-validation-with-php

        public static function check($arr, $on = false) 
        {
            if ($on === false) 
            {
                $on = $_REQUEST;
            }
        }
            
        public static function string($val) 
        {
           
            $val = trim(htmlspecialchars($val));
            return $val;
        }
        public static function email($val) {
            $val = filter_var($val, FILTER_VALIDATE_EMAIL);
         
            return $val;
        }
            
        public static function url($val) {
            $val = filter_var($val, FILTER_VALIDATE_URL);
           
            return $val;
        }

    }    
?>