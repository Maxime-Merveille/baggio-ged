<?php

/**
 * Description of UserManager
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
class Database {
    use Singleton;
    
    protected ?PDO $connection = null;
    
    protected function __construct() {
        $this->connection = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB, MYSQL_USER, MYSQL_PWD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }
    
    /**
     * 
     * @return \PDO
     */
    public function getConnection(): PDO {
        return $this->connection;
    }
    
    /**
     * 
     * @param string $sqlQuery
     * @param array $parameters
     * @return array|null
     */
    public function multipleResultsQuery(string $sqlQuery, array $parameters): ?array {
        $returns = null;
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->execute($parameters);
        $returns = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $returns;
    }
    
    /**
     * 
     * @param string $sqlQuery
     * @param array $parameters
     * @return array|null
     */
    public function singleResultQuery(string $sqlQuery, array $parameters): ?array {
        $returns = null;
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->execute($parameters);
        if($stmt->rowCount()) {
            $returns = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return $returns;
    }
    
    /**
     * 
     * @param string $sqlQuery
     * @param array $parameters
     * @return bool
     */
    public function noResultQuery(string $sqlQuery, array $parameters): bool {
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->execute($parameters);
        return (0 < $stmt->rowCount());
    }
}
