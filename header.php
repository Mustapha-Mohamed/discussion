<body>
    <html>

<?php
session_start();

if (isset($_SESSION['login'])):
	?>

<header class="menu">

<div class="menu">
    <ul>
      	
        <li>  <a class="lasuite" > </li>
        <li>  <a href="index.php">accueil</a></li>
        <li>  <a href="profil.php">profil</a></li>
        <li> <a href="discussion.php">discussion</a></li>
</ul>
              </div>
 </header>




        <form class="iphone" method="post">
            <input type="submit" name='deconnexion' value="Deconnexion">
        </form>
        <?php if (isset($_POST['deconnexion'])) {
                session_unset();
                session_destroy();
                header('Location:index.php');
            }
            ?></li>


 <?php else:?>     
 
   
  <div class="menu">

 <ul>
  <li> <a class="lasuite" href="inscription">inscription</a></li>   
  <li><a href="connexion.php">connexion</a></li>
  <li><a href="#profil.php">profil</a></li>
  <li><a href="#discussion.php">discussion</a></li>
  
 </ul>



      </div>

 
      <?php endif;?>   

  

</body>
</html>

