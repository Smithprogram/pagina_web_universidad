<?php
class Validator{

    static function isDNI($cadena){

    if((is_numeric($cadena))&&(strlen($cadena)==8)){
        return true;
        }else{
        return false;
        }

    }
    
    static function isCorreoElectronico($cadena){

        if(filter_var($cadena, FILTER_VALIDATE_EMAIL)){ //https://www.php.net/manual/es/filter.filters.validate.php
            return true;
            }else{
            return false;
            }
    
        }

}
?>