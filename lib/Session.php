<?php

/**
 * Description of Session
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
class Session {
    use Singleton;
    const SESSIONKEY = 'sesskey';
    
    protected function __construct() {
        session_start();
        if(empty($_SESSION)
                || !array_key_exists(static::SESSIONKEY, $_SESSION)) {
            $_SESSION[static::SESSIONKEY] = [
                'logged' => false,
                'user' => null,
                'data' => [],
            ];
        }
    }
    
    public function login(int $userId): self {
        $_SESSION[static::SESSIONKEY]['logged'] = true;
        $_SESSION[static::SESSIONKEY]['user'] = $userId;
        return $this;
    }
    
    public function logout(): self {
        $_SESSION[static::SESSIONKEY]['logged'] = false;
        $_SESSION[static::SESSIONKEY]['user'] = null;
        return $this;
    }
    
    /**
     * 
     * @return bool
     */
    public function isLogged(): bool {
        return !empty($_SESSION[static::SESSIONKEY]['logged']);
    }
    
    /**
     * 
     * @return int|null
     */
    public function getLoggedUser(): ?int {
        return $_SESSION[static::SESSIONKEY]['user'];
    }
    
    /**
     * 
     * @param string $key
     * @return bool
     */
    public function hasData(string $key): bool {
        return array_key_exists($key, $_SESSION[static::SESSIONKEY]['data']);
    }
    
    /**
     * 
     * @param string $key
     * @param type $def
     * @return mixed
     */
    public function getData(string $key, $def = null) {
        return $this->hasData($key)? $_SESSION[static::SESSIONKEY]['data'][$key]:$def;
    }
    
    /**
     * 
     * @param string $key
     * @param type $value
     * @return Session
     */
    public function setData(string $key, $value): self {
        $_SESSION[static::SESSIONKEY]['data'][$key] = $value;
        return $this;
    }
    
    /**
     * 
     * @param string $key
     * @return Session
     */
    public function delData(string $key): self {
        if($this->hasData($key)) {
            unset($_SESSION[static::SESSIONKEY]['data'][$key]);
        }
        return $this;
    }
}
