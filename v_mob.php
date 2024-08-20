
<!doctype html>

<html >


<head>
    <meta charset="UTF-8">
    <title>سامانه انبار</title>
    <link rel="stylesheet" href="../style/style_golobal1.css">
</head>


<body >

<div class="back">

    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->



    <!------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------->



    <?php

    include "../conect9802.php";

    if ( !empty($_GET["exit_all"]) ){

        $ip = $_SERVER['REMOTE_ADDR'];

        $base = "a_p";
        $name = $ip;
        $i1 = -1;
        $t1 = -1;

        include "../save.php";

    }

    $ip = $_SERVER['REMOTE_ADDR'];

    $base = "a_p";
    $name = $ip;
    include "../read.php";
    $user = $t1;
    $pass = $i1;

    $quary = "SELECT `id`, `name`, `pass`, `kode_s` FROM `n_s` WHERE `user` = '$user'";
    $resault=mysqli_query($con,$quary);

    if( $page = mysqli_fetch_assoc($resault) ){


        if ( $page['pass'] == $pass ){

            $name_s = $page['name'];
            $kode_s = $page['kode_s'];

            echo "<img src=\"v_mob.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";

        }
        else{

            echo "<img src=\"index_mob.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";

            echo "<form action=\"login_mob.php\" >";
            echo "<input  name=\"\" class=\"h2\" type=\"submit\"  style=\" position: fixed; top:38% ; left: 35% ; width: 30%; height: 7%;\"  value=\"login\"   >";
            echo "</form>";
            die();
        }
    }
    else{

        echo "<img src=\"index_mob.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";

        echo "<form action=\"login_mob.php\" >";
        echo "<input  name=\"\" class=\"h2\" type=\"submit\"  style=\" position: fixed; top:38% ; left: 35% ; width: 30%; height: 7%;\"  value=\"login\"   >";
        echo "</form>";

        die();
    }

    ?>


    <form action=""><!-- کلید خروج -->
        <input name="exit_all" class="h2" type="submit" style=" position: fixed; top:0mm; left:0mm; width:12%; height:9%; background: aliceblue"; value="خروج">
    </form>

    <form action="" >  <!-- موجودی انبار -->

        <select  name="sel[name]" class="h2_m" type="text"  style=" position: fixed; top:3% ; left: 45% ; width: 30%; height: 7%;"  value=""   >

            <?php

            echo "<option>";
            echo $name_s;
            echo "</option>";
            ?>

        </select>


    </form>











<?php


$quary = "SELECT `id`, `id_d`, `d_s`, `d_m`, `d_r`, `t_h`, `t_m`, `t_s`, `num`, `dev`, `door`, `t`, `h`, `hp`, `lp`, `oil`, `power`, `com` FROM `data` WHERE `num` = '$kode_s'";
$resault=mysqli_query($con,$quary);

while( $page = mysqli_fetch_assoc($resault) ){

    $id =  $page['id'];
    $d_s = $page['d_s'];
    $d_m = $page['d_m'];
    $d_r = $page['d_r'];

    $t_h = $page['t_h'];
    $t_m = $page['t_m'];
    $t_s = $page['t_s'];

    $dev_num = $page['num'];

    $v_dev = $page['dev'];

    $v_door = $page['door'];

    $temp = $page['t'];

    $hum = $page['h'];

    $hp = $page['hp'];

    $lp = $page['lp'];
    $oil = $page['oil'];

    $com = $page['com'];

    $power = $page['power'];

}


echo "<div class=\"h4\" style=\" position: fixed; top:9% ; left: 20% ; \" >";
echo $t_h.":".$t_m.":".$t_s;
echo "</div>";

echo "<div class=\"h4\" style=\" position: fixed; top:9% ; left: 60% ; \" >";
echo $d_s."/".$d_m."/".$d_r;
echo "</div>";

echo "<div class=\"h4\" style=\" position: fixed; top:30% ; left: 46% ; \" >";
echo $id;
echo "</div>";

echo "<div class=\"h5\" style=\" position: fixed; top:23% ; left: 22% ; \" >";
echo $temp;
echo "</div>";

echo "<div class=\"h5\" style=\" position: fixed; top:23% ; left: 65% ;  \" >";
echo $hum;
echo "</div>";

/*
echo "<div class=\"h3\" style=\" position: fixed; top:52% ; left: 30% ; color: red;  \" >";
if ( $v_door > 0 ){
    echo "در ";
    echo $v_door;
    echo "دقیقه است باز است";
}
else  echo "در بسته است";




















    if ( !empty($_GET["out"]) ){

        $id_sard=$kode_s;

        $out_sms = $_GET["out_sms"];

        $out_sound = $_GET["out_sound"];

        $out_pol = $_GET["out_pol"];


        if ( $out_sms == "on" ){

            $name = "out_sms".":".$id_sard;
            $base = "set";
            $i1 = 1;
            $t1 = "";
            include "../save.php";

        }
        else{
            $name = "out_sms".":".$id_sard;
            $base = "set";
            $i1 = 0;
            $t1 = "";
            include "../save.php";
        }

        //***********************

        if ( $out_sound == "on" ){

            $name = "out_sound".":".$id_sard;
            $base = "set";
            $i1 = 1;
            $t1 = "";
            include "../save.php";

        }
        else{
            $name = "out_sound".":".$id_sard;
            $base = "set";
            $i1 = 0;
            $t1 = "";
            include "../save.php";
        }

        //*************************

        if ( $out_pol == "on" ){

            $name = "out_pol".":".$id_sard;
            $base = "set";
            $i1 = 1;
            $t1 = "";
            include "../save.php";

        }
        else{
            $name = "out_pol".":".$id_sard;
            $base = "set";
            $i1 = 0;
            $t1 = "";
            include "../save.php";
        }
        //*************************




    }

    ?>



    <form action="" >  <!-- موجودی انبار -->

        <?php

        $id_sard=$kode_s;

        $name = "out_sms".":".$id_sard;
        $base = "set";
        include "../read.php";
        $out_sms=$i1; $i1=0;


        $name = "out_sound".":".$id_sard;
        $base = "set";
        include "../read.php";
        $out_sound=$i1; $i1=0;


        $name = "out_pol".":".$id_sard;
        $base = "set";
        include "../read.php";
        $out_pol=$i1; $i1=0;


        ?>

        <input  name="out_sms" class="h2_m" type="checkbox"   <?php  if ( $out_sms == 1 ) { echo "checked =  cheched";}?>  style=" position: fixed; top:23% ; left: 77% ; width: 10%; height: 7%;"  value="on"   >

        <input  name="out_sound" class="h2_m" type="checkbox" <?php  if ( $out_sound == 1 ) { echo "checked =  cheched";}?> style=" position: fixed; top:36% ; left: 77% ; width: 10%; height: 7%;"  value="on"   >

        <input  name="out_pol" class="h2_m" type="checkbox"  <?php  if ( $out_pol == 1 ) { echo "checked =  cheched";}?> style=" position: fixed; top:50% ; left: 77% ; width: 10%; height: 7%;"  value="on"   >

        <input  name="out" class="h2" type="submit"  style=" position: fixed; top:83% ; left: 82% ; width: 10%; height: 6.5%;"  value="ok"   >

    </form>



