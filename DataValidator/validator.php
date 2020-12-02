<?php
/*
defining a constant DV_DIR.
DV_DIR stores the absolute path of this library.
*/
define('DV_DIR', str_replace('\\', '/', __DIR__));

/*
including required internal modules of this library.
internal.php contains extra functions for this library.
Thease functions are not useful for php developers but useful for this library only.
*/
include DV_DIR . '/requiredModules/internal.php';

/*
stores an array.
array contains configuration data of this library.
data available from config.php
data type of this variable is array.
*/
$dv_config = dv_getConfigData();

/*
----starting main code----
*/

/*
checking for php requirement. if server php version not meet the requirement
then execution will terminated with printing an error text.
*/
if( !dv_phpRequirement( $dv_config['phpversion']) ){
    die("Your php version" . phpversion() . " is old. Please update your php version to " . $dv_config['phpversion'] . " or higher.");
}
/*
Iterating a foreach loop on all registered modules.
iteration will include all php modules files to this file.
also check for which modules are not available in modules directory.

---- Important ----
library functions will available after this iteration
*/
foreach( $dv_config['modules'] as $k => $fn ){
    if( file_exists( DV_DIR . '/modules/' . $fn . '.php' ) ){
        include DV_DIR . '/modules/' . $fn . '.php';
    }
}

?>