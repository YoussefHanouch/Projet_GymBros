<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>INFORMATION CLIENT</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/gym11.jpg') no-repeat;background-size: cover;height: 450px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">REVENIR</a>
             </div>
             <div class="col-md-3"><h3> COACH INFORMATION</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
   
                         
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>COACH ID</th>
            <th>NOM</th>
         <th>TELEPHONE</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Enregistrer Un nouveau Member</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post"> 
                <label>COACH ID</label>
<input type="text" name="Trainer_id" class="form-control"><br>
 <label>NOM</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>TELEPHONE</label>
<input type="text" name="phone" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="tra_submit" value="ENREGISTRER">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>