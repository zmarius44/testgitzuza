<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator medie</title>
</head>
<body>
    <section>
        <div class="header">
            <p>Calcularea mediei de concurs</p>
        </div>
        <div class="subheader">
            <div class="subcp1">
                <p>
                    Media de concurs
                </p>
            </div>
        </div>
        <form action="<?php
        if ((isset($_POST['instr']))&&(isset($_POST['str']))&&(isset($_POST['math']))&&(isset($_POST['istinf']))&&(isset($_POST['mnea']))) {
         echo $_SERVER['PHP_SELF']; 
        }
         ?>" method="post">
            <label for="instr">Limba de instruire</label>
            <input name="instr" type="text"> <br>
            <label for="str">Limba straina</label>
            <input name="str" typetype="text"> <br>
            <label for="math">Matematica</label>
            <input name="math" typetype="text"> <br>
            <label for="istinf">Info/Istoria</label>
            <input name="istinf" typetype="text"> <br>
            <label for="mnea">Media Notelor Examenelor de Absolvire (MNEA)</label>
            <input name="mnea" typetype="text"> <br>
            <input type="submit" name="submit" value="Calculeaza">
        </form>

        <div class="result">
            <p>Media de concurs este <span>
                <?php 
                if ((isset($_POST['instr']))&&(isset($_POST['str']))&&(isset($_POST['math']))&&(isset($_POST['istinf']))&&(isset($_POST['mnea']))) {
                    $MDNP = ($_POST['instr'] + $_POST['str'] + $_POST['math'] + $_POST['istinf'])/4;
                    $MC = 0.6 * $MDNP + 0.4 * $_POST['mnea'];
                    echo $MC;
                }
                ?>
            </span></p>
        </div>

        
    </section>
</body>
</html>