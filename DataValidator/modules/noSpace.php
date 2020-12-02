<?php

if( !defined('DV_DIR') ){
   die("DV_DIR not defined.");
}

function noSpace( $param ){
	$cls_obj = new NS;
	return $cls_obj -> noSpace( $param );
}

class NS{
	function noSpace( $param ){
		$type = gettype( $param );
		$status = false;
		switch ( $type ){
			case 'integer': 
            return true;
            break;
         case 'string':
            return self::ns_str( $param );
            break;
			case 'array':
            return self::ns_arr( $param );
            break;
			default:
            return false;
		}
	}

	private function ns_str( $str ){
		$k = explode(' ', $str);
		if( count($k) > 1 ){
			return false;
		}
		else{
			return true;
		}
	}

	private function ns_arr( $arr ){
		$status = true;
		foreach( $arr as $k => $v ){
			$sa = explode( ' ', $v );
			if( count( $sa ) > 1 ){
				$status = false;
				break;
			}
		}
		return $status;
	}
}


?>