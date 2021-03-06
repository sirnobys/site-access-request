<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register User</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>

    
        <?php
    require('../../login/db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $level = stripslashes($_REQUEST['level']);
        $level = mysqli_real_escape_string($con,$level);
        $phone = stripslashes($_POST['phone']);
        $phone = mysqli_real_escape_string($con,$level);
        $password = stripslashes($_REQUEST['password']);
        $cpassword = stripslashes($_REQUEST['cpassword']);
        $password = mysqli_real_escape_string($con,$password);
        $cpassword = mysqli_real_escape_string($con,$cpassword);


        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date, level) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', $level)";
        $result = mysqli_query($con,$query);
        if($result){
           echo "
                <div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Successfully Created Account!</h4>
 
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
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add New User</h3></div>
                                    <div class="card-body">
                                        <form name="registration" method="post" action="">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Username</label><input required class="form-control py-4" name="username" id="inputFirstName" type="text" placeholder="Enter first name" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Level</label> 
                                                    <select  class="form-control "  name="level">
                                                    <option  value="0">HOD</option>
                                                     <option value="1">SECURITY MANAGER</option>
                                                </select>
                                            </div>
                                                </div>
                                              
                                              
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Last Name</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" /></div>
                                                </div> -->
                                            </div>
                                            

                                             <div class="form-row">
                                                <div class="col-md-6">
                                                   <div class="form-group ">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label><input required name="email" class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Phone</label><input required class="form-control py-4" id="evt" name="phone" type="text" placeholder="Phone number"  /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input required class="form-control py-4" name="password"  id="inputPassword" type="password" placeholder="Enter password" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input required class="form-control py-4" name="cpassword" id="inputConfirmPassword" type="password" placeholder="Confirm password" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><input type="submit" name="submit" class="btn btn-primary btn-block" > </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
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
<?php } ?>

<script type="text/javascript">
    function checkint(evt){
    var ch= String.fromCharCode(evt.which);
       if(!(/[0-9,.+/]/.test(ch))){
       alert('type in numbers only')
     env.preventDefault()
     }


    }
</script>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
