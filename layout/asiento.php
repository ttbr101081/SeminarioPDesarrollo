
<div class="containerSeatDisplay">
<p>A continuaci&oacute;n seleccione sus asientos</p>
<div class="seatRow">
    <?php
        $sql = "select * from asientos where id_tren = ".$tren." and id_vagon = ".$vagon;
        $r = mysqli_query($l, $sql) or die ("ERROR al ingresar datos");
        $n = mysqli_num_rows($r);
        $mitad = round(($n / 2),0);
        $i=1;
        while($re = mysqli_fetch_object($r)){
            $num = $re -> num;
            if($i == 1){
                echo "<div class='seatsLeft'>";
            }elseif($i == 4){
                echo "</div>";
                echo "<div class='seatsRight'>";
                
            }elseif($i == 7){
                echo "</div>";
                $i=0;
            }
            if($i == 0){

            }else{
                echo "<button class='seat'>$num</button>";
            }
            
            $i++;
        }

    ?>

</div>

</div>