<?php

namespace Mno;

/**
 *
 * @package    Mno
 * @author     Matej Murn <matej.murn@gmail.com>
 * @copyright  Matej Murn <matej.murn@gmail.com>
 */

class Msisdn
{
    var $msisdn;

    public function __construct($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    /**
     * Function getPrefixDetail
     * Get prefix MNO and country
     *
     * @param  string telephone number prefix
     * @return array
     */

    public static function getPrefixDetail($prefix = null)
    {
        $mno = array('SI' => array('386' => array('Si.mobil' => '040', 'Tus mobil' => '070')));

        foreach ($mno as $country => $mnoProvider) {
            foreach ($mnoProvider as $name => $mnoPrefix) {
                if (strpos($mnoPrefix, $prefix) !== false) {
                    return array($country, $name);
                }
            }
        }

        return false;
    }

    /**
     * Parse inserted MSISDN and return data in shape:
     * MNO identifier, country dialling code, subscriber number and country identifier
     *
     * Example:
     * Input: + 38640123456
     * Output: si.mobil, 386, 40123456, SI
     *
     * @param  string msisdn number
     * @return info string about inserted $msisdn
     */

    public function getMsisdnDetail()
    {
        if ($this->msisdn === null) {
            return false;
        }
        $msisdn = preg_replace('/\s+/', '', $this->msisdn);
        $msisdn = substr($msisdn, 1, strlen($msisdn));
        $splitMsisdn = str_split($msisdn, 3);
        $tmp = Msisdn::getPrefixDetail(substr($msisdn, 3, 2));

        if ($tmp !== false) {
            $info = $tmp[1] . ', ' . $splitMsisdn[0] . ', ' . $splitMsisdn[1] . $splitMsisdn[2] . $splitMsisdn[3] .
                ', ' . $tmp[0];

            return $info;
        }

        return null;
    }
}
