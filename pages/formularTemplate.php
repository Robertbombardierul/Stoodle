<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/variabiles.css">
    <link rel="stylesheet" href="./CSS/base.css">
    <title>Stoodle</title>
</head>

<body>
    <style>
        label {
            font-size: 4em;
            margin: 4rem 0;
            text-align: center
        }
        select{
            padding: 1rem;
        }
    </style>
    <form action="./formular.php" method="post" id="formular">
        
        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>De ce esti pasionat?</label>
                <select name="pasiune">
                    <?php
                        $array = array("Alegeti pasiunea","PESCUIT", "MANCAT");
                        foreach ($array as $tip)
                            echo "<option value='".$tip."'>".$tip."</option>";
                    ?>
                </select>
                <input type="button" value="Urmatoare intrebare" onclick="nextQuestion()" class="button"></input>
            </div>
        </div>
        
        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Cat de mult esti pasionat?</label>
                <select name="intesitate_pasiune">
                    <option value="null">Pe o scara de la 1 la 5</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        </div>
        
        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Vrei un part-time job?</label>
                <select name="job">
                    <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                </select>
                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        
        </div>
        
        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Care sunt materiile tale preferate</label>
                <select name="materii">
                    <?php
                    $array = array("MATE", "FRANCEZA");
                    foreach ($array as $materie)
                        echo "<option value='".$materie."'>".$materie."</option>";
                    ?>
                </select>
                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        </div>

        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center">
                <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                    <label>Ce tip de carti iti place sa citesti?</label>
                    <select name="carti">
                        <?php
                                $array = array("BUNE", "RELE");
                                foreach ($array as $tip)
                                    echo "<option value='".$tip."'>".$tip."</option>";
                            ?>
                    </select>
                    <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
                </div>
            </div>
        </div>

        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Din ce judet esti?</label>
                <select name="judet">
                    <?php
                            $array = array("Prahova", "Ilfov");
                            foreach ($array as $tip)
                                echo "<option value='".$tip."'>".$tip."</option>";
                        ?>
                </select>
                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        </div>

        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Te consideri o persoana sociabila?</label>
                <select name="social">
                    <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                </select>
                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        </div>

        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Practici vreun sport</label>
                <select name="sport">2
                    <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                </select>
                <input type="button" onclick="nextQuestion()" class="button" value="Urmatoare intrebare"></input>
            </div>
        </div>

        <div class="row" style="height:100vh">
            <div class="col flex-column d-flex justify-content-center align-items-center" style="height:100vh">
                <label>Consideri ca poti ca poti face fata unor situatii foarte stresante?</label>
                <select name="stres">
                    <option value="Da">Da</option>
                    <option value="Nu">Nu</option>
                </select>
                <br />

                <input type="submit" value="Trimite Formular" class="button">
            </div>
        </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./JS/formular.js"></script>
</body>

</html>