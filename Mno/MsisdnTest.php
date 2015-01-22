<?php
namespace Mno\Test;

require './Msisdn.php';

class MsisdnTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers            \Mno\Msisdn::getPrefixDetail
     */

    public function testGetPrefixDetail()
    {
        $this->assertEquals('Si.mobil, 386, 40734068, SI', \Mno\Msisdn::getMsisdnDetail('+ 38640734068'));
        $this->assertEquals(false, \Mno\Msisdn::getMsisdnDetail(null));
    }


    /**
     * @covers            \Mno\Msisdn::getMsisdnDetail
     */
    public function testGetMsisdnDetail()
    {
        $this->assertEquals(array('SI', 'Si.mobil'), \Mno\Msisdn::getPrefixDetail('040'));
        $this->assertEquals(array('SI', 'Si.mobil'), \Mno\Msisdn::getPrefixDetail('40'));

    }
}
