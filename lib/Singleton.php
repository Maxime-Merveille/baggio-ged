<?php

/**
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
trait Singleton {
    protected static $singleton = null;
    
    public static function getInstance(): self {
        if(null === static::$singleton) {
            $cls = get_called_class();
            static::$singleton = new $cls();
        }
        return static::$singleton;
    }
}
