  <?php
require "connexion.php";
if(isset($_POST['inscrire'])){
$numclient=$_POST['numclient'] ;
$nomc=$_POST['nomc'] ;
$prenomc=$_POST['prenomc'] ; //ENREGISTRER 
$email=$_POST['email'] ;
$dateN=$_POST['dateN'] ;
$telephone=$_POST['telephone'] ;
$sexe=$_POST['sexe'] ;
$idpack=$_POST['idpack'] ;
$sql="INSERT INTO `informationc`(`numClient`, `nomc`, `prenomc`, `email`, `dateN`, `telephone`, `sexe`, `idpack`) 
    VALUES ('$numclient','$nomc','$prenomc','$email','$dateN','$telephone','$sexe','$idpack')";
$req=$con->query($sql);
}
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GYMBROS</title>
    <link rel="stylesheet" href="formdecor">
    
</head>
<body>
<header class="header">

<a href="index.html" class="logo"> <span>GYM</span>BROS </a>

<div id="menu-btn" class="fas fa-bars"></div>

<nav class="navbar">
    <a href="index.html">ACCUEIL</a>
    <a href="index.html">A PROPOS</a>
    <a href="index.html">NOS OFFRES ET PROMOTIONS</a>
   

</nav>

</header>


    <div class="container">
    <div class="title">+Inscription+</div>

    <form method="post">

    <div class="user-details">
        <div class="input-box">

        <div class="input-box">
        <span class="details">Entrer votre CIN  </span>
        <input type="text" placeholder="Entrer votre CIN "  name="numclient"required>
        </div>

        <span class="details">Entrer Votre Nom </span>
        <input type="text" placeholder="Entrer Votre Nom" name="nomc" required>
        </div>

        <div class="input-box">
        <span class="details">Entrer Votre Prénom </span>
        <input type="text" placeholder="Entrer Votre Prénom"  name="prenomc"required>
        </div>

        <div class="input-box">
        <span class="details">Entrer Votre Email </span>
        <input type="email" placeholder="Entrer Votre Email" name="email"required>
        </div>

        <div class="input-box">
            <span class="details">Entrer votre Date de Naissance </span>
            <input type="date"  name="dateN" placeholder="Entrer votre Date de Naissance" required>
            </div>
               
        
        <div class="input-box">
            <span class="details"> Numero de Telephone  </span>
            <input type="text" name="telephone" placeholder="Numero de Telephone" required>
            </div>
      
    <label>Male</label> <input type="radio" name="sexe" id="dot1">

    <label>Female</label> <input type="radio" name="sexe" id="dot1"> 

      <select class="custom" name="idpack">
        <?php
        require "connexion.php" ;
         $req="SELECT `idpack`, `typepack` FROM `pack`";
         $rep=$con->query($req);
         while($ligne=$rep->fetch()){
         echo "<option value='".$ligne['idpack']."'>".$ligne['typepack']."</option>";
         }
        ?>
 </select> 

    <div class="button">
        <input type="submit" value="S'inscrire" name="inscrire" id='sub'>
    </div>
    </form>

</body>
</html>  

