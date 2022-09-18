<?php
require "connection.php";
require "user.php";

session_start();

if(isset($_POST['korisnickoIme'])&& isset($_POST['lozinka'])){
    $korisnickoIme = $_POST['korisnickoIme'];
    $lozinka = $_POST['lozinka'];

    $rs = User::logIn($korisnickoIme, $lozinka, $conn);
    
    if($rs->num_rows==1){
        echo "Uspesno ste se prijavili";
        $_SESSION['loggeduser'] = "prijavljen";
        $_SESSION['id'] = $rs->fetch_assoc()['id'];
        header('Location: welcome.php');
        exit();
    } else{
        //promeni 
        echo '<script type="text/javascript">alert("Pogresni podaci za login");
                    window.location.href = "http://localhost/PhpAjaxMySQL/";</script>';
                exit();
                }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet--->
    <link rel="icon" href="images/logo.png"/>
    <link rel="stylesheet" href="css/mainpage.css">
    <title>Museum tracker</title>
</head>

<body>
    <div class="login-form">
        <div class="main-div">
        <form method="POST" action="#">
            <h1>Muzeji koje ste posetili na jednom mestu!</h1>
            <div class="imgcontainer">
                <img src="images/museumsign.png" >
            </div>
            <div class = "container">
                <input type="text" placeholder="Vase korisnicko ime" name="korisnickoIme" class="form-control" required>
                <br>
                <input type="password" placeholder="Vasa lozinka" name="lozinka" class="form-control" required>
                <br>
                <button class="btn" type="sumbit" >Prijava</button>
            </div>
        </form>
    </div>
</body>

</html>