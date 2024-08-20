

<head>
    <meta charset="UTF-8">
    <title>سامانه انبار</title>
    <link rel="stylesheet" href="style_golobal1.css">
</head>


<img src="index_mob.png" style=" position: fixed; top: 0mm; left: 0mm; width: 100%; height: 100%; "> <!-- عکس اصلی -->


<form action="login_mob.php" >  <!--hoshdar-->

    <input  class="h2" type="submit"  style=" position: fixed; top:38% ; left: 35% ; width: 30%; height: 7%;"  value="ورود"   >
</form>

<?php

include "sql.php";

$ip = $_SERVER['REMOTE_ADDR'];

$id = 1;

//$quary = "SELECT `id`, `name` FROM `test` WHERE `id` = '$id'";
$quary = "SELECT `id`, `name` FROM `test` WHERE 1 ";
$resault=mysqli_query($con,$quary);

while( $page = mysqli_fetch_assoc($resault) ){

    $name = $page['name'];

    echo "<div class=\"h4\" style=\" position: fixed; top:9% ; left: 20% ; \" >";
    echo $name.":";
    echo "</div>";

}

//$name = 'ali';


?>

//https://appsgeyser.io/10857812/panel
