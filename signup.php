<?php
            session_start();
            $showerror=false;
            $exist = false;
           
                include './connects/config.php';
                include 'function.php';

                     if(isset($_POST['signup'])){

                    $fname = $_POST["fname"];
                    $email = $_POST["email"];
                    $pass = $_POST["password"];
                    $token = date("Ymdhis").rand(10,100);
                            // Trim , Escape and Validate
                    $fname = sec($fname);
                    $email = sec($email);
                    $pass = sec($pass);
                    $token = sec($token);

                

                    $mysql = "SELECT * FROM user where email='$email'";
                    $res = mysqli_query($conn, $mysql);
                    $count =mysqli_num_rows($res);
                    if($count==0){
                                  // if yes code goes here
                                //insert into DB
                                $iq="INSERT INTO user (email, pass, fname, token) VALUES('$email', '$pass', '$fname',$token)";
                                if($iqd = mysqli_query($conn, $iq))
                                {   $_SESSION["name"]= $fname;
                                    $_SESSION["email"] = $email;
                                    header('Location: dashboard.php');
                                   

                                   
                                }else{
                                    echo "insert ERROR";
                                }

                    }else{
                        // else code goes here 
                        $showerror = " &nbsp; &nbsp; Email already exist. Please login";
                    }

            }else{
               // NOTHING
            }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup -  <?php echo $siteTitle ?></title>
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
                <?php echo $showerror; ?>
            </div>

            <label for="signupName" class="form-lebel text-light">Name: </label>
            <input type="text" class="form-control" id="signupName" name="fname">


            <label for="loginEmail" class="form-lebel text-light">Email: </label>
            <input type="email" class="form-control" id="loginEmail" name="email">
            
            <label for="loginPassword" class="form-lebel text-light">Password: </label>
            <input type="password" class="form-control" id="loginPassword" name="password">
            <br>

            <button class="btn btn-primary" name="signup">Create Account</button>
        </form>
        <hr>
           <div class="text-light link-light center">
            <a href="login.php">Login</a> &nbsp;
            <a href="#">Reset PASSWORD</a>
         </div>

     </div>
     <div class="col"></div>
</div>

</div>   




</body>
</html>