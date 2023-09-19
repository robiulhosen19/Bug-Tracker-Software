<?php include_once("class/function.php") ?>
<?php

    if(isset($_POST['email']) && isset($_POST['password'])){
        $useremail = $_POST['email'];
        $userpass = $_POST['password'];
        if(!empty($useremail) && !empty($userpass)){
            $sql = "SELECT id FROM users WHERE email=' $useremail' AND password= '  $userpass' ";
            $sql_query = mysqli_query($conn, $sql);

            $mysqli_query_rows = mysqli_num_rows($sql_query);
            if($mysqli_query_rows){
                header("Location: show_user.php");
             exit();
            }
            else{
                echo 'Invalid Email oR Password ';
            }
        }else{
            echo 'Fill up all fields!';
        }
        
    }



?>
<?php  include("includes/head.php")  ?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <h3 class="text-center font-weight-light my-4">BUG TRACKER SOFTWARE</h3>
                                    <h3 class="text-center font-weight-light my-0">Login</h3>
                                    <div class="card-body">

                                        <form action="index.php" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" name="password" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div> -->
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" name="login" href="template.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <?php include("includes/scripts.php") ?>
    </body>
</html>
