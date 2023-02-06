<?php if ( ! defined('BASEPATH')) exit('No direct script access 
allowed');

if(!function_exists('display_money')){
    function display_money($m){
        echo $m.' 000';    
    }
}


?>