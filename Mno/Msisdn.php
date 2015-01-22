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
     * SI
     * +396 0xx xxx xxx
     * CN
     * +86 1 xx xxxx xxxx
     * EG
     * +20 10 xxxx xxxx    Vodafone
     * +20 11 xxxx xxxx    Etisalat
     * CA
     * NPA-NXX-XXX [2-9][0-9][0-9] [2-9][0-9][0-9] [0-9][0-9][0-9]
     * BR
     * anatel 9xxxx-xxxx
     * AU
     * +61 04 xxxx xxxx
     * @param  string telephone number prefix
     * @return array
     */

    public static function getPrefixDetail($prefix = null)
    {
        //TODO: make a rule array
        $mno = array(
            'SI' => array(
                '386' => array(
                    'Si.mobil' => array('040'),
                    'Telekom' => array('031', '051', '041')),
                'len' => 12),
            'CN' => array(
                '86' => array(
                    'China Unicom' => array('130', '131', '132', '145', '155', '156', '185', '186'),
                    'China Telecom' => array('133', '153', '180', '181', '189')),
                'len' => 11),
            'EG' => array(
                '20' => array(
                    'Vodafone' => array('10'),
                    'Etisalat' => array('11')),
                'len' => 12),
            'CA' => array(
                '1' => array(
                    'Unknown' => array('')),
                'len' => 11),
            'BR' => array(
                '55' => array(
                    'Anatel' => array('9')),
                'len' => 11),
            'AU' => array(
                '61' => array(
                    'Anatel' => array('04')),
                'len' => 12)
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

        return false;
    }
}
