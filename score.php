<?php
            
            session_start();
           
          // $mytoken = $_SESSION["myToken"];
          $mytoken = htmlspecialchars($_GET["token"]);           
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoreboard for OBS by TechSanjal.com </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: transparent;">
    <div id="show"></div>
<script type="text/javascript">
   
		$(document).ready(function() {
			setInterval(function () {
                var token ="<?php echo $mytoken ?>";
				$('#show').load('data.php?token='+token)
			}, 1000);
		});
	</script>


</body>
</html>