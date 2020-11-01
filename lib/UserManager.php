<?php

/**
 * Description of UserManager
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
class UserManager {
    use Singleton;
    
    protected function __construct() {
        
    }
    
    /**
     * 
     * @param string $login
     * @param string $pwd
     * @param string $publicName
     * @return bool
     */
    public function subscribe(string $login, string $pwd, string $publicName): bool {
        $query = "insert ignore into `users` "; 
        $query.= "(`login`, `pwd`, `publicName`, `biography`, `subscribe`)";
        $query.= " values(";
        $query.= ":login, :pass, :name, '', now()";
        $query.= ")";
        $params = [
            'login' => $login,
            'pass' => $pwd,
            'name' => $publicName,
        ];
        return Database::getInstance()->noResultQuery($query, $params);
    }
    
    /**
     * 
     * @param string $login
     * @param string $pwd
     * @return bool
     */
    public function login(string $login, string $pwd): bool {
        $returns = false;
        $query = "select * from `users` where `login`=:login and `pwd`=:pass";
        $params = [
            'login' => $login,
            'pass' => $pwd,
        ];
        $exists = Database::getInstance()->singleResultQuery($query, $params);
        if(!empty($exists)) {
            $returns = true;
            Session::getInstance()->login($exists['id']);
        }
        return $returns;
    }
    
    /**
     * 
     * @param int $userId
     * @return array|null
     */
    public function getUserDataById(int $userId): ?array {
        $query = "select `publicName`, `status` from `users` where `id`=:userid";
        $params = [
            'userid' => $userId,
        ];
        return Database::getInstance()->singleResultQuery($query, $params);
    }
}
