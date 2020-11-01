<?php

/**
 * Description of UserManager
 *
 * @author baggio-snir <Quentin.Chassel@ac-lille.fr>
 */
abstract class Utils {
    public static function redirect($page): void {
        header('Location:'.$page);
        exit;
    }
}
