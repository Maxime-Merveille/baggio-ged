<?php

/**
 * Description of UserManager
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
class SponsorManager {
    use Singleton;
    
    protected function __construct() {
        
    }
    
    /**
     * 
     * @param int $userId
     * @return array
     */
    public function getCodesForSponsor(int $userId): ?array {
        $query = "select * from `sponsoring` where `sponsor`=:userid";
        $params = [
            'userid' => $userId,
        ];
        return Database::getInstance()->multipleResultsQuery($query, $params);
    }
}
