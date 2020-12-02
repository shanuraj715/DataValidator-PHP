<?php
function minLength( $p, $l ){
    if( (gettype($p) == 'string' or gettype($p) == 'integer') and ( is_numeric($l) ) ){
        if( strlen($p) >= $l ){
            return true;
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