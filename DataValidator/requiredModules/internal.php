<?php
if( !defined('DV_DIR')){
    die("Error: DV_DIR is not defined.");
}
include DV_DIR . '/requiredModules/errorFunctions.php';


function dv_getConfigData(){
    /*
    check for config.json file.
    If the file exist then read and change json to associative array.

    ----return type----
    return type of this function is:
    an associative array for successful execution
    or terminate execution for error in config.json file location.
    */
    if( file_exists( DV_DIR . '/config.json') ){
        $cf = file_get_contents(DV_DIR . '/config.json');
        return json_decode( $cf, true );
    }
    else{
        die("Error: config.json file is missing from its original path. Execution terminated.");
    }   
}

function dv_phpRequirement( $server_php_version ){
    /*
    checking for php version requirement.
    
    ----return type----
    true for server current php version is higher than or equal to required php version
    false for server current php version is lesser than required php version
    */
    if( phpversion() >= $server_php_version ){
        return true;
    }
    else{
        return false;
    }
}

?>