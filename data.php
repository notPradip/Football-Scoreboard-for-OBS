<?php 
session_start();

include './connects/config.php';

$_SESSION["myToken"] = $mytoken = htmlspecialchars($_GET["token"]);
$sql ="SELECT * FROM user WHERE token='$mytoken'"; // make it dynamic
$res= $conn->query($sql);
if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
      $teamA = $row["teamA"];
      $teamB = $row["teamB"];
      $teamAscore= $row["teamAscore"];
      $teamBscore= $row["teamBscore"];
	  $token = $row["token"];
	  // Value to Sessions
	

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Score <?php echo $siteTitle ?></title>
   

    <link href="https://fonts.googleapis.com/css?family=Anton:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="background-color: transparent;">




<div class="row mb-5">
					<div class="col-md-12">
						
						<div class="row">
							<div class="col-md-6">
								<div class="btn-group">
								  <button type="button" class="btn btn-primary active"><h2><b><?php echo $teamA ; ?></b> </h2></button>
								  <button type="button" class="btn btn-danger"><h2><b><?php echo $teamAscore ." : ". $teamBscore; ?></b> </h2></button>
								  <button type="button" class="btn btn-info active"><h2><b><?php echo $teamB; ?></b> </h2></button>
								</div>
							</div>
						</div>
					</div>
				</div>

    

</body>
</html>