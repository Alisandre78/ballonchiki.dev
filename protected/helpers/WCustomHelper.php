<?php
class WCustomHelper{
	
	public static function FormatData($data, $function = 'print_r', $pre = true) {
		echo "<pre>";
		$function( $data );
		echo "</pre>";
	}
        
        public static function IsWindowsOS() {
                if ( preg_match('/win/ium', PHP_OS) ) {
                        return true;
                } return false;                
        }
        
        public static function getRandDate() {
                $time =  '13'.rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9);
                return date('Y-m-d h:i:s', $time);
        }
        
        public static function getBaseUrl() {
                return Yii::app()->getBaseUrl(1);
        }
}