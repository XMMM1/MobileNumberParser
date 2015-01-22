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

    public $msisdn = null;

    public function __construct($msisdn)
    {
        $this->msisdn = preg_replace('/\s+/', '', $msisdn);
    }

    /**
     * Parse inserted MSISDN and return data in shape:
     * MNO identifier, country dialling code, subscriber number and country identifier
     *
     * SI
     * +396 0xx xxx xxx
     * /^[+386][40][0-9]{6}$/
     * CN
     * +86 1 x xxx xxx xxx
     * EG
     * +20 10 xx xxx xxx    Vodafone
     * +20 11 xx xxx xxx    Etisalat
     * CA
     * 600-XXX-XXX
     * AR
     * Unknown +54 9 11 xx xxx xxx
     * AU
     * +61 04 xx xxx xxx
     * @param  string telephone number prefix
     * @return array
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

        $mno = array(
            'SI' => array(
                '386' => array(
                    'Si.mobil' => '/^[+]386(40)[0-9]{6}$/',
                    'Telekom' => '/^[+]386(31|41|51)[0-9]{6}$/')),
            'CN' => array(
                '86' => array(
                    'China Unicom' => '/^[+]86(130|131|132|145|155|156|185|186)[0-9]{8}$/',
                    'China Telecom' => '/^[+]86(133|153|180|181|189)[0-9]{8}$/')),
            'EG' => array(
                '20' => array(
                    'Vodafone' => '/^[+]20(10)[0-9]{8}$/',
                    'Etisalat' => '/^[+]20(11)[0-9]{8}$/')),
            'CA' => array(
                '1' => array(
                    'Unknown' => '/^[+]1(600)[0-9]{6}$/')),
            'AR' => array(
                '54' => array(
                    'Unknown' => '/^[+]54(911)[0-9]{8}$/')),
            'AU' => array(
                '61' => array(
                    'Unknown' => '/^[+]61(04)[0-9]{8}$/')
            )
        );

        $data = array();
        foreach ($mno as $country => $cMnos) {
            foreach ($cMnos as $cMnoName => $cPrefix) {
                foreach ($cPrefix as $cMnoName => $regex) {
                    if (preg_match($regex, $this->msisdn)) {
                        $data = array($cMnoName, $country);
                        break;
                    }
                }
                if (!empty($data)) {
                    break;
                }
            }
            if (!empty($data)) {
                break;
            }
        }

        if (!empty($data)) {
            $cPrefix = (array_keys($mno[$data[1]]));
            $num = null;
            if (substr($this->msisdn, 0, strlen(('+' . $cPrefix[0]))) == ('+' . $cPrefix[0])) {
                $num = substr($this->msisdn, strlen('+' . $cPrefix[0]));
            }

            $info = $data[0] . ', ' . $cPrefix[0] . ', ' . $num .
                ', ' . $data[1];

            return $info;
        }

        return false;
    }

}
