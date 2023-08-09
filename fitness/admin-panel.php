<!DOCTYPE html>
<?php



$hostname = "localhost";
$username = "root";
$password = "2125";
$databaseName = "fitness";



$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$query = "SELECT * FROM `Trainer`";

$result1 =mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/gym14.jpg');background-size:cover;height:500px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active" >Les Members</a>
                <a href="trainer_details.php" class="list-group-item">Information client</a>
                <a href="package.php" class="list-group-item">Les packs</a>
                <a href="payment.php" class="list-group-item"> Les Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainer.php" class="list-group-item active">Coachs</a>
              <a href="trainer.php" class="list-group-item active">Information Coach</a>             
              <a href="trainer.php" class="list-group-item active">Ajouter un Coach</a>
            </div>      
            
        </div>
            <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Enregistrer Un nouveau Member</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label> NOM:</label>
<input type="text" name="fname" class="form-control"required><br>
                    <label>PRENOM:</label>
<input type="text" name="lname" class="form-control"required><br> 
 <label>EMAIL</label>
                    <input type="text" name="email" class="form-control" required><br>
                    <label>CLIENT ID</label>
<input type="text" name="contact" class="form-control"required><br>        
 <label>CAOCH </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
  <input type="submit" class="btn btn-primary" name="pat_submit" value="ENREGISTRER">               
     <a href="func.php" class="btn btn-light"></a>
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">DECONNEXION</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   