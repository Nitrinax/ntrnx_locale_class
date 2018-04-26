<?php

class ntrnx_locale_autoloader {

    private $namespace;
    
    public function __construct($namespace = null) { $this->namespace = $namespace; }

    public static function register() {
        spl_autoload_register('ntrnx_locale_autoloader::autoload');
    }

    public static function autoload ($class_name) {

        //echo "***** className : " . $class_name . "<br/>";

        /* set up vars from consts */
        $autoloader_namespace = \NTRNX_LOCALE\NLOCCC_AUTOLOADER_NAMESPACE;
        //echo "***** autoloader_namespace : " . $autoloader_namespace . "<br/>";

        $autoloader_file_dir = \NTRNX_LOCALE\NLOCCC_AUTOLOADER_FILE_DIR;
        //echo "***** autoloader_file_dir : " . $autoloader_file_dir . "<br/>";

        $autoloader_file_suffix = \NTRNX_LOCALE\NLOCCC_AUTOLOADER_FILE_SUFFIX;
        //echo "***** autoloader_file_suffix : " . $autoloader_file_suffix . "<br/>";

        $autoloader_file_part = strtolower(substr($autoloader_namespace, 0)) . "_";
        //echo "***** autoloader_file_part : " . $autoloader_file_part . "<br/>";
        
        $autoloader_function_part = \NTRNX_LOCALE\NLOCCC_AUTOLOADER_FUNCTION_PART . "_";
        //echo "***** autoloader_function_part : " . $autoloader_function_part . "<br/>";

        $autoloader_internal_part = \NTRNX_LOCALE\NLOCCC_AUTOLOADER_INTERNAL_PART . "_";
        //echo "***** autoloader_internal_part : " . $autoloader_internal_part . "<br/>";        

        /* check if class name defined in namespace */
        if (strstr($class_name, $autoloader_namespace) != FALSE) {

            /* extract class part from class name */
            $class_part = substr($class_name, strpos($class_name, $autoloader_namespace) + strlen($autoloader_namespace) +1);
            //echo "***** class_part : " . $class_part . "<br/>";
           
            $function_file = $autoloader_file_dir . $autoloader_file_part . $autoloader_function_part . $class_part . $autoloader_file_suffix;
            //echo "***** function_file : " . $function_file . "<br/>";
            $internal_file = $autoloader_file_dir . $autoloader_file_part . $autoloader_internal_part . $class_part . $autoloader_file_suffix;
            //echo "***** internal_file : " . $internal_file . "<br/>";

            if (file_exists($function_file)) {

                $filename = $function_file;

                /* include file */
                include_once ($filename);

                /* check if class exists */
                if (class_exists($class_name)) {

                    return TRUE;

                } else {

                    echo "class " . $class_name . " not exists<br/>";

                }

            } elseif (file_exists($internal_file)) {
                
                $filename = $internal_file;
                
                /* include file */
                include_once ($filename);

                /* check if class exists */
                if (class_exists($class_name)) {

                    return TRUE;

                } else {

                    echo "class " . $class_name . " not exists<br/>";

                }

            } else {

                echo "file " . $filename . " not exists<br/>";

            }            

            return FALSE;

        }

    }

}

?>