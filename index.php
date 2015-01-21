<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Naloga</title>
    <link href="/vendor/twitter/bootstrap/dist/css/bootstrap.css" rel="stylesheet"/>
    <link href="/vendor/twitter/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet"/>

</head>
<body>
<div class="container">
    <div class="row col-lg-6 col-lg-offset-3">
        <div class="page-header">
            Vnesite MSISDN:
        </div>
        <form method="post" action="index.php">


            <input name="msisdn" type="text" class="form-control" required="true"/>
            <br/>

            <div class="text-center">
                <button class="btn-success form-control" type="submit"> Pošlji poizvedbo</button>
            </div>
        </form>
        <div style="margin-top: 10px;">
            <?php
            require_once './Mno.php';
            $tmp = '';
            if (array_key_exists('msisdn', $_POST)) {
                $tmp = Mno\Msisdn::getMsisdnDetail($_POST['msisdn']);
            }

            if ($tmp != false) {
                echo ' <div class="alert alert-success">';
                echo 'Vaša telefonska številka ima naslednje podatke: ' . $tmp;
                echo '</div>';
            }

            if ($tmp == null) {
                echo ' <div class="alert alert-danger">';
                echo 'Napačen vnos podatkov.';
                echo '</div>';
            }
            ?>

        </div>
    </div>
</div>
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twitter/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
