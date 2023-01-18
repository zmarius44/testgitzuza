<?php 
    $base = fopen("comanda_pizza.txt", "a");
    fwrite($base, "Comanda:\n");
    $name = "Numele: ".$_POST['name']."\n";
    fwrite($base, $name);
    $number = "Numarul de telefon: ".$_POST['phnumb']."\n";
    fwrite($base, $number);
    $type = "Tip: ".$_POST['type']."\n";
    fwrite($base, $type);
    $sauce = "Sos: ".$_POST['sauce']."\n";
    fwrite($base, $sauce);
    if (isset($_POST['extra1'])){
    $extra1 = "Extra 1: ".$_POST['extra1']."\n";
    fwrite($base, $extra1);
    } else {
        $extra1 = "Extra 1: \n";
        fwrite($base, $extra1);
    }
    if (isset($_POST['extra2'])){
        $extra2 = "Extra 2: ".$_POST['extra2']."\n";
        fwrite($base, $extra2);
        } else {
            $extra2 = "Extra 2: \n";
            fwrite($base, $extra2);
        }
   
    $instruct = "Instructiuni:\n".$_POST['instruct']."\n\n";
    fwrite($base, $instruct);
    fclose($base);
    echo "<h1>Comanda a fost efectuată cu succes!</h1>"
?>