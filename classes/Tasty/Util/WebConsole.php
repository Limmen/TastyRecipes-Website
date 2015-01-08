<?php

namespace Tasty\Util;

/** * *************************************************************
 * Class used to log value of variable, array on Browser console.
 * author: Tousif Khan     
 * Downloaded from http://www.techzoo.org/web-programming/debugging-php-in-browsers-javascript-console.html
 * ************************************************************** */
final class WebConsole {

    private function __construct($param) {
        
    }

    private static function write($data, $type = 'info') {
        $method_types = array('error', 'info', 'log', 'warn');
        $msg_type = '';
        if (in_array($type, $method_types)) {
            $msg_type = sprintf("console.%s", $type);
        } else {
            $msg_type = sprintf("console.%s", 'info');
        }

        if (is_array($data)) {
            echo("<script>$msg_type('" . implode(', ', $data) . "');</script>");
        } else {
            echo("<script>$msg_type('" . $data . "');</script>");
        }
    }

    public static function info($data) {
        self::write($data);
    }

    public static function error($data) {
        self::write($data, 'error');
    }

    public static function log($data) {
        self::write($data, 'log');
    }

    public static function warn($data) {
        self::write($data, 'warn');
    }

}
