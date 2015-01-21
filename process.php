<?php

require_once './mno.php';
if (array_key_exists('msisdn',$_POST)) {
    print_r(\Mno\MSDN::getMsisdnDetail($_POST['msisdn']));
}

