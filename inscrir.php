<?php
require "connexion.php";
if(isset($_POST['enregistrer'])){
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
//echo "<script>alert('inscription ressuie')</script>";
}

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style >
body{
    padding: 0px;
    margin:0px;
    background-image: url("gym17.jpg");
    background-size:cover;height:500px;

     
}
#cont{
  font-size:bolder;
}



.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    padding: 0 11%;
    z-index: 10000;
    background: #fff fixed;
    text-decoration: none;
  
  
  }

  
  
  .header .logo {
    font-weight:bolder;
    color: #f06412;
    font-size: 1.5rem;
    text-decoration: none;
  }
  
  .header .logo span {
    color: #3498DB;
    text-decoration: none;
  }
  
  .header .navbar a {
    display: inline-block;
    padding: 1.5rem 1rem;
    font-size: 1.1rem;
    color: #111;
    text-decoration: none;
  }
  
  .header .navbar a:hover {
    background: #f06412;
    text-decoration: none;
  }


fieldset{
    margin-top: 70px;
    width:430px;
    background-color:rgba(255, 255, 255, 0.897) ;
    box-shadow: 5px 5px 20px 1 px 10px rgb(85,85,85);
    border:0px;
    padding-left: 50px;
    padding-left: 50px;
    border-radius: 10px 10px 10px 10px;
    color: #111;
    height:540px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin-top:100px;
    
}
td{
  letter-spacing:1px;
  font-size:bolder;

}
h1{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    letter-spacing:2px;
    text-align: center;
    color:#3498DB;
    font-size:bolder;


}
#contrainner{
    max-width:500px;
}
hr{
     border: 1px solid white ;
     border-radius: 10px;
     width: 40%;
     


}
#sub{
   margin:40px 35px;
   color:#3498DB;
   background-color: white;
   width: %;
   font-size: 18px;
   border-radius: 100px;
   border: 1px solid  white;

 

}
#bt1{
  margin-left :0px;
}
#sub:hover{
color:#fff;
background-color: #252521;
}
input{
    font-size: 16px;
    border:none;
    outline:none;
    background:none;
    border-bottom:1px solid black;
    color:black;;
    width:100%,
   
}
#opt{
    background-color:;
}
#dt{
  color:#005266;
}

 </style>
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





<center>
  <fieldset style="width: 25%;">
    <form action="" method="post">
        <h1>Fiche d'inscription</h1>
        <hr>

<table> 
<tr>
<td>
CIN:</td> <td> <input type="text" name="numclient" placeholder="CIN*" required> <br> <br></td>
</tr>
<tr>
<tr>
<td>
Nom:</td> <td> <input type="text" name="nomc" placeholder="Nom*" required> <br> <br></td>
</tr>
<tr>
<td>Prenom:</td><td><input type="text" name="prenomc" placeholder=" Prenom*" required><br> <br></td>
</tr>
<tr>
<td>email:</td><td><input type="text" name="email" placeholder="Email*" required><br> <br></td>
</tr>
  <td>Date de Naissance : <br></td><td> <input type="date" name="dateN" id="dt" required>
 </td> <br>
  </tr>
  <tr>
  
      <td>Numero de télephone</td><td> <br><input type="tel" name="telephone" placeholder="TEL* " required><br> <br></td>
      </div>
          
  </tr>
</table>



    <div id="cont">
  <label   id="" for=""> Sexe :</label > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio"  id ="bt1" name="sexe" value="femme" require>Femme
<input type="radio" id ="bt2" name="sexe" value=" Homme" required>Homme</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<table>
      <tr>
  <td >Pack:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></td><td> <select name="idpack"><?php
        require 'connexion.php';
         $req="SELECT `idpack`, `typepack` FROM `pack` ";
            $rep=$con->query($req);
            while ($ligne=$rep->fetch()){
                echo "<option value='".$ligne['idpack']."'selected>".$ligne['typepack']."</option>";}
  ?></select> </td>
            
             <table>
                    <tr><td colspan="2"> <input type="submit" class="submit" value=" s'inscrire"   name="enregistrer" id="sub"></td></tr>
                </table>

  </tr></table>
    </form>

  </fieldset>
  </center>
  
</body>
</html>
