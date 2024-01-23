<?php

class Database {

    protected static $_instance = null;

    protected $_conn = null;

    protected $_config = array(
        'database' => 'caju',
        'username' => 'root',
        'password' => '',
        'hostname' => 'localhost'
    );

    protected function __construct() {}

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getConnection() {
        if (is_null($this->_conn)) {
            $db = $this->_config;
            $this->_conn = mysqli_connect($db['hostname'], $db['username'], $db['password']);
            if (!$this->_conn) {
                die("Cannot connect to database server"); 
            }
            if (!mysqli_select_db($this->_conn, $db['database'])) {
                die("Cannot select database");
            }
        }
        return $this->_conn;
    }

    public function query($query) {
        $conn = $this->getConnection();
        return mysqli_query($conn, $query);
    }
}

?>