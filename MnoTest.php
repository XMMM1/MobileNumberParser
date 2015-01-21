<?php

class MnoTest extends Mno\MSDN
{
    public function testGetPrefixDetail()
    {
        $this->assertEquals('Si.mobil, 386, 40734068a, SI', Mno\MSDN::getMsisdnDetail('+ 38640743068'));
    }

    public function testGetMsisdnDetail()
    {
        $this->assertEquals(1, 1);

    }

}