<?php

namespace Mno\Test;

class MsisdnTest extends \PHPUnit_Framework_TestCase
{
    public function testErrorGetMsisdnDetail()
    {
        include dirname(__FILE__) . '/../Msisdn.php';

        $msi = new \Mno\Msisdn('+ 123');
        $this->assertEquals('Error: msisdn not valid ', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ asdgasd');
        $this->assertEquals('Error: msisdn not valid ', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 12341asdgasd');
        $this->assertEquals('Error: msisdn not valid ', $msi->getMsisdnDetail());
    }

    /**
     * @covers \Mno\Msisdn::prepareMsisdn
     */
    public function testPrepareMsisdn()
    {
        $msi = new \Mno\Msisdn();
        $this->assertEquals('+38640734068', $msi->prepareMsisdn('+38640734068'));
        $msi = new \Mno\Msisdn();
        $this->assertEquals('+38640734068', $msi->prepareMsisdn('+ 38640734068'));
    }

    /**
     * @covers            \Mno\Msisdn::getMsisdnDetail
     */
    public function testValidGetMsisdnDetail()
    {
//        include dirname(__FILE__) . '/../Msisdn.php';
        $msi = new \Mno\Msisdn('+38640734068');
        $this->assertEquals('+38640734068', $msi->msisdn);
        $msi = new \Mno\Msisdn('+38640734068');
        $this->assertEquals('Si.mobil, 386, 40734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 38640734068');
        $this->assertEquals('Si.mobil, 386, 40734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+38631734068');
        $this->assertEquals('Telekom, 386, 31734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+38641734068');
        $this->assertEquals('Telekom, 386, 41734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+38651734068');
        $this->assertEquals('Telekom, 386, 51734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 38631734068');
        $this->assertEquals('Telekom, 386, 31734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 38641734068');
        $this->assertEquals('Telekom, 386, 41734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 38651734068');
        $this->assertEquals('Telekom, 386, 51734068, SI', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8613011111111');
        $this->assertEquals('China Unicom, 86, 13011111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8613111111111');
        $this->assertEquals('China Unicom, 86, 13111111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8613211111111');
        $this->assertEquals('China Unicom, 86, 13211111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8614511111111');
        $this->assertEquals('China Unicom, 86, 14511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8615511111111');
        $this->assertEquals('China Unicom, 86, 15511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8615611111111');
        $this->assertEquals('China Unicom, 86, 15611111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8618511111111');
        $this->assertEquals('China Unicom, 86, 18511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8618611111111');
        $this->assertEquals('China Unicom, 86, 18611111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8613011111111');
        $this->assertEquals('China Unicom, 86, 13011111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8613111111111');
        $this->assertEquals('China Unicom, 86, 13111111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8613211111111');
        $this->assertEquals('China Unicom, 86, 13211111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8614511111111');
        $this->assertEquals('China Unicom, 86, 14511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8615511111111');
        $this->assertEquals('China Unicom, 86, 15511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8615611111111');
        $this->assertEquals('China Unicom, 86, 15611111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8618511111111');
        $this->assertEquals('China Unicom, 86, 18511111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8618611111111');
        $this->assertEquals('China Unicom, 86, 18611111111, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8613322222222');
        $this->assertEquals('China Telecom, 86, 13322222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8615322222222');
        $this->assertEquals('China Telecom, 86, 15322222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8618022222222');
        $this->assertEquals('China Telecom, 86, 18022222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8618122222222');
        $this->assertEquals('China Telecom, 86, 18122222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8618922222222');
        $this->assertEquals('China Telecom, 86, 18922222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8613322222222');
        $this->assertEquals('China Telecom, 86, 13322222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8615322222222');
        $this->assertEquals('China Telecom, 86, 15322222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8618022222222');
        $this->assertEquals('China Telecom, 86, 18022222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8618122222222');
        $this->assertEquals('China Telecom, 86, 18122222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 8618922222222');
        $this->assertEquals('China Telecom, 86, 18922222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+1600256489');
        $this->assertEquals('Unknown, 1, 600256489, CA', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 1600256489');
        $this->assertEquals('Unknown, 1, 600256489, CA', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+8615322222222');
        $this->assertEquals('China Telecom, 86, 15322222222, CN', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+5491125648078');
        $this->assertEquals('Unknown, 54, 91125648078, AR', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 5491125648078');
        $this->assertEquals('Unknown, 54, 91125648078, AR', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+610412365897');
        $this->assertEquals('Unknown, 61, 0412365897, AU', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 610412365897');
        $this->assertEquals('Unknown, 61, 0412365897, AU', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+201011236548');
        $this->assertEquals('Vodafone, 20, 1011236548, EG', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+201111236548');
        $this->assertEquals('Etisalat, 20, 1111236548, EG', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 201011236548');
        $this->assertEquals('Vodafone, 20, 1011236548, EG', $msi->getMsisdnDetail());
        $msi = new \Mno\Msisdn('+ 201111236548');
        $this->assertEquals('Etisalat, 20, 1111236548, EG', $msi->getMsisdnDetail());
    }
}
