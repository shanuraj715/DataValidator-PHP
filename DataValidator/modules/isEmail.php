<?php

/*
accepts 1 and 2 paramets.
2nd parameter is optional.
1st parameter is the email and 2nd parameter is to check the domain.
if email must contain a particular domain then paas the domain name in the second parameter.

---- example ----
isEmail('xyz@example.com');
isEmail('xyz@example.com', 'example.com'); // true
isEmail('xyz@example.com', 'gmail.com'); // false

*/
function isEmail(){
    $num_a = func_num_args();
    $args = func_get_args();

    if( $num_a == 1 ){
        return filter_var( $args[0], FILTER_VALIDATE_EMAIL ) ? true : false;
    }
    elseif( $num_a == 2 ){
        $a = explode( '@', $args[0] );
        if( end($a) == $args[1]){
            return filter_var( $args[0], FILTER_VALIDATE_EMAIL ) ? true : false;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
     
}

?>