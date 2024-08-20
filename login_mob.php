
<!doctype html>

<html >


<head>
    <meta charset="UTF-8">
    <title>سامانه انبار</title>
    <link rel="stylesheet" href="../style/style_golobal1.css">
</head>


<body >

<div class="back">


    <?php


    include "sql.php";


    ?>

    <?php

    if ( !empty($_GET["user"] )){

        $user = $_GET['user'];
        $pass = $_GET['pass'];

        if ( $user == "kave" & $pass == "1380" ){

            /*echo "<img src=\"welcome.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";
            echo "<form action=\"../main/set_all/set_all.php\" >";
            echo "<input  name=\"\" class=\"h3\" type=\"submit\"  style=\" position: fixed; top:50% ; left:61.5% ; width: 25%; height: 6%;\"  value=\"مدیر اصلی سیستم\"   >";
            echo "</form>";
            die();*/

        }

        $ip = $_SERVER['REMOTE_ADDR'];

        $base = "a_p";
        $name = $ip;
        $i1 = $pass;
        $t1 = $user;

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

            echo "<img src=\"welcome_mob.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";

            echo "<form action=\"v_mob.php\" >";
            echo "<input  name=\"\" class=\"h2\" type=\"submit\"  style=\" position: fixed; top:15% ; left:45% ; width: 35%; height: 6%;\"  value=\"$name_s\"   >";
            echo "</form>";

        }
        else{

            echo "<img src=\"login.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";
            echo "<form action=\"\" >";
            echo "<input  name=\"user\" class=\"h2\" type=\"text\"  style=\" position: fixed; top:50% ; left:20% ; width:50%; height:6%;\"  value=\"\"   >";
            echo "<input  name=\"pass\" class=\"h2\" type=\"text\"  style=\" position: fixed; top:68% ; left:20% ; width: 50%; height: 6%;\"  value=\"\"   >";
            echo "<input  name=\"\" class=\"h2\" type=\"submit\"  style=\" position: fixed; top:80% ; left:40% ; width: 25%; height: 5%;\"  value=\"login\"   >";
            echo "</form>";

        }
    }
    else{

        echo "<img src=\"login.png\" style=\" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; \"> ";

        echo "<form action=\"\" >";
        echo "<input  name=\"user\" class=\"h2\" type=\"user\"  style=\" position: fixed; top:50% ; left:20% ; width:50%; height:6%;\"  value=\"\"   >";
        echo "<input  name=\"pass\" class=\"h2\" type=\"password\"  style=\" position: fixed; top:68% ; left:20% ; width: 50%; height: 6%;\"  value=\"\"   >";
        echo "<input  name=\"\" class=\"h2\" type=\"submit\"  style=\" position: fixed; top:80% ; left:40% ; width: 25%; height: 5%;\"  value=\"login\"   >";
        echo "</form>";

    }


    ?>


</div>

</body>

