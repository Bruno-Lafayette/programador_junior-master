<?php

/** O nome do banco */
define('DB_NAME', 'l5_network');

/** nome do host */
define('HOST', 'localhost');

/** Usuario do banco */
define('DB_USER','root');

/** senha do banco */
define('DB_PASSWORD', '');

final class Connect {
    private static $instance;

    private function __construct() {}

    public static function connectDataBase() {
        if (!self::$instance) {
            try {
                self::$instance = new PDO('mysql:dbname='.DB_NAME.';host='.HOST,DB_USER,DB_PASSWORD);
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage());
            }
        }
        return self::$instance;
    }
}
?>


