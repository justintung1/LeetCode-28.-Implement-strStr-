<?php
    class Solution {

        /**
         * @param String $haystack
         * @param String $needle
         * @return Integer
         */
        function strStr($haystack, $needle) {
            if(strpos($haystack,$needle)!==false){
                return strpos($haystack,$needle);
            }
            else if($needle==""){
                return 0;
            }
            else{
                return -1;
            }
        }
    }
?>