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

    public function __construct()
    {

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

    public static function getMsisdnDetail($msisdn = null)
    {

    }
}
