
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="index.css"/>
</head>

<header class="menu">
<nav>
<ul>
<?php include('header.php'); ?>
</ul>
</nav>
</header>

<body class="connexion">
    <main>
        <h1>Connexion</h1>

        <div class="formulaire">
            <div class="carré">
                <form class='formco' method="POST" action="">

                    <label for="login">Identifiant :</label>
                    <input type="text" placeholder="login" name="login" />

                    <label for="mot de passe">Mot de passe :</label>
                    <input type="password" placeholder="password" name="password" />

                    <br>
                    <input type="submit" value="Connexion" name="connexion">
                </form>
            </div>
        </div>
    </main>
</body>

</html>

<?php


if(isset($_SESSION['login']))

{
    header("location:index.php");
}
$connexion = mysqli_connect("localhost", "root", "", "discussion");

if(isset($_POST["connexion"])) {

    $login = $_POST["login"];
    $password = $_POST["password"];
    $requete = "SELECT password,id FROM utilisateurs WHERE login = '$login'";
    $query = mysqli_query($connexion, $requete);
    $resultat = mysqli_fetch_all($query);

    if(!empty($resultat))
    {
        if (password_verify($_POST['password'], $resultat[0][0])) {
            $_SESSION['login'] = $login;
            $_SESSION['id']=$resultat[0][1];
            header("location:index.php");
        } else {
            echo "Le mot de passe ne correspond pas";
        }
    }
    else
    {
        echo "Mauvais login";
    }
}


?>