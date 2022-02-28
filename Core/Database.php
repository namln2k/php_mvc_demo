<?php
class Database {
    // Configurations for database connection
    const HOST_NAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE_NAME = 'php_mvc_demo';
    const PORT = 3306;

    private $connection;

    /**
     * Connect to database
     *
     * @return connection|false Return connection if success, otherwise return false
     */
    protected function connect() {
        $connection = mysqli_connect(self::HOST_NAME, self::USERNAME, self::PASSWORD, self::DATABASE_NAME, self::PORT);

        mysqli_set_charset($connection, 'utf8');

        // Check connection
        if (mysqli_connect_errno() === 0) {
            return $connection;
        }

        return false;
    }
}
