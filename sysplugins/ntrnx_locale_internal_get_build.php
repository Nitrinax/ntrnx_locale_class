<?php

namespace NTRNX_LOCALE;

/* begin of class */
class get_build extends \NTRNX_LOCALE\ntrnx_locale {

    static function branch(){

        return self::_CLASS_BRANCH;

    }

    static function channel(){

        return self::_CLASS_BUILD_CHANNEL;

    }

}

?>