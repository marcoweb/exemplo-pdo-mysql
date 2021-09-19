<?php
namespace ExemploPDOMySQL\Repositories;

class GenerosRepository extends Repository {
    public function select() {
        $std = $this->connection->prepare('SELECT * FROM generos');
        $std->execute();
        return $std->fetchAll(\PDO::FETCH_ASSOC);
    }
}


