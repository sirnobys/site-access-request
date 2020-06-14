<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <?php
    require('../../login/db.php');

    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        // $level_query= "SELECT `level` from users WHERE username='$username'";
        // $level=mysqli_query($con,$level);
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' or email='$username'  and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['level'] == 0) {

                $_SESSION['username'] = $logged_in_user['username'];
                $_SESSION['success']  = "You are now logged in";
                header('location: hod/index.php');  

            }elseif($logged_in_user['level'] == 1){
                $_SESSION['username'] = $logged_in_user['username'];
                $_SESSION['success']  = "You are now logged in";

                header('location: sm/index.php');
            }
          


            }else{ 
                echo "
                <div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>Warning!</h4>
  <p>Incorrect input of credentials. The Username and Password combination does not exist. Kindly check well before logging in again.</p>
  <hr>
  <p class='mb-0'><a href='login.php' class='btn btn-primary'> click here to login<a/></p>
</div>";
                }
    }else{
?>



    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form accept="" method="POST" name="login">
                                            <div class="form-group h5"><label class="small mb-1" for="inputEmailAddress ">Username</label><input name="username" class="form-control py-4" id="inputEmailAddress" required type="text" placeholder="email or username" /></div>
                                            <div class="form-group h5"><label class="small mb-1" for="inputPassword">Password</label><input required name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="password" /></div>
                                            <div class="form-group">
                                                <!-- <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div> -->
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html">Forgot Password?</a>
                                            <input name="submit" type="submit" value="Login" class="btn btn-primary form-group" />

                                                <!-- <a type="submit " class="btn btn-primary" href="index.html">Login</a></div> -->
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <!-- <div class="small"><a href="register.html">Need an account? Sign up!</a></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <?php } ?>

    </body>
</html>

