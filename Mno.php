<?php

namespace  Mno;

class MSDN {

    public function __construct() {
        
    }

    public function MSDN() {
        
    }

    /*
     * Function getPrefixDetail
     * Get prefix MNO and country
     * 
     * @param string telephone number prefix
     * @return array
     */

    static function getPrefixDetail($prefix = null) {
        $mno = array('SI' => array('Si.mobil' => '040', 'Tusmobil' => '070'),
            'RU' => array('Simobil' => '040', 'Tusmobil' => '070'),
            'Ri' => array('Simobil' => '040', 'Tusmobil' => '070'),
            'si' => array('Simobil' => '040', 'Tusmobil' => '070'),
            'ci' => array('Simobil' => '040', 'Tusmobil' => '070'),
            'ki' => array('Simobil' => '040', 'Tusmobil' => '070'),
            'fw' => array('Simobil' => '040', 'Tusmobil' => '070')
        );
        foreach ($mno as $country => $mnoProvider) {
            foreach ($mnoProvider as $name => $mnoPrefix) {
                if (strpos($mnoPrefix, $prefix) !== false) {
                    return array($country, $name);
                }
            }
        }

        return false;
    }


}
