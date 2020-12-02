<?php

function strContains( $sub_str, $string ){
    $a = explode( $sub_str, $string );
    if( count( $a ) > 1 ){
        return true;
    }
    else{
        return false;
    }
}

?>