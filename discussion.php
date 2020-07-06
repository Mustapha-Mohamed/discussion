<html>

<head>
    <title>discussion</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="index.css"/>
</head>



<body>
<header class="menu">
<nav>
<ul>
<?php include('header.php'); ?>
</ul>
</nav>
</header>

<body>


<div id="formulaire">
				<h2>Discussion</h2>
				<form method="post" action="">
					<textarea name="commentaire" id="formulaire_2" placeholder="ÉCRIVEZ VOTRE MESSAGE" rows="8" cols="50"></textarea></p>
					<input type="submit" name="submit" id="formulaire_3">
				</form>

<?php

if(isset($_POST['submit']))
{
    $utilisateur = $_SESSION['id'];
    $commentaire = $_POST['commentaire'];
    $commentaire2 = addslashes($commentaire);
    
    $connexion = mysqli_connect("localhost", "root", "", "discussion");
    $requete= "INSERT INTO messages (message,id_utilisateur,date) VALUES ('$commentaire2','". $utilisateur."', NOW())";
    mysqli_query($connexion, $requete);

    
   // header("Location: index.php");
   

    
}

$connexion = mysqli_connect("localhost", "root", "", "discussion");
$requete= "SELECT login,message,date FROM messages INNER JOIN utilisateurs ON messages.id_utilisateur = utilisateurs.id";
$querry=mysqli_query($connexion, $requete);
$rep=mysqli_fetch_all($querry);

foreach($rep as $r)
{?>
<div>
    login :<?=$r[0]?>
    date :<?=$r[2]?>
    <?=$r[1]?>

</div>
<?php
}
?>










