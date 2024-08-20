

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="test.css">
</head>

<body>
    <h1>RAVIS GSM!</h1>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="row">

        <div class="scroll-container col-sm-2" >
            <ul class="tree">
                <li>
                    <details open>
                        <summary>Giant planets</summary>
                        <ul>
                            <li>
                                <details>
                                    <summary>Gas giants</summary>
                                    <ul>
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li>Saturn</li>
                                    </ul>
                                </details>
                            </li>
                            <li>
                                <details>
                                    <summary>Ice giants</summary>
                                    <ul>
                                        <li>Uranus</li>
                                        <li>Neptune</li>
                                    </ul>
                                </details>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>


        <div class="col-sm-2  " >
            <div class="row " >

                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>

            </div>

            <div class="row" >
                <form  action="">
                    <select name="choise" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="submit" value="Submit the form"/>
                </form>

            </div>

        </div>

    </div>

<?php

echo "ok:";

    if ( !empty($_GET["choise"] )){

        $user = $_GET['choise'];

        echo $user;

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




    }

?>

</html>
<?php

?>
