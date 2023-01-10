<?php
            session_start();
            include 'config.php';
            include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to TechSanjal Multi Stream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #202124;">
<div class="container" >
<div class="row">
<div class="col-sm-3"></div>
    <div class="text-light col-sm-6" style="margin-top:10px;"> <?php 
     $uemail = $_SESSION["email"];
      if(isset($_SESSION["name"])){
        echo "<span style='font-size:22px;'>Hello ". $_SESSION["name"].", </span>";
      }else{
        $URL="login.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

      }
     
      ?> 
      <h2 class="text-info"><center>Add or Update your Score</center> </h2> <hr>

     <?php 
     
     if(isset($_POST["update"])){
          $TeamA = $_POST["TeamA"];
          $TeamB = $_POST["TeamB"];
          $TeamAscore = $_POST["TeamAscore"];
          $TeamBscore = $_POST["TeamBscore"];

          $teamA = sec(($teamA));
          $teamB = sec(($teamB));
          $teamAscore = sec(($teamAscore));
          $teamBscore = sec($teamBscore));

        


          // Set Session email into a var
               $uemail = $_SESSION["email"];
              // update
              $update = "UPDATE user SET teamA='$TeamA', teamB='$TeamB',teamAscore='$TeamAscore',teamBscore='$TeamBscore'  where email='$uemail'";
              if(mysqli_query($conn, $update)){
                echo "<div class='alert alert-primary'>Update Successfully!</div>";
              }else{
                echo "Update Failed!";
              }



     }
          // TO STORE VALUE IN THE INPUT FIELD!
          $store = "SELECT * FROM user WHERE email='$uemail'";
          $res= $conn->query($store);
          if ($res->num_rows > 0) {
              // output data of each row
              while($row = $res->fetch_assoc()) {
                $teamA = $row["teamA"];
                $teamB = $row["teamB"];
                $teamAscore= $row["teamAscore"];
                $teamBscore= $row["teamBscore"];
          
              }
          
          }


     ?>


     <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
      <div class="row">
          <div class="col">
            <label for="TeamA" class="form-label"><b>Team A Name</b></label>
            <input type="text" id="TeamA"  name="TeamA" class="form-control" placeholder="Team A Name" value="<?php echo $teamA; ?>">
           </div> 
          <div class="col">
           <label for="TeamA" class="form-label"><b>Team B Name</b></label>
           <input type="text" class="form-control" name="TeamB" placeholder="Team B Name" value="<?php echo $teamB; ?>">
           </div>
        </div>
           <div class="text-danger"> <center>&nbsp; For Better Look, Please only use 3 Letters in the Team Name.</center></div> 

      <div class="row">
        <div class="col">
          <label for="TeamAScore" class="form-label"><b>Team A Score</b></label>
          <input type="number" id="TeamBscore" name="TeamAscore" class="form-control" placeholder="Team A Score" value="<?php echo $teamAscore; ?>">
         </div> 
         <div class="col">
         <label for="TeamBscore" class="form-label"><b>Team B Score</b></label>
          <input type="number" id="TeamBscore" name="TeamBscore" class="form-control" placeholder="Team B Score" value="<?php echo $teamBscore; ?>">
          <br>
       </div>
        <button name ="update" class="btn btn-primary btn-lg btn-block">UPDATE </button>
      </div>
  
</form>

    
      <hr>
<div class="text-danger"><a class="text-danger text-decoration-none" href="logout.php">Logout</a></div>




      </div>
  <div class="col-sm-3"></div>
</div>
</div>   




</body>
</html>