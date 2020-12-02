<?php

$c = file_get_contents(DV_DIR . '/config.json');
$conf = json_decode($c, true);

foreach( $conf['modules'] as $k => $v ){
    if( !file_exists( DV_DIR . '/modules/' . $v . '.php') ){
        $file_content = '<?php
/*

*/
function ' . $v . '(){

}

?>
';
        file_put_contents( DV_DIR . '/modules/' . $v . '.php', $file_content);
    }
}

?>