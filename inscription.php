<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="index.css"/>
</head>


<header class="menu">
<nav>
<ul>
<?php include('header.php') ?>
</ul>
</nav>
</header>

<body class="inscription">
    <main>
        <h1>Inscription</h1>

        <div class="formulaire">
            <div class="carré">
                <form method="POST" action="">

                    <label for="login">Identifiant :</label>
                    <input type="text" placeholder="login" name="login" />

                    <label for="mot de passe">Mot de passe :</label>
                    <input type="password" placeholder="password" name="password" />

                    <label for="confirmation">Confirmer mot de passe :</label>
                    <input type="password" placeholder="confirm" name="confirmpass" />
                    <br>
                    <input type="submit" value="Inscription" name="inscription">
                </form>
            </div>
        </div>
    </main>
</body>

</html>

<?php


$connexion = mysqli_connect("localhost", "root", "", "discussion");

if(isset($_POST["inscription"])) {

    $login = $_POST["login"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $confirmpass = $_POST["confirmpass"];
    $requete = "SELECT login FROM utilisateurs WHERE login = '$login'";
    $query = mysqli_query($connexion, $requete);
    $resultat = mysqli_fetch_all($query);

    if(!empty($resultat) || $_POST["password"] != $confirmpass)
    {
        if (!empty($resultat)) {
            echo "Ce login existe déja";
        } 

        if($_POST["password"] != $confirmpass)
        {
            echo "Le mot de passe ne correspond pas";
        }

    }
    else {
        $insertusers = "INSERT INTO utilisateurs(login, password) VALUES ('$login','$password')";
        $query = mysqli_query($connexion, $insertusers);
        header("location:connexion.php");
    }
}
?>