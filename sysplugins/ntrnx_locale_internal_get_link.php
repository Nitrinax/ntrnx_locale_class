<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_link extends \NTRNX_LOCALE\ntrnx_locale {  

    static function project(){

        return "<a href=\"" . self::_CLASS_PROJECT_URL .  "\">" . self::_CLASS_PROJECT_URL . "</a>";

    }

    static function source(){

        return "<a href=\"" . self::_CLASS_SOURCE_URL .  "\">" . self::_CLASS_SOURCE_URL . "</a>";

    }

    static function version(){

        return "<a href=\"" . self::_CLASS_VERSION_URL .  "\">" . self::_CLASS_VERSION_URL . "</a>";

    }

    static function update(){

        return "<a href=\"" . self::_CLASS_UPDATE_URL .  "\">" . self::_CLASS_UPDATE_URL . "</a>";

    }

    static function manual(){

        return "<a href=\"" . self::_CLASS_MANUAL_URL .  "\">" . self::_CLASS_MANUAL_URL . "</a>";

    }

}

?>