<?php

namespace Tasty\Util;

/**
 * Some utility methods.
 */
final class Util {

    const SYMBOL_PREFIX = "TASTY_";

    private function __construct() {
        
    }

    /**
     * This function should be called first in any PHP page receiving a HTTP request.
     */
    public static function initRequest() {
        if (session_id() === '') {
            \session_start();
        }

        \Flight::path('classes');

        \Flight::map('executeAction',
                    function($executor, $params = NULL) {
            $executor->execute($params);
        });

        self::defineHttpParams();
    }

    private static function defineHttpParams() {
        self::defineHttpParam('AUTHOR_KEY', 'author');
        self::defineHttpParam('MSG_KEY', 'message');
        self::defineHttpParam('USER_KEY', 'username');
        self::defineHttpParam('PW_KEY', 'password');
        self::defineHttpParam('EDIT_KEY', 'edit');
        self::defineHttpParam('DELETE_KEY', 'delete');
        self::defineHttpParam('newUsername_KEY', 'newUsername');
        self::defineHttpParam('newComment_KEY', 'newComment');
        self::defineHttpParam('NICKNAME_KEY', 'nickname');
        self::defineHttpParam('ENTRY_KEY', 'entry');
        self::defineHttpParam('ID_KEY', 'id');
    }

    private static function defineHttpParam($param, $value) {
        define(self::SYMBOL_PREFIX . $param, $value);
    }

}
