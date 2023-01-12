<?php
            session_start();

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
    <div class="vh-100 row align-items-center d-flex justify-content-center">
      <div class="col"></div>
     <div class="col">
        <img src="https://techsanjal.com/wp-content/uploads/2023/01/Tech-Sanjal-Logo.png" class="img" style="height: auto; width: 100%;" >

        <form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
            <div class="text-danger"> 


            <?php 
// Check Login
include 'config.php';
include 'function.php';
  
        if($_SERVER["REQUEST_METHOD"] == "POST"){
    // above checked the request method to be post
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $password=mysqli_real_escape_string($conn,$_POST["password"]);
            // securing inputs
            $email = sec($email);
            $password = sec($password);
                $sql = "SELECT * from user where email='$email' and pass='$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
           //     $active = $row['active'];

                $count = mysqli_num_rows($result);

                if($count == 1){
                        // redirect without HEADER
                        $_SESSION["name"]= $row['fname'];
                        $_SESSION["email"] = $row['email'];
                    $URL="dashboard.php";
                    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

                }else{
                    echo " &nbsp;  &nbsp; invalid username or password ";
                }
            

    }  
    if(isset($_SESSION['name'])){
        $URL="dashboard.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    
    }else{
        
    }

?>

            </div>
            <label for="loginEmail" class="form-lebel text-light">Email: </label>
            <input type="email" class="form-control" id="loginEmail" name="email">
            <label for="loginPassword" class="form-lebel text-light">Password: </label>
            <input type="password" class="form-control" id="loginPassword" name="password">
            <br>

            <button class="btn btn-primary" name="btn">Login</button>
        </form>
        <hr>
           <div class="text-light link-light center">
            <a href="signup.php">Register</a> &nbsp;
            <a href="#">Reset PASSWORD</a>
         </div>

     </div>
     <div class="col"></div>
</div>

</div>   




</body>
</html>