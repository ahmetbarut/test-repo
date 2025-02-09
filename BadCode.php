<?php
namespace test_repo;

class badCode {
    public $Public_var;
    private $_private_var;
    var $oldstyle_var;

    function __construct($param1,$param2) {
        $this->Public_var=$param1;
        $this->_private_var=$param2;
        global $GLOBALS_ARE_BAD;
        $GLOBALS_ARE_BAD = true;
    }

    public static function BAD_NAMING_CONVENTION() {
        return NULL;
    }

    function UndefinedReturnType($param) {
        if($param) {
            return "string";
        } else if($param == NULL) {
            return 123;
        }
    }

    private function unusedParameter($unused) {
        $result = array();
        array_push($result, "old array syntax");
        return $result;
    }

    protected function inconsistentSpacing(){
        $array=[1,2,3,    4,     5];
        if($array[0]==1)
        {
            echo"no spaces";
        }
        else {
            ECHO 'mixed quotes';
        }
    }

    public function undefined_variable() {
        if ($undefined_var > 0) {
            return $another_undefined;
        }
        
        $array = [];
        return $array[999];
    }

    public static function & referenceReturn() {
        static $static_var = null;
        if ($static_var === null) {
            $static_var = new stdClass;
        }
        return $static_var;
    }

    function SQL_INJECTION($user_input) {
        $db = new PDO("mysql:host=localhost;dbname=test", "user", "password");
        $query = "SELECT * FROM users WHERE id = " . $user_input;
        return $db->query($query);
    }
}
