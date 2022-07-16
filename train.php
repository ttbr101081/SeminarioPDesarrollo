<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/seats.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <h1>¡Gracias por viajar con nosotros!</h1>
    
    <div class="mainContainer">

        <div class="selectVagonyTren">
            <form method="POST" action="seleccionar.php">
            <div class="tren">
                <h2>Tren: </h2>
                <p id="numVagon"></p>
                <p>A continuaci&oacute;n seleccione el tren en el que desea viajar</p>
                        <select name='Tren'>
                    <?php
                        session_start(); 
                        require("base/conex.php");
                        if(isset($_SESSION['email'])){
                            echo("<option value='0'>Seleccione el tren</option>");
                            $sql = "select * from tren where estado = 1";
                            $r = mysqli_query($l, $sql);
                            $n = mysqli_num_rows($r);
                            while($registro = mysqli_fetch_array($r)){
                                echo "<option value='$registro[id_tren]'> $registro[horario] / $registro[tdestino]</option>";
                            }
                            echo("</select>");
                        }
                    ?>
            </div>
                <br><br>
                        <div class='vagon'>
                        <h2>Vag&oacute;n: </h2>
                        <p id='numVagon'></p>
                        <p>A continuaci&oacute;n seleccione el vagon en el que desea viajar</p>
                            <select name='Vagon'>
                        <?php
                            echo("<option value='0'>Seleccione el vagon</option>");
                            $sql = "select * from vagon";
                            $r = mysqli_query($l, $sql);
                            $n = mysqli_num_rows($r);
                            while($registro = mysqli_fetch_array($r)){
                                echo "<option value='$registro[id_vagon]'> $registro[tipo_vagon] / $registro[precio]$</option>";
                            }
                            echo("</select>");
                        ?>
                    
            </div>
            <input type="submit" value="Aceptar">
            </form>              
        </div>


        <p></p>
    </div>

</body>

</html>