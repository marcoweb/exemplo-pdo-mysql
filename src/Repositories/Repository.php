<?php
namespace ExemploPDOMySQL\Repositories;

use ExemploPDOMySQL\MySQLConnection;

class Repository {
    protected $connection = null;

    public function __construct($connetion = null) {
        if(is_null($connection))
            $connection = new MySQLConnection();
        $this->connection = $connection;
    }
}

