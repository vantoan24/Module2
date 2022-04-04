<?php

namespace Database;

use PDO;
class Model
{
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = '';
    private $db_name = 'inote';

    protected $_db;

    public function __construct()
    {
        $this->_db = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name, $this->db_user, $this->db_pass);
    }
}
