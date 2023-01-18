<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>
</head>
<body>
    <div class="sarcina1">
        <div class="title">
            Data livrării
        </div>
        <div class="php">
            <p>Data și ora efectuării comenzii</p>
            <?php 
                $sarbatori = array("01-01", "03-08", "12-25", "01-07");
                $data_comanda = date("l d-m-Y H:i", strtotime('+1 hour'));
                if ((date('D') === 'Sat') || (date('D') === 'Sun')) {
                    echo "<p>Data livrarii va fi data de ".date('d-m-Y', strtotime('next monday'))."</p";
                } else if ($data_comanda < date('d-m-Y H:i', strtotime("12:00:00"))) {
                   echo "<p>Data livrarii va fi data de ".date("d-m-Y")."</p";
                   
                } else {
                    echo "<p>Data livrarii va fi data de ".date('d-m-Y', strtotime('+1 day'))."</p";
                }
            ?>
        </div>
    </div>
    <div class="sarcina2">
        <div class="title">
            La mulți ani
        </div>
        <div class="php">
            <?php
                $dob = strtotime("2023-08-28");
                $now = time();
                $datediff = $dob - $now;
                echo "Până la ziua ta au mai rămas - ".round($datediff / (60 * 60 * 24))." zile.";
            ?>
        </div>
    </div>
    <div class="sarcina3">
        <div class="title">
            Salutare
        </div>
        <div class="php">
            <?php 
                $time = date('H:i', strtotime('+1 hour'));
                if (($time >= date('H:i', strtotime("07:00:00"))) && ($time <= date('H:i', strtotime("11:00:00")))) {
                    echo "Bună dimineața";
                }
                
                if (($time > date('H:i', strtotime("11:00:00"))) && ($time <= date('H:i', strtotime("18:00:00")))) {
                    echo "Bună ziua";
                }
                
                if (($time > date('H:i', strtotime("18:00:00"))) && ($time <= date('H:i', strtotime("22:00:00")))) {
                    echo "Bună seara";
                }
                
                if ($time > date('H:i', strtotime("22:00:00"))) {
                    echo "Noapte bună";
                }

                if ($time < date('H:i', strtotime("07:00:00"))){
                    echo "De ce nu dormi, mâine ai Programarea Web";
                }
            ?>
            <p>Ora curentă</p>
            <?php 
                echo $time;
            ?>
        </div>
    </div>
</body>
</html>