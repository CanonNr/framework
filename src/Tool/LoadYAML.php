<?php
namespace Canon\Framework\Tool;

class LoadYAML
{
    private $_settings = [];

    function YAMLToArray($var) {
        $var = explode ( '.', $var );
        $result = $this->_settings;
        foreach ( $var as $key ) {
            if (! isset ( $result [$key] )) {
                return false;
            }
            $result = $result [$key];
        }
        return $result;
    }
}